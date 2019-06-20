@extends('layouts.admin_layout')

@section('content')

    <div class="container mx-auto">

        <form class="ui form px-1 my-12" method="POST" action="/photos" enctype="multipart/form-data">
            <h2>Upload a new photograph to your catalog.</h2>
            @csrf
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
                <input id="title" name="title" type="text" class="">
            </div>

            <div class="checkbox field">
                <label for="tags">Choose one or more categories:</label>
                <div class="flex flex-wrap">
                    @foreach($tags as $tag)
                        <div class="w-1/4">
                            <div class="ui checkbox flex">
                                <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                                <label>{{$tag->tag}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="/tags/create" target="_blank">Create a new tag</a>

            </div>

            <div class="field">
                <label>HD Photo -
                    <span class="text-red-700">Minimum width of <span class="font-bold">1500px</span></span>
                </label>
                <label id="hd_label" class="border-btn" for="photo_hd">
                    Click here to upload
                </label>
                <input required id="photo_hd" type="file" class="hidden" name="photo_hd">
            </div>

            <div class="field">
                <label>SD Photo -
                    <span class="text-red-700">Minimum width of <span class="font-bold">700px</span></span>
                </label>

                <label id="sd_label" class="border-btn" for="photo_sd">
                    Click here to upload
                </label>
                <input required id="photo_sd" type="file" class="hidden" name="photo_sd">
            </div>

            <div class="mb-12"></div>
            <button class="page-fixed-btn" type="submit">Upload</button>
        </form>
    </div>
@endsection