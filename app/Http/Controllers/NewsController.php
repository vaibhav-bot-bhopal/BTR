<?php

namespace App\Http\Controllers;

use App\Models\eventEnglish;
use App\Models\eventHindi;
use App\Models\newsEnglish;
use App\Models\newsHindi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

class NewsController extends Controller
{
    // Manage English & Hindi News by Admin Portal

    public function newsShow()
    {
        // Show News For English Language
        if (session('locale') == 'en') {
            $data = newsEnglish::all();
            return view('admin.news.index')->with('data', $data);
        }

        // Show News For Hindi Language
        if (session('locale') == 'hi') {
            $data = newsHindi::all();
            return view('admin.news.index')->with('data', $data);
        }
    }

    public function newsCreate(Request $req)
    {
        // Create News For English Language
        if (session('locale') == 'en') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
                'n_file' => 'required',
            ]);

            $mfiles = $req->file('n_file_m');
            $file = $req->file('n_file');

            if ($req->hasFile('n_file')) {
                $file = $req->file('n_file');
                $new_file = time() . $file->getClientOriginalName();
                $file->storeAs('public/eng_news', $new_file);
            }

            $newsEnglish = new newsEnglish;
            $newsEnglish->news_title = $req->n_title;
            $newsEnglish->news_slug = SlugService::createSlug(newsEnglish::class, 'news_slug', $req->n_title);
            $newsEnglish->news_date = $req->n_date;
            $newsEnglish->news_discription = $req->n_disc;
            $newsEnglish->news_image = $new_file;
            $multi_files = '';

            if ($req->hasFile('n_file_m')) {
                foreach ($mfiles as $mfile) {
                    $new_m_file = time() . $mfile->getClientOriginalName();
                    $mfile->storeAs('public/eng_multi_news/', $new_m_file);
                    $multi_files .= $new_m_file . ",";
                }
            }
            $newsEnglish->m_news_image = $multi_files;
            $newsEnglish->save();

            return redirect()->back()->with('success', 'Article has been saved successfully.');
        }

        // Create News For Hindi Language
        if (session('locale') == 'hi') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
                'n_file' => 'required',
            ]);

            $mfiles = $req->file('n_file_m');
            $file = $req->file('n_file');

            if ($req->hasFile('n_file')) {
                $file = $req->file('n_file');
                $new_file = time() . $file->getClientOriginalName();
                $file->storeAs('public/hin_news', $new_file);
            }

            $newsEnglish = new newsHindi();
            $newsEnglish->news_title = $req->n_title;
            $newsEnglish->news_slug = SlugService::createSlug(newsHindi::class, 'news_slug', $req->n_title);
            $newsEnglish->news_date = $req->n_date;
            $newsEnglish->news_discription = $req->n_disc;
            $newsEnglish->news_image = $new_file;
            $multi_files = '';

            if ($req->hasFile('n_file_m')) {
                foreach ($mfiles as $mfile) {
                    $new_m_file = time() . $mfile->getClientOriginalName();
                    $mfile->storeAs('public/hin_multi_news/', $new_m_file);
                    $multi_files .= $new_m_file . ",";
                }
            }
            $newsEnglish->m_news_image = $multi_files;
            $newsEnglish->save();

            return redirect()->back()->with('success', 'आर्टिकल सफलतापूर्वक स्टोर किया गया।');
        }
    }

    public function newsEdit($id)
    {
        // Edit News For English Language
        if (session('locale') == 'en') {
            $data = newsEnglish::find($id);

            if ($data) {
                return view('admin.news.edit')->with('data', $data);
            } else {
                return redirect()->route('news_show')->with('error', 'Article Not Found !!');
            }
        }

        // Edit News For Hindi Language
        if (session('locale') == 'hi') {
            $data = newsHindi::find($id);

            if ($data) {
                return view('admin.news.edit')->with('data', $data);
            } else {
                return redirect()->route('news_show')->with('error', 'आर्टिकल नहीं मिला !!');
            }
        }
    }

    public function newsUpdate(Request $req, $id)
    {
        // Update News For English Language
        if (session('locale') == 'en') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
            ]);


            $up_data = newsEnglish::find($id);
            $up_data->news_title = $req->n_title;
            $up_data->news_date = $req->n_date;
            $up_data->news_discription = $req->n_disc;
            $up_data->news_slug = SlugService::createSlug(newsEnglish::class, 'news_slug', $req->n_title);

            $old_file = $req->h_file;

            if ($req->file('n_file') == "") {
                $up_data->news_image = $req->h_file;
            } else {

                $name = $req->file('n_file')->getClientOriginalName();
                $myfile = $up_data->news_image =  time() . $name;
                $req->file('n_file')->storeAs('public/eng_news', $myfile);
                $path = public_path() . "/storage/eng_news/" . $old_file;
                unlink($path);
            }
            $up_data->update();
            return redirect()->route('news_show')->with('success', 'Article has been updated successfully.');
        }

        // Update News For Hindi Language
        if (session('locale') == 'hi') {
            $req->validate([
                'n_title' => 'required|max:255',
                'n_date' => 'required|date',
                'n_disc' => 'required',
            ]);


            $up_data = newsHindi::find($id);
            $up_data->news_title = $req->n_title;
            $up_data->news_date = $req->n_date;
            $up_data->news_discription = $req->n_disc;
            $up_data->news_slug = SlugService::createSlug(newsHindi::class, 'news_slug', $req->n_title);

            $old_file = $req->h_file;

            if ($req->file('n_file') == "") {
                $up_data->news_image = $req->h_file;
            } else {

                $name = $req->file('n_file')->getClientOriginalName();
                $myfile = $up_data->news_image =  time() . $name;
                $req->file('n_file')->storeAs('public/hin_news', $myfile);
                $path = public_path() . "/storage/hin_news/" . $old_file;
                unlink($path);
            }
            $up_data->update();
            return redirect()->route('news_show')->with('success', 'आर्टिकल को सफलतापूर्वक अपडेट कर दिया गया है।');
        }
    }

    public function newsDelete($id)
    {
        // Delete News For English Language
        if (session('locale') == 'en') {
            $data = newsEnglish::where('id', $id)->firstOrFail();

            if (!$data) {
                return redirect()->back()->with('error', 'Articles not found.');
            } else {
                newsEnglish::where('id', $id)->delete();
                $eng_image = "/public/eng_news/" . $data->news_image;
                if (Storage::exists($eng_image)) {
                    Storage::delete($eng_image);
                }

                $images = explode(",", $data->m_news_image);

                foreach ($images as $image) {
                    $eng_images = "/public/eng_multi_news/" . $image;
                    if (Storage::exists($eng_images)) {
                        Storage::delete($eng_images);
                    }
                }
                return redirect()->back()->with('error', 'Articles has been deleted successfully.');
            }
        }

        // Delete News For Hindi Language
        if (session('locale') == 'hi') {
            $data = newsHindi::where('id', $id)->first();

            if (!$data) {
                return redirect()->back()->with('error', 'लेख नहीं मिला !!');
            } else {
                newsHindi::where('id', $id)->delete();
                $hin_image = "/public/hin_news/" . $data->news_image;
                if (Storage::exists($hin_image)) {
                    Storage::delete($hin_image);
                }

                $images = explode(",", $data->m_news_image);

                foreach ($images as $image) {
                    $hin_images = "/public/hin_multi_news/" . $image;
                    if (Storage::exists($hin_images)) {
                        Storage::delete($hin_images);
                    }
                }
                return redirect()->back()->with('error', 'आर्टिकल को सफलतापूर्वक हटा दिया गया है।');
            }
        }
    }

    // Display Newses with pagination
    public function newses()
    {
        $dataen = newsEnglish::orderBy('id', 'desc')->paginate(3);
        $datahi = newsHindi::orderBy('id', 'desc')->paginate(3);

        return view('news.news', compact('dataen', 'datahi'));
    }

    // Display Single News in Detail
    public function news_details($slug)
    {
        $detailen = newsEnglish::where('news_slug', $slug)->first();
        $detailhi = newsHindi::where('news_slug', $slug)->first();

        if ($detailen) {
            return view('news.news-detail', ['detailen' => $detailen]);
        } else if ($detailhi) {
            return view('news.news-detail', ['detailhi' => $detailhi]);
        } else {
            return view('errors.404');
        }
    }

    // Display Events from DB
    public function eventShow()
    {
        // Event Show for English Language
        if (session('locale') == 'en') {
            $data = eventEnglish::all();
            return view('admin.event.index')->with('data', $data);
        }

        // Event Show for Hindi Language
        if (session('locale') == 'hi') {
            $data = eventHindi::all();
            return view('admin.event.index')->with('data', $data);
        }
    }

    // Store Event Data in DB
    public function eventCreate(Request $req)
    {
        // Event Create for English Language
        if (session('locale') == 'en') {
            $req->validate([
                'title' => 'required|max:255',
                'edate' => 'required|date_format:Y-m-d',
                'etime' => 'required|date_format:H:i',
                'place' => 'required|max:255',
                'e_disc' => 'required',
                'image' => 'required',
            ]);

            $mfiles = $req->file('m_image');
            $file = $req->file('image');

            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $new_file = time() . $file->getClientOriginalName();
                $file->storeAs('public/eng_event', $new_file);
            }

            $eventEnglish = new eventEnglish;
            $eventEnglish->title = $req->title;
            $eventEnglish->slug = SlugService::createSlug(eventEnglish::class, 'slug', $req->title);
            $eventEnglish->date = $req->edate;
            $eventEnglish->time = $req->etime;
            $eventEnglish->place = $req->place;
            $eventEnglish->discription = $req->e_disc;
            $eventEnglish->image = $new_file;
            $multi_files = '';

            if ($req->hasFile('m_image')) {
                foreach ($mfiles as $mfile) {
                    $new_m_file = time() . $mfile->getClientOriginalName();
                    $mfile->storeAs('public/eng_multi_event/', $new_m_file);
                    $multi_files .= $new_m_file . ",";
                }
            }
            $eventEnglish->m_image = $multi_files;
            $eventEnglish->save();

            return redirect()->back()->with('success', 'Event has been saved successfully.');
        }

        // Event Create for Hindi Language
        if (session('locale') == 'hi') {
            $req->validate([
                'title' => 'required|max:255',
                'edate' => 'required|date_format:Y-m-d',
                'etime' => 'required|date_format:H:i',
                'place' => 'required|max:255',
                'e_disc' => 'required',
                'image' => 'required',
            ]);

            $mfiles = $req->file('m_image');
            $file = $req->file('image');

            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $new_file = time() . $file->getClientOriginalName();
                $file->storeAs('public/hin_event', $new_file);
            }

            $eventEnglish = new eventHindi;
            $eventEnglish->title = $req->title;
            $eventEnglish->slug = SlugService::createSlug(eventHindi::class, 'slug', $req->title);
            $eventEnglish->date = $req->edate;
            $eventEnglish->time = $req->etime;
            $eventEnglish->place = $req->place;
            $eventEnglish->discription = $req->e_disc;
            $eventEnglish->image = $new_file;
            $multi_files = '';

            if ($req->hasFile('m_image')) {
                foreach ($mfiles as $mfile) {
                    $new_m_file = time() . $mfile->getClientOriginalName();
                    $mfile->storeAs('public/hin_multi_event/', $new_m_file);
                    $multi_files .= $new_m_file . ",";
                }
            }
            $eventEnglish->m_image = $multi_files;
            $eventEnglish->save();

            return redirect()->back()->with('success', 'ईवेंट सफलतापूर्वक स्टोर किया गया।');
        }
    }

    // Edit Event Data
    public function eventEdit($id)
    {
        // Event Edit for English Language
        if (session('locale') == 'en') {
            $data = eventEnglish::find($id);

            if ($data) {
                return view('admin.event.edit')->with('data', $data);
            } else {
                return redirect()->route('admin-en')->with('error', 'Event Not Found !!');
            }
        }

        // Event Edit for Hindi Language
        if (session('locale') == 'hi') {
            $data = eventHindi::find($id);

            if ($data) {
                return view('admin.event.edit')->with('data', $data);
            } else {
                return redirect()->route('admin-en')->with('error', 'इवेंट नहीं मिला !!');
            }
        }
    }

    // Update Event Data in DB
    public function eventUpdate(Request $req, $id)
    {

        // Event Update for English Language
        if (session('locale') == 'en') {
            $validator = Validator::make($req->all(), [
                'title' => 'required|max:255',
                'edate' => 'required|date_format:Y-m-d',
                'etime' => 'required|date_format:H:i',
                'place' => 'required|max:255',
                'e_disc' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('event_edit', $id)->withErrors($validator)->withInput();
            } else {
                $event = eventEnglish::find($id);

                $event->title = $req->title;
                $event->slug = SlugService::createSlug(eventEnglish::class, 'slug', $req->title);
                $event->date = $req->edate;
                $event->time = $req->etime;
                $event->place = $req->place;
                $event->discription = $req->e_disc;

                $old_file = $req->h_file;

                if ($req->file('image') == "") {
                    $event->image = $req->h_file;
                } else {
                    $name = $req->file('image')->getClientOriginalName();
                    $myfile = $event->image =  time() . $name;
                    $req->file('image')->storeAs('public/eng_event', $myfile);
                    $path = public_path() . "/storage/eng_event/" . $old_file;
                    unlink($path);
                }

                $event->update();

                return redirect()->route('event_show')->with('success', 'Event Successfully Updated.');
            }
        }

        // Event Update for Hindi Language
        if (session('locale') == 'hi') {
            $validator = Validator::make($req->all(), [
                'title' => 'required|max:255',
                'edate' => 'required|date_format:Y-m-d',
                'etime' => 'required|date_format:H:i',
                'place' => 'required|max:255',
                'e_disc' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('event_edit', $id)->withErrors($validator)->withInput();
            } else {
                $event = eventHindi::find($id);

                $event->title = $req->title;
                $event->slug = SlugService::createSlug(eventHindi::class, 'slug', $req->title);
                $event->date = $req->edate;
                $event->time = $req->etime;
                $event->place = $req->place;
                $event->discription = $req->e_disc;

                $old_file = $req->h_file;

                if ($req->file('image') == "") {
                    $event->image = $req->h_file;
                } else {
                    $name = $req->file('image')->getClientOriginalName();
                    $myfile = $event->image =  time() . $name;
                    $req->file('image')->storeAs('public/hin_event', $myfile);
                    $path = public_path() . "/storage/hin_event/" . $old_file;
                    unlink($path);
                }

                $event->update();

                return redirect()->route('event_show')->with('success', 'ईवेंट को सफलतापूर्वक अपडेट किया गया।');
            }
        }
    }

    // Delete Event from DB
    public function eventDelete($id)
    {
        // Event Delete for English Language
        if (session('locale') == 'en') {
            $data = eventEnglish::where('id', $id)->first();

            if (!$data) {
                return redirect()->back()->with('error', 'Event not found !!');
            } else {
                eventEnglish::where('id', $id)->delete();
                $image = "/public/eng_event/" . $data->image;
                if (Storage::exists($image)) {
                    Storage::delete($image);
                }

                $images = explode(",", $data->m_image);

                foreach ($images as $image) {
                    $images = "/public/eng_multi_event/" . $image;
                    if (Storage::exists($images)) {
                        Storage::delete($images);
                    }
                }
                return redirect()->back()->with('error', 'Event has been deleted successfully.');
            }
        }

        // Event Delete for Hindi Language
        if (session('locale') == 'hi') {
            $data = eventHindi::where('id', $id)->first();

            if (!$data) {
                return redirect()->back()->with('error', 'इवेंट नहीं मिला !!');
            } else {
                eventHindi::where('id', $id)->delete();
                $image = "/public/hin_event/" . $data->image;
                if (Storage::exists($image)) {
                    Storage::delete($image);
                }

                $images = explode(",", $data->m_image);

                foreach ($images as $image) {
                    $images = "/public/hin_multi_event/" . $image;
                    if (Storage::exists($images)) {
                        Storage::delete($images);
                    }
                }
                return redirect()->back()->with('error', 'ईवेंट सफलतापूर्वक हटा दिया गया है।');
            }
        }
    }

    // Display Events with pagination
    public function events()
    {
        $dataen = eventEnglish::orderBy('id', 'desc')->paginate(3);
        $datahi = eventHindi::orderBy('id', 'desc')->paginate(3);

        return view('news.events', compact('dataen', 'datahi'));
    }

    // Display Single Event in Detail
    public function event_details($slug)
    {
        $detailen = eventEnglish::where('slug', $slug)->first();
        $detailhi = eventHindi::where('slug', $slug)->first();

        if ($detailen) {
            return view('news.event-detail', ['detailen' => $detailen]);
        } else if ($detailhi) {
            return view('news.event-detail', ['detailhi' => $detailhi]);
        } else {
            return view('errors.404');
        }
    }
}
