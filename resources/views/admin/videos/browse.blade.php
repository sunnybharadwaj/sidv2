@extends('layouts.admin_layout')

@section('content')
    <div id="video-browse" class="relative container mx-auto px-2">
        <div id="upload-btn" class="text-right mb-8">
            <a href="/videos/create" class="text-btn md">Upload a video</a>
        </div>
        <h1 class="category-title">Videos</h1>
        <div class="mb-6"></div>

        <div class="flex flex-wrap">
            @foreach ($videos as $video)
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 relative">
                    <div class="video-item">
                        <div class="item">
                            <a href="/edit/videos/{{$video->id}}" class="block overlay hidden">
                                <div class="button">
                                    Edit
                                </div>
                            </a>
                            <img class="w-full" src="{{$video->thumbnail_url}}" alt="">
                            <form method="post" class="p-0 ml-2" action="/videos/{{$video->id}}">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button class="border-btn absolute bottom-0 right-0 mb-2 mr-2" type="submit">Delete</button>
                            </form>
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