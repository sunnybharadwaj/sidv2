<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Photo;
use App\Video;

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
        foreach($tags as $tag) {
            $tagId = $tag->id;
            $photos = Photo::whereHas('tags', function($query) use ($tagId) {
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
        $photos = Photo::whereHas('tags', function($query) use ($tagId) {
            $query->where('id', $tagId);
        })->get();
        $tag = Tag::find($id);
        $tagName = $tag->tag;

        return view('pages.category', compact('photos', 'tagName'));
    }

    public function photo($id)
    {
        $photo = Photo::find($id);
        $tags = $photo->tags;

        $previous = Photo::where('id', '<', $photo->id)->max('id');
        $next = Photo::where('id','>', $photo->id)->min('id');

        return view('pages.viewer', compact('photo','tags', 'previous','next'));
    }

    public function videos()
    {
        $videos = Video::all();
        return view('pages.videos', compact('videos'));
    }
}
