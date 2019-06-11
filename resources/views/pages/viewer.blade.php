@extends('layouts.site_layout')

@section('content')
    <div id="viewer">
        <div id="top-bar">

            <div class="top-btns">
                <a href="{{url()->previous()}}">
                    <span class="reversed icon-next"><img src="{{url('/media/icons/icon_next.png')}}" class="w-full" alt=""></span>Back</span>
                </a>
                <a href="/browse">
                    Back to Categories
                </a>

            </div>
            <div class="logo inline-block max-w-xs p-1">
                <img class="w-full" src="{{url('/media/logo/logo_lg.svg')}}" alt="">
            </div>
        </div>
        <div id="img-container">
            <img src="/{{$photo->thumbnail_hd}}" alt="">
            {{--<div class="img-btns">--}}
                {{--<a class="img-btn">--}}
                {{--Full screen--}}
                {{--</a>--}}

                {{--<a class="img-btn">--}}
                {{--Open in a new tab--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>


        <div id="bottom-bar">
            {{--<a class="next-btn prev {{$previous ? '' : 'disabled'}}" href="/photo/{{$previous}}">--}}
                {{--<span class="reversed icon-next">--}}
                    {{--<img src="{{url('/media/icons/icon_next.png')}}" class="w-full" alt="">--}}
                {{--</span>--}}
                {{--prev--}}
            {{--</a>--}}

            <div class="tags">
                <ul>
                        <li class="tag font-black">Tags:</li>
                    @foreach ($tags as $tag)
                        <li class="tag border-btn"><a href="/category/{{$tag->id}}">{{$tag->tag}}</a></li>
                    @endforeach
                </ul>
            </div>

            {{--<a class="next-btn {{$next ? '' : 'disabled'}}" href="/photo/{{$next}}">--}}
                {{--next--}}
                {{--<span class="icon-next">--}}
                    {{--<img src="{{url('/media/icons/icon_next.png')}}" class="w-full" alt="">--}}
                {{--</span>--}}
            {{--</a>--}}
        </div>
    </div>


@endsection