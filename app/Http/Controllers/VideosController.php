<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    public function index()
    {
//        $videos =
        return view('admin.videos.browse');
    }

    public function create()
    {
      return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        //        Store Images in directory
        $thumbnail = $request->file('thumbnail_url');
        $thumbnail_url = $thumbnail->store('videos', ['disk' => 'images']);

        //        Create a storage stack
        $video= new Video;
        $video->title = $data['title'];
        $video->link = $data['link'];
        $video->thumbnail_url = "media/images/" . $thumbnail_url;

        //        Save
        $video->save();

        //        Redirect with flash message
        return redirect('/admin');
    }
}
