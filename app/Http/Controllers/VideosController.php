<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.browse', compact('videos'));
    }

    public function create()
    {
      return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $thumbnail = $request->file('thumbnail_url');
        $thumbnail_url = $thumbnail->store('videos', ['disk' => 'public']);


        $video= new Video;
        $video->title = $data['title'];
        $video->link = $data['link'];
        $video->thumbnail_url = "/storage/" . $thumbnail_url;

        $video->save();

        //        Redirect with flash message
        return redirect('/admin/videos');
    }

    public function edit($id)
    {
        $video = Video::find($id);
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $video = Video::find($id);
        $thumbnail = $request->file('thumbnail_url');
        $video->title = $data['title'];
        $video->link = $data['link'];

        if($thumbnail) {
            $thumbnail_url = $thumbnail->store('videos', ['disk' => 'public']);
            $video->thumbnail_url = "/storage/" . $thumbnail_url;
        }
        $video->save();

        return redirect('/admin/videos');
    }

    public function delete($id)
    {
         Video::find($id)->delete();
         return redirect('/admin/videos');
    }

}
