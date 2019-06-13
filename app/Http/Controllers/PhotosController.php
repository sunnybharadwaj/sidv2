<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Photo;

use Illuminate\Http\Request;

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
        $newTags = $data['newtags'];
        $tags = $data['tags'];
        array_pop($tags);


        //        Check if there are new tags
        if ($newTags[0] != null) {
            //        Add new tags
            foreach ($newTags as $tag) {
                $newTag = Tag::create([
                    'tag' => $tag
                ]);
                array_push($tags, (string)($newTag->id));
            }
        }

        //        Store Images in directory
        $hd_file = $request->file('photo_hd');
        $hd_url = $hd_file->store('photos_hd', ['disk' => 'images']);

        $sd_file = $request->file('photo_sd');
        $sd_url = $sd_file->store('photos_sd', ['disk' => 'images']);


//        Create a storage stack
        $photo = new Photo;
        $photo->title = $data['title'];
        $photo->thumbnail_hd = "media/images/" . $hd_url;
        $photo->thumbnail_sd = "media/images/" . $sd_url;
//        Save
        $photo->save();

        $photo->tags()->attach($tags);

//        Redirect with flash message
        return redirect('/admin');
    }

    public function edit($id) {
        $photo = \App\Photo::find($id);
        $tags = \App\Tag::all();
//        dd($photo->tags);
//        if it doesn't exist?
        return view('admin.photos.edit', compact('tags', 'photo'));
    }

    public function update($id)
    {
//       put/patch /photos/id
    }

    public function delete($id)
    {

        $photo = Photo::find($id);
        $photoTags = $photo->tags;
        $photo->delete();
        foreach ($photoTags as $photoTag) {
            $photoTagId = $photoTag->id;
//            if there are no photos for $photoTag, delete $photoTag
            $photos = Photo::whereHas('tags', function($query) use ($photoTagId) {
                $query->where('id', $photoTagId);
            })->get();
            if(count($photos) < 1) {
                Tag::find($photoTagId)->delete();
            }
        }
        return redirect('/admin');
//        return 204;
    }
}

