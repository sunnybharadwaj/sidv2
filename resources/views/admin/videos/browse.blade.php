@extends('layouts.admin_layout')

@section('content')
    <div class="relative container mx-auto px-2">
        <div class=""></div>
        <h1 class="category-title">Videos</h1>
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
                <form method="post" class="p-0 ml-2" action="/videos/{{$video->id}}">
                    {{ method_field('DELETE') }}
                    @csrf
                    <a href="/edit/videos/{{$video->id}}" class="border-btn inline-block">Edit</a>
                    <button class="border-btn" type="submit">Delete</button>
                </form>
            @endforeach
        </div>

        <div class="pb-12"></div>
        <div class="pb-12"></div>
        <div class="pb-12"></div>

    @include ('partials.cta')

    @include('partials.footer')
@endsection