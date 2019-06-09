<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Photo;

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
        array_push($imgLocations, 'placeholder');
        foreach($tags as $tag) {
            $tagId = $tag->id;
            $photo = Photo::whereHas('tags', function($query) use ($tagId) {
                $query->where('id', $tagId);
            })->get();
            array_push($imgLocations, $photo[0]->thumbnail_sd);
        }
        return view('pages.browse', compact('tags', 'imgLocations'));
    }

    public function category()
    {
        return view('pages.category');
    }

    public function photo()
    {
        return view('pages.viewer');
    }
}
