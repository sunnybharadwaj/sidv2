@extends('layouts.site_layout')

@section('content')
    @include('partials.header')

    <div id="browse" class="container mx-auto">
        <div class="masonry two">
            @foreach($tags as $key=>$tag)
                <a href="/category/{{$tag->id}}">
                    <div class="item">
                        <div class="overlay">
                            <h1 class="category-name">{{$tag->tag}}</h1>
                        </div>
                        @if (count($imgLocations) > 0)
                            <img class="w-full sd-img" src="{{$imgLocations[$key]}}" alt="">
                        @endif
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