@extends('layouts.site_layout')

@section('content')
    @include('partials.header')
    <div id="videos" class="relative container mx-auto px-2">
        <div class=""></div>
        <h1 class="category-title">Videos</h1>
        <a href="https://www.youtube.com/channel/UC39tKHhUeAxv56jsHt1ktDg" target="_blank" class="yt-cta text-btn md">
            <span class="yt-icon">
                <img class="w-full" src="{{url('/media/icons/yt_icon.png')}}" alt="">
            </span>
            Subscribe to my Channel
        </a>
        <div class="mb-6"></div>

        <div class="flex flex-wrap">
            @foreach ($videos as $video)
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3">
                    <div class="video-item">
                        <div class="item">
                            <a href="{{$video->link}}" target="_blank" class="block overlay hidden">
                                <div class="button">
                                    Watch on youtube
                                </div>
                            </a>
                            <img class="w-full" src="{{$video->thumbnail_url}}" alt="">
                        </div>
                        <p class="vid-title">
                            {{$video->title}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pb-12"></div>
        <div class="pb-12"></div>
        <div class="pb-12"></div>

    @include ('partials.cta')

    @include('partials.footer')
@endsection