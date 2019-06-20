<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Photo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photos.browse', compact('photos'));
    }

    public function create()
    {
        $tags = \App\Tag::all();
        return view('admin.photos.create', compact('tags'));
    }

    public function show($id)
    {
//        return Article::find($id);
        return 'show specific photo';
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $tags = $data['tags'];


//       todo: Check removing a tag

        //        Store Images in directory
        $hd_file = $request->file('photo_hd');
        $hd_url = $hd_file->store('photos_hd', ['disk' => 'public']);

        $sd_file = $request->file('photo_sd');
        $sd_url = $sd_file->store('photos_sd', ['disk' => 'public']);


//        Create a storage stack
        $photo = new Photo;
        $photo->title = $data['title'];
        $photo->thumbnail_hd = "/storage/" . $hd_url;
        $photo->thumbnail_sd = "/storage/" . $sd_url;
//        Save
        $photo->save();
        $photo->tags()->attach($tags);

//        Redirect with flash message
        return redirect('/photos');
    }

    public function edit($id)
    {
        $photo = \App\Photo::find($id);
        $tags = \App\Tag::all();
//        dd($photo->tags);
//        if it doesn't exist?
        return view('admin.photos.edit', compact('tags', 'photo'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tags = $data['tags'];


        //       todo: Check removing a tag

        $hd_file = $request->file('photo_hd');


        $sd_file = $request->file('photo_sd');


        $photo = Photo::find($id);
        $photo->title = $data['title'];
        if ($hd_file) {
            $hd_url = $hd_file->store('photos_hd', ['disk' => 'public']);
            $photo->thumbnail_hd = "/storage/" . $hd_url;
        }

        if ($sd_file) {
                $sd_url = $sd_file->store('photos_sd', ['disk' => 'public']);
                $photo->thumbnail_sd = "/storage/" . $sd_url;
        }

        $photo->tags()->detach();
        $photo->tags()->attach($tags);
        $photo->save();

        return redirect('/photos');
    }

    public function delete($id)
    {

        $photo = Photo::find($id);
        $photoTags = $photo->tags;
        $photo->delete();
        foreach ($photoTags as $photoTag) {
            $photoTagId = $photoTag->id;
//            if there are no photos for $photoTag, delete $photoTag
            $photos = Photo::whereHas('tags', function ($query) use ($photoTagId) {
                $query->where('id', $photoTagId);
            })->get();
            if (count($photos) < 1) {
                Tag::find($photoTagId)->delete();
            }
        }
        return redirect('/photos');
//        return 204;
    }
}

