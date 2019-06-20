<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Photo;
use App\Video;
use Exception;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
//        Get all photos
        $photos = Photo::all();
        return view('landing', compact('photos'));
    }

    public function browse()
    {
        $tags = Tag::all();
        $imgLocations = [];
        foreach ($tags as $tag) {
            $tagId = $tag->id;
            $photos = Photo::whereHas('tags', function ($query) use ($tagId) {
                $query->where('id', $tagId);
            })->get();
            if (count($photos) > 0) {
                array_push($imgLocations, $photos[0]->thumbnail_sd);
            }

        }

        return view('pages.browse', compact('tags', 'imgLocations'));
    }

    public function category($id)
    {
        $tagId = $id;
        $photos = Photo::whereHas('tags', function ($query) use ($tagId) {
            $query->where('id', $tagId);
        })->get();
        $tag = Tag::find($id);
        $tagName = $tag->tag;
        $categoryId = $tagId;
        return view('pages.category', compact('photos', 'tagName', 'categoryId'));
    }

    public function viewImage($categoryId, $photoId)
    {
        $photo = Photo::find($photoId);
        return view('pages.viewer', compact('photo', 'categoryId'));
    }

    public function nextImage($categoryId, $photoId) {
        $photo = Photo::find($photoId);

        if((string)$categoryId === "0") {
            $next = Photo::where('id', '>', $photo->id)->min('id');
            return redirect('/photo/' . $categoryId . '/' . $next);
        } else {
            $next = Photo::whereHas('tags', function ($query) use ($categoryId) {
                $query->where('id', $categoryId);
            })->where('id', '>', $photo->id)->min('id');
            return redirect('/photo/' . $categoryId . '/' . $next);
        }
    }

    public function prevImage($categoryId, $photoId) {
        $photo = Photo::find($photoId);

        if((string)$categoryId === "0") {
            $previous = Photo::where('id', '<', $photo->id)->max('id');
            return redirect('/photo/' . $categoryId . '/' . $previous);

        } else {
            $previous = Photo::whereHas('tags', function ($query) use ($categoryId) {
                $query->where('id', $categoryId);
            })->where('id', '<', $photo->id)->max('id');
            return redirect('/photo/' . $categoryId . '/' . $previous);
        }
    }


    public function videos()
    {
        $videos = Video::all();
        return view('pages.videos', compact('videos'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function returnHome() {
        return redirect('/browse');
    }
}
