@extends('layouts.site_layout')

@section('content')
    @include('partials.header')
    <div class="container mx-auto">
        <div class=""></div>
        <h1 class="category-title">{{$tagName}}</h1>
        <div class="mb-6"></div>
        <div class="masonry">
            @foreach($photos as $photo)
                <a href="/photo/{{$categoryId}}/{{$photo->id}}">
                    <div class="item">
                        <img class="w-full sd-img" src="{{url($photo->thumbnail_sd)}}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="pb-12"></div>
    <div class="pb-12"></div>
    <div class="pb-12"></div>

    @include ('partials.cta')

    @include('partials.footer')
@endsection