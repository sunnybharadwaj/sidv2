@extends('layouts.site_layout')

@section('content')
    @include('partials.header')

    <div id="browse" class="container mx-auto">
        <div class="masonry two">

            @foreach($tags as $tag)
                <div class="item">
                    <div class="overlay">
                        <h1 class="category-name">{{$tag->tag}}</h1>
                    </div>
                    <img class="w-full sd-img" src="{{$imgLocations[1]}}" alt="">
                </div>
            @endforeach
            <div class="item">
                <div class="overlay">
                    <h1 class="category-name">Nature</h1>
                </div>
                <img class="w-full sd-img" src="{{url('media/images/1sd.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="pb-12"></div>
    <div class="pb-12"></div>
    <div class="pb-12"></div>

    @include ('partials.cta')

    @include('partials.footer')
@endsection