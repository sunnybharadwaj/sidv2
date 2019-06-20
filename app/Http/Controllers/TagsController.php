<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tag;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.browse', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $cover_file = $request->file('cover_img');
        $cover_url = $cover_file->store('category_covers', ['disk' => 'public']);

        $tag = new Tag;
        $tag->tag = $data['tag'];
        $tag->cover_img = "/storage/" . $cover_url;
        $tag->save();

        return redirect('/tags');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();
        $cover_file = $request->file('coverImg');

        $tag = Tag::find($id);
        $tag->tag = $data['tag'];
        if($cover_file) {
            //        todo: delete old image

            $cover_url = $cover_file->store('category_covers', ['disk' => 'public']);
            $tag->cover_img = "/storage/" . $cover_url;
        }

        $tag->save();

        return redirect('/tags');
    }

    public function delete($id)
    {
        Tag::find($id)->delete();
        return redirect('/tags');
    }
}
