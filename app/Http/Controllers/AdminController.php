<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Photo;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dash()
    {
        $photos = \App\Photo::all();
        return view('admin.dashboard', compact('photos'));
    }

    public function upload()
    {
        $tags = \App\Tag::all();
        return view('admin.photos.create', compact('tags'));
    }
}
