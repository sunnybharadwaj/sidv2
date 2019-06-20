@extends('layouts.admin_layout')

@section('content')

    <div class="container mx-auto">
        <form class="ui form px-1 my-12" method="POST" action="/tags" enctype="multipart/form-data">
            <h2>Create a new category:</h2>
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
                <label for="title">Category Name</label>
                <input id="title" name="tag" type="text" class="">
            </div>

            <div class="field">
                <label>Upload a cover photo:
                    <span class="text-red-700">Maximum width of <span class="font-bold">700px</span></span>
                </label>
                <label id="cover_link_label" class="border-btn" for="cover-img">
                    Click here to upload
                </label>
                <input id="cover-img" type="file" class="hidden" name="cover_img">
            </div>


            <div class="mb-12"></div>
            <button class="page-fixed-btn" type="submit">Upload</button>
        </form>
    </div>
@endsection