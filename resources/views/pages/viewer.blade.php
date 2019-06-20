@extends('layouts.site_layout')

@section('content')
    <div id="viewer">
        <div id="viewer-wrapper" class="flex">
            <div id="side-bar" class="w-0 invisible md:visible md:w-2/12 xl:w-2/12">

                {{--Logo--}}
                <a href="/" class="page-logo">
                    <img class="w-full" src="{{url('/media/logo/logo_white.svg')}}" alt="">
                </a>

                {{--Bottom Nav--}}
                <div class="viewer-nav">
                    <a id="fullscreen-btn" href="javascript:void(0)">Full Screen</a>
                    <a href="">Open in new tab</a>
                    <a href="">Back to Photos</a>
                    <a href="">Show Thumbnails</a>
                    <a href="">Get in touch</a>
                </div>
            </div>
            <div id="photo-block" class="w-full md:w-10/12 xl:w-10/12">
                <div class="slideshow-wrapper">
                    <img class="photo" src="{{$photo->thumbnail_hd}}" alt="">
                    {{--<img class="photo" src="/media/temp_hd.jpg" alt="">--}}
                </div>
                <div class="slideshow-buttons">
                    <div class="back ss-btn"></div>
                    <div class="flex">
                        <div class="left ss-btn prev"></div>
                        <div class="right ss-btn next"></div>
                    </div>
                </div>

                <div class="hover-buttons">
                    <a href="{{'/prev/' . $categoryId . '/'. $photo->id}}" class="hover-btn prev">< prev</a> /
                    <a href="{{'/next/' . $categoryId . '/'. $photo->id}}" class="hover-btn next">next ></a>
                </div>


            </div>
        </div>
    </div>
    {{--<div id="viewer">--}}
        {{--<div id="top-bar">--}}

            {{--<div class="top-btns">--}}
                {{--<a href="{{url()->previous()}}">--}}
                    {{--<span class="reversed icon-next"><img src="{{url('/media/icons/icon_next.png')}}" class="w-full" alt=""></span>Back</span>--}}
                {{--</a>--}}
                {{--<a href="/browse">--}}
                    {{--Back to Categories--}}
                {{--</a>--}}

            {{--</div>--}}
            {{--<div class="logo inline-block max-w-xs p-1">--}}
                {{--<img class="w-full" src="{{url('/media/logo/logo_lg.svg')}}" alt="">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div id="img-container">--}}
            {{--<img src="/{{$photo->thumbnail_hd}}" alt="">--}}
            {{--<div class="img-btns">--}}
                {{--<a class="img-btn">--}}
                {{--Full screen--}}
                {{--</a>--}}

                {{--<a class="img-btn">--}}
                {{--Open in a new tab--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}


        {{--<div id="bottom-bar">--}}
            {{--<a class="next-btn prev {{$previous ? '' : 'disabled'}}" href="/photo/{{$previous}}">--}}
                {{--<span class="reversed icon-next">--}}
                    {{--<img src="{{url('/media/icons/icon_next.png')}}" class="w-full" alt="">--}}
                {{--</span>--}}
                {{--prev--}}
            {{--</a>--}}

            {{--<div class="tags">--}}
                {{--<ul>--}}
                        {{--<li class="tag font-black">Tags:</li>--}}
                    {{--@foreach ($tags as $tag)--}}
                        {{--<li class="tag border-btn"><a href="/category/{{$tag->id}}">{{$tag->tag}}</a></li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}

            {{--<a class="next-btn {{$next ? '' : 'disabled'}}" href="/photo/{{$next}}">--}}
                {{--next--}}
                {{--<span class="icon-next">--}}
                    {{--<img src="{{url('/media/icons/icon_next.png')}}" class="w-full" alt="">--}}
                {{--</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}


@endsection