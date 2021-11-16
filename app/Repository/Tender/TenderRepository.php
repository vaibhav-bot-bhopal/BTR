<?php

namespace App\Repository\Tender;

use App\Models\Tender;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class TenderRepository implements TenderInterface
{
    public function getAllTenders()
    {
        // Show All Tenders
        return Tender::all();
    }

    public function storeTender($data)
    {
        $file = Request::file('file');
        $name = sha1(date('YmdHis') . Str::random(30));
        $fileSizeInByte = File::size($file);

        // Store Tender
        if (fileExists($file)) {
            $newFile = $name . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/tender_documents', $file->getClientOriginalName());
        }

        $tender = Tender::create([
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(Tender::class, 'slug', Request::input('title')),
            'description' => Request::input('description'),
            'last_date' => Request::input('date'),
            'original_filename' => basename($file->getClientOriginalName()),
            'filename' => $newFile,
            'file_size' => $fileSizeInByte,
            'file_extension' => $file->getClientOriginalExtension(),
        ]);

        $tender->save();

        return $tender;
    }

    public function getTender($id)
    {
        // Edit Tender
        return Tender::find($id);
    }

    public function updateTender($data, $id = null)
    {
        // Update Tender
        $tender = Tender::find($id);

        $tender->update([
            'title' => Request::input('title'),
            'description' => Request::input('description'),
            'last_date' => Request::input('date'),
        ]);

        $tender->update();

        return $tender;
    }

    public function deleteTender($id)
    {
        // Delete Tender
        $tender = Tender::where('id', $id)->firstOrFail();

        if (!$tender) {
            return redirect()->route('tender.index')->with('error', 'Tender not found.');
        } else {
            $file_path = "/public/tender_documents/" . $tender->original_filename;
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }

            Tender::where('id', $id)->delete();

            return $tender;
        }
    }

    public function download($filename)
    {
        $file_path = public_path('storage/tender_documents/') . $filename;
        if (file_exists($file_path)) {
            // Send Download
            return response()->download($file_path, $filename);
        } else {
            // Error
            return redirect()->route('tender.index')->with('error', __('panel.tender-file-not-found'));
        }
    }

    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}
