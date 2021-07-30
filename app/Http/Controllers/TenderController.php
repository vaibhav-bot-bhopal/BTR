<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TenderController extends Controller
{
    public function tenders()
    {
        $tenders = Tender::orderBy('id', 'desc')->paginate(9);
        return view('tender.tender', compact('tenders'));
    }

    public function show()
    {
        // Show Tender
        $data = Tender::all();
        return view('admin.tender.index')->with('data', $data);
    }

    public function create(Request $req)
    {
        // Create Tender
        $req->validate([
            'ten_title' => 'required|max:255',
            'ten_desc' => 'required',
            'ldate' => 'required',
            'ten_file' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:4096',
        ]);

        $file = $req->file('ten_file');
        $name = sha1(date('YmdHis') . Str::random(30));
        $fileSizeInByte = File::size($file);

        if ($req->hasFile('ten_file')) {
            $file = $req->file('ten_file');
            $new_file = $name . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/tender-documents', $new_file);
        }

        $tender = new Tender();
        $tender->title = $req->ten_title;
        $tender->slug = SlugService::createSlug(Tender::class, 'slug', $req->ten_title);
        $tender->description = $req->ten_desc;
        $tender->last_date = $req->ldate;
        $tender->original_filename = basename($file->getClientOriginalName());
        $tender->filename = $new_file;
        $tender->file_size = $fileSizeInByte;
        $tender->file_extension = $file->getClientOriginalExtension();
        $tender->save();

        if (session('locale') == 'en') {
            return redirect()->back()->with('success', 'Tender has been saved successfully.');
        }

        if (session('locale') == 'hi') {
            return redirect()->back()->with('success', 'निविदा सफलतापूर्वक सेव कर दी गई है।');
        }
    }

    public function edit($id)
    {
        // Tender Edit

        $data = Tender::find($id);

        if ($data) {
            return view('admin.tender.edit')->with('data', $data);
        } else {
            if (session('locale') == 'en') {
                return redirect()->route('btr.tender.show')->with('error', 'Tender Not Found !!');
            }

            if (session('locale') == 'hi') {
                return redirect()->route('btr.tender.show')->with('error', 'निविदा नहीं मिली !!');
            }
        }
    }

    public function update(Request $req, $id)
    {
        // Update Tender
        $validator = Validator::make($req->all(), [
            'ten_title' => 'required|max:255',
            'ten_desc' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('btr.tender.edit', $id)->withErrors($validator)->withInput();
        } else {
            $tender = Tender::find($id);

            $tender->title = $req->ten_title;
            $tender->slug = SlugService::createSlug(Tender::class, 'slug', $req->ten_title);
            $tender->description = $req->ten_desc;
            $tender->last_date = $req->ldate;
            $tender->update();

            if (session('locale') == 'en') {
                return redirect()->route('btr.tender.show')->with('success', 'Tender has been updated successfully.');
            }

            if (session('locale') == 'hi') {
                return redirect()->route('btr.tender.show')->with('success', 'निविदा सफलतापूर्वक अपडेट कर दी गई है।');
            }
        }
    }

    public function delete($id)
    {
        // Delete Tender
        $data = Tender::where('id', $id)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Tender not found.');
        } else {
            Tender::where('id', $id)->delete();
            $file_path = "/public/tender-documents/" . $data->filename;
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }

            if (session('locale') == 'en') {
                return redirect()->back()->with('error', 'Tender has been deleted successfully.');
            }

            if (session('locale') == 'hi') {
                return redirect()->back()->with('error', 'निविदा सफलतापूर्वक हटा दी गई है।');
            }
        }
    }

    // public function download($filename)
    // {
    //     $file_path = public_path('/storage/tender-documents') . $filename;
    //     if (file_exists($file_path)) {
    //         // Send Download
    //         return Response::download($file_path, $filename, [
    //             'Content-Length: ' . filesize($file_path)
    //         ]);
    //     } else {
    //         // Error
    //         return redirect()->back()->with('error', 'Requested file does not exist on our server !!');
    //     }
    // }

    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}
