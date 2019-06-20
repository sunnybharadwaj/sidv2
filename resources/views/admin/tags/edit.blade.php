@extends('layouts.admin_layout')

@section('content')

    <div class="container mx-auto">

        <form class="ui form px-1 my-12" method="POST" action="/tags/{{$tag->id}}" enctype="multipart/form-data">
            <form class="ui form px-1 my-12" method="POST" action="/tags" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <h2>Update category:</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="field">
                    <label for="title">Category Name</label>
                    <input id="title" name="tag" value="{{$tag->tag}}" type="text" class="">
                </div>

                <label for="">Current Image:</label>


                <img src="{{$tag->cover_img}}" alt="">

                <div class="field">
                    <label>Update cover photo:
                        <span class="text-red-700">Maximum width of <span class="font-bold">700px</span></span>
                    </label>
                    <label id="cover_link_label" class="border-btn" for="cover-img">
                        Click here to upload
                    </label>
                    <input id="cover-img" type="file" class="hidden" name="coverImg">
                </div>


                <div class="mb-12"></div>

            <button class="page-fixed-btn" type="submit">Save Changes</button>
        </form>
    </div>
@endsection