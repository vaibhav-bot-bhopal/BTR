<?php

namespace App\Repository\News;

use App\Models\News;
use App\Models\NewsImage;
use App\Repository\News\NewsInterface;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\fileExists;

class NewsRepository implements NewsInterface
{
    public function getAllNewses()
    {
        // Show All Newses
        return News::all();
    }

    public function storeNews($data)
    {
        $image = Request::file('image');
        $images = Request::file('images');

        // Create News
        if (fileExists($image)) {
            $newFile = time() . $image->getClientOriginalName();
            $image->storeAs('public/news_image', $newFile);
        }

        $newses = News::create([
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(News::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'description' => Request::input('description'),
            'image' => $newFile,
        ]);

        $newses->save();

        if (is_array($images)) {
            foreach ($images as $image) {
                $newImages = time() . $image->getClientOriginalName();
                $image->storeAs('public/news_images/', $newImages);
                NewsImage::create([
                    'news_id' => $newses->id,
                    'image' => $newImages
                ]);
            }
        }

        return $newses;
    }

    public function getNews($id)
    {
        // Edit News
        return News::find($id);
    }

    public function updateNews($data, $id = null)
    {
        // Update News
        $newses = News::find($id);
        $image = Request::file('image');
        $old_image = Request::input('h_image');

        // Update Single Image
        if (is_null($image)) {
            $newses->image = $old_image;
        } else {
            $name = $image->getClientOriginalName();
            $newImage = $newses->image =  time() . $name;
            $image->storeAs('public/news_image', $newImage);
            $path = public_path() . "/storage/news_image/";
            if (file_exists($path . $old_image)) {
                unlink($path . $old_image);
            }
        }

        $newses->update([
            'title' => Request::input('title'),
            // 'slug' => SlugService::createSlug(News::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'description' => Request::input('description')
        ]);

        $newses->update();

        // Update Multiple Images
        $images = Request::file('images');
        $old_images = Request::input('h_images');

        if (is_null($images)) {
            $newses->image = $old_images;
        } else {
            foreach ($images as $image) {
                $name = time() . $image->getClientOriginalName();
                NewsImage::updateOrCreate([
                    'news_id' => $newses->id,
                    'image' => $name
                ]);

                $image->storeAs('public/news_images/', $name);
            }
        }

        return $newses;
    }

    public function deleteNews($id)
    {
        // Delete News
        $newses = News::where('id', $id)->firstOrFail();

        if (!$newses) {
            return redirect()->route('newses.index')->with('error', 'News not found !!');
        } else {
            $image = "/public/news_image/" . $newses->image;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            foreach ($newses->images as $image) {
                $images = "/public/news_images/" . $image->image;
                if (Storage::exists($images)) {
                    Storage::delete($images);
                }
            }

            News::where('id', $id)->delete();

            return $newses;
        }
    }

    // Delete News Feature Image
    public function deleteNewsImage($id)
    {
        // Get News Image
        $newsImage = News::select('image')->where('id', $id)->first();

        // Get News Image Path
        $news_image_path = public_path() . "/storage/news_image/";

        // Delete News Imgae from folder if exists
        if (file_exists($news_image_path . $newsImage->image)) {
            unlink($news_image_path . $newsImage->image);
        }

        // Delete News Imgae from news table
        $newses = News::where('id', $id)->update(['image' => 'image-gallery.jpg']);

        return $newses;
    }

    // Delete News Multiple Images
    public function deleteNewsImages($id)
    {
        // Get News Image
        $newsImages = NewsImage::select('image')->where('id', $id)->first();

        // Get News Image Path
        $news_image_path = public_path() . "/storage/news_images/";

        // Delete News Imgae from folder if exists
        if (file_exists($news_image_path . $newsImages->image)) {
            unlink($news_image_path . $newsImages->image);
        }

        $newses = NewsImage::where('id', $id)->delete();

        return $newses;
    }
}
