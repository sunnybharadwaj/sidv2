@extends('layouts.site_layout')

@section('content')
    @include ('partials.loadscreen')
    @include('partials.header')

    <div class="container mx-auto">
        <div class="masonry">

            @foreach($photos as $photo)
                <a href="/photo/0/{{$photo->id}}">
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