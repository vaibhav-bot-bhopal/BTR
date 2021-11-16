<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // View Gallery
    public function gallery()
    {
        $photos = Gallery::orderBy('original_filename', 'DESC')->paginate(21);
        return view('main.gallery', compact('photos'));
    }

    // Dropzone
    private $photos_path;

    public function __construct()
    {
        $this->photos_path = storage_path('app/public/gallery');
    }

    public function index()
    {
        $photos = Gallery::orderBy('original_filename', 'DESC')->get();
        return view('admin.gallery.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . Str::random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            // $save_name = $name;
            $save_extension = $photo->getClientOriginalExtension();
            $fileSizeInByte = File::size($photo);
            // $resize_name = $name . Str::random(2) . '.' . $photo->getClientOriginalExtension();

            $photo->move($this->photos_path, $save_name);

            $upload = new Gallery();
            $upload->original_filename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $upload->filename = $save_name;
            $upload->file_extension = $save_extension;
            $upload->file_size = $fileSizeInByte;
            // $upload->file_path = $path;
            $upload->save();
        }
        return Response::json(['success' => __('message.image-success')], 200);
    }

    public function show()
    {
        $photos = Gallery::orderBy('original_filename', 'DESC')->paginate(6);
        return view('admin.gallery.show', compact('photos'));
    }

    public function destroy($id)
    {
        $data = Gallery::where('id', $id)->first();

        if (!$data) {
            return redirect()->route('images.index')->with('error', __('message.image-error'));
        } else {
            Gallery::where('id', $id)->delete();
            $image = "/public/gallery/" . $data->filename;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }
        }
        return redirect()->route('images.index')->with('error', __('message.image-delete'));
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
