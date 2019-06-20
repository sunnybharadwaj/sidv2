@extends('layouts.admin_layout')

@section('content')

    <div class="container mx-auto">

        <form class="ui form px-1 my-12" method="POST" action="/videos/{{$video->id}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <h2>Update video details:</h2>

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
                <label for="title">Title</label>
                <input id="title" name="title" type="text" value="{{$video->title}}">
            </div>

            <div class="field">
                <label for="title">Link</label>
                <input id="title" name="link" type="text" class="" value="{{$video->link}}">
            </div>
            
            <div class="field">
                <label for="">Current Cover Image:</label>
                <img src="{{$video->thumbnail_url}}" alt="">
            </div>

            <div class="field">
                <label>Video Thumbnail - Exact dimensions:
                    <span class="text-red-700"> <span class="font-bold">600 x 335</span></span>
                </label>
                <label id="thumbnail_label" class="border-btn" for="thumbnail_url">
                    Click here to upload
                </label>
                <input id="thumbnail_url" type="file" class="hidden" name="thumbnail_url">
            </div>


            <div class="mb-12"></div>
            <button class="page-fixed-btn" type="submit">Upload</button>
        </form>
    </div>
@endsection