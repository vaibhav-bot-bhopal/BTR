<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    public function docs()
    {
        $docs = Document::orderBy('id', 'desc')->paginate(9);
        return view('docs.docs', compact('docs'));
    }

    public function show()
    {
        // Show Tender
        $data = Document::all();
        return view('admin.docs.index')->with('data', $data);
    }

    public function create(Request $req)
    {
        // Create Document
        $req->validate([
            'docs_title' => 'required|max:255',
            'docs_image' => 'image|required|mimes:jpeg,bmp,png,jpg',
            'docs_file' => 'required|mimes:pdf,doc,docx|max:4096',
        ]);

        $img = $req->file('docs_image');

        if ($req->hasFile('docs_image')) {
            $img = $req->file('docs_image');
            $new_img = time() . $img->getClientOriginalName();
            $img->storeAs('public/document/images', $new_img);
        }

        $file = $req->file('docs_file');
        $name = sha1(date('YmdHis') . Str::random(30));
        $fileSizeInByte = File::size($file);

        if ($req->hasFile('docs_file')) {
            $file = $req->file('docs_file');
            $new_file = $name . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/document/docs', $new_file);
        }

        $document = new Document();
        $document->title = $req->docs_title;
        $document->slug = SlugService::createSlug(Document::class, 'slug', $req->docs_title);
        $document->image = $new_img;
        $document->original_filename = basename($file->getClientOriginalName());
        $document->filename = $new_file;
        $document->file_size = $fileSizeInByte;
        $document->file_extension = $file->getClientOriginalExtension();
        $document->save();

        if (session('locale') == 'en') {
            return redirect()->back()->with('success', 'Document has been saved successfully.');
        }

        if (session('locale') == 'hi') {
            return redirect()->back()->with('success', 'दस्तावेज़ सफलतापूर्वक सेव कर दिया गया है।');
        }
    }

    public function edit($id)
    {
        // Tender Edit

        $data = Document::find($id);

        if ($data) {
            return view('admin.docs.edit')->with('data', $data);
        } else {
            if (session('locale') == 'en') {
                return redirect()->route('btr.docs.show')->with('error', 'Document Not Found !!');
            }

            if (session('locale') == 'hi') {
                return redirect()->route('btr.docs.show')->with('error', 'दस्तावेज़ नहीं मिला !!');
            }
        }
    }

    public function update(Request $req, $id)
    {
        // Update Document
        $validator = Validator::make($req->all(), [
            'docs_title' => 'required|max:255',
            'docs_image' => 'image|mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->route('btr.docs.edit', $id)->withErrors($validator)->withInput();
        } else {
            $document = Document::find($id);

            $document->title = $req->docs_title;
            $document->slug = SlugService::createSlug(Document::class, 'slug', $req->docs_title);
            $old_file = $req->old_img;

            if ($req->file('docs_image') == "") {
                $document->image = $req->old_img;
            } else {

                $name = $req->file('docs_image')->getClientOriginalName();
                $myfile = $document->image =  time() . $name;
                $req->file('docs_file')->storeAs('public/document/images', $myfile);
                $path = public_path() . "/storage/document/images/" . $old_file;
                unlink($path);
            }
            $document->update();

            if (session('locale') == 'en') {
                return redirect()->route('btr.docs.show')->with('success', 'Document has been updated successfully.');
            }

            if (session('locale') == 'hi') {
                return redirect()->route('btr.docs.show')->with('success', 'दस्तावेज़ को सफलतापूर्वक अपडेट कर दिया गया है।');
            }
        }
    }

    public function delete($id)
    {
        // Delete Document
        $data = Document::where('id', $id)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Document not found.');
        } else {
            Document::where('id', $id)->delete();

            $image = "/public/document/images/" . $data->image;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            $file_path = "/public/document/docs/" . $data->filename;
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }

            if (session('locale') == 'en') {
                return redirect()->back()->with('error', 'Document has been deleted successfully.');
            }

            if (session('locale') == 'hi') {
                return redirect()->back()->with('error', 'दस्तावेज़ को सफलतापूर्वक हटा दिया गया है।');
            }
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
            if (session('locale') == 'en') {
                return redirect()->back()->with('error', 'Requested file does not exist on our server !!');
            }

            if (session('locale') == 'hi') {
                return redirect()->back()->with('error', 'अनुरोधित फ़ाइल हमारे सर्वर पर मौजूद नहीं है !!');
            }
        }
    }
}
