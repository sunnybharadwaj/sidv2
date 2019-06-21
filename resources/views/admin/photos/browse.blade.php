@extends('layouts.admin_layout')

@section('content')
    <div class="container mx-auto">
        <div class="text-right mb-8">
            <a href="/photos/create" class="text-btn md">Add a new photo</a>
        </div>
        <div id="filter-bar" class="mt-4 mb-6">
            <a href="/photos" class="filter-btn {{$tagId ? '': 'active'}}">All Images</a>
            @foreach($tags as $tag)
                <a href="/photos/tag/{{$tag->id}}" class="{{$tagId == $tag->id ? 'active' : ''}} block filter-btn">{{$tag->tag}}</a>
            @endforeach
        </div>

        <div class="masonry">
            @foreach($photos as $photo)
                <a href="/edit/photos/{{$photo->id}}">
                    <div class="item flex-col">
                        <div class="image block">
                            <img class="w-full sd-img" src="{{url($photo->thumbnail_sd)}}" alt="">
                        </div>

                        <div class="info-block flex block">

                            <form method="post" class="p-0 ml-2" action="/photos/{{$photo->id}}">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button class="border-btn" type="submit">Delete</button>
                            </form>

                            {{--Enable
                            {{--Disable--}}
                        </div>
                    </div>
                </a>

            @endforeach
        </div>
    </div>

@endsection

