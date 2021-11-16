<?php

namespace App\Repository\Document;

use App\Models\Document;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class DocumentRepository implements DocumentInterface
{
    public function getAllDocuments()
    {
        // Show All Documents
        return Document::all();
    }

    // Store Document
    public function storeDocument($data)
    {
        // Store Image File
        // $image = Request::file('image');

        // if (fileExists($image)) {
        //     $newImage = time() . $image->getClientOriginalName();
        //     $image->storeAs('public/document/images', $newImage);
        // }

        // Store Document File
        $file = Request::file('file');
        $newName = sha1(date('YmdHis') . Str::random(30));
        $fileSizeInByte = File::size($file);

        if (fileExists($file)) {
            $newFile = $newName . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/document/docs', $file->getClientOriginalName());
        }

        $document = Document::create([
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(Document::class, 'slug', Request::input('title')),
            // 'image' => $newImage,
            'original_filename' => basename($file->getClientOriginalName()),
            'filename' => $newFile,
            'file_size' => $fileSizeInByte,
            'file_extension' => $file->getClientOriginalExtension(),
        ]);

        $document->save();

        return $document;
    }

    public function getDocument($id)
    {
        // Edit Document
        return Document::find($id);
    }

    public function updateDocument($data, $id = null)
    {
        // Update Document
        $document = Document::find($id);

        // $image = Request::file('image');
        // $old_image = Request::input('h_image');

        // Update Single Image
        // if (is_null($image)) {
        //     $document->image = $old_image;
        // } else {
        //     $name = $image->getClientOriginalName();
        //     $newImage = $document->image =  time() . $name;
        //     $image->storeAs('public/document/images', $newImage);
        //     $path = public_path() . "/storage/document/images/";
        //     if (file_exists($path . $old_image)) {
        //         unlink($path . $old_image);
        //     }
        // }

        $document->update([
            'title' => Request::input('title'),
        ]);

        $document->update();

        return $document;
    }

    public function deleteDocument($id)
    {
        // Delete Document
        $document = Document::where('id', $id)->firstOrFail();

        if (!$document) {
            return redirect()->route('document.index')->with('error', 'Document not found !!');
        } else {
            $image = "/public/document/images/" . $document->image;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            $file = "/public/document/docs/" . $document->original_filename;
            if (Storage::exists($file)) {
                Storage::delete($file);
            }

            Document::where('id', $id)->delete();

            return $document;
        }
    }

    public function download($filename)
    {
        $file_path = public_path('storage/document/docs/') . $filename;
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
