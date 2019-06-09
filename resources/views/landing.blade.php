@extends('layouts.site_layout')

@section('content')
    @include('partials.header')

    <div class="container mx-auto">
        <div class="masonry">

            @foreach($photos as $photo)
                <div class="item">
                    <img class="w-full sd-img" src="{{url($photo->thumbnail_sd)}}" alt="">
                </div>
            @endforeach
        </div>
    </div>

    <div class="pb-12"></div>
    <div class="pb-12"></div>
    <div class="pb-12"></div>

    @include ('partials.cta')

    @include('partials.footer')
@endsection