@extends('layouts.admin_layout')

@section('content')
    <div class="container mx-auto">

        <div class="container mx-auto">
            <div class="masonry">

                @foreach($tags as $tag)
                    <a href="edit/tags/{{$tag->id}}">
                        <div class="item">
                            <div class="overlay">
                                <h2 class="category-name">{{$tag->tag}}</h2>
                            </div>
                            <img class="w-full sd-img" src="{{url($tag->cover_img)}}" alt="">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <ul>
            @foreach($tags as $tag)
                <li>{{$tag->tag}}
                    <img src="{{$tag->cover_img}}" alt="">
                </li>

                <form method="post" class="p-0 ml-2" action="/tags/{{$tag->id}}">
                    {{ method_field('DELETE') }}
                    @csrf
                    <a href="/edit/tags/{{$tag->id}}" class="border-btn inline-block">Edit</a>
                    <button class="border-btn" type="submit">Delete</button>
                </form>
            @endforeach
        </ul>



    </div>

@endsection

