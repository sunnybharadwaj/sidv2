@extends('layouts.site_layout')

@section('content')
    <div id="viewer">
        <div id="viewer-wrapper" class="flex">
            {{--<div id="side-bar" class="w-0 invisible md:visible md:w-2/12 xl:w-2/12">--}}

            {{--Logo--}}
            {{--<a href="/" class="page-logo">--}}
            {{--<img class="w-full" src="{{url('/media/logo/logo_white.svg')}}" alt="">--}}
            {{--</a>--}}

            {{--Bottom Nav--}}
            {{--<div class="viewer-nav">--}}

            {{--</div>--}}
            {{--</div>--}}
            <div id="photo-block" class="w-full">
                <img id="viewer-menu-btn" src="{{url('/media/icons/hb_menu.svg')}}" alt="">
                <div id="viewer-menu-wrapper" class="">
                    <div id="viewer-menu">
                        <img src="{{url('/media/logo/logo_line.svg')}}" alt="" class="w-full max-w-xs mb-8 mx-auto">
                        <a href="/">Home</a>
                        @include('partials.links')
                        <a href="javascript:void(0)" class=" font-bold" id="close-viewer-menu">Close Menu</a>

                    </div>
                    <div id="change-bg">
                        <p class="mb-2">Background</p>
                        <div id="white-box" class="box"></div>
                        <div id="black-box" class="box active"></div>
                    </div>
                </div>

                <div class="slideshow-wrapper">
                    <img class="photo" src="{{$photo->thumbnail_hd}}" alt="">
                    {{--<img class="photo" src="/media/temp_hd.jpg" alt="">--}}
                </div>
                <div class="slideshow-buttons">
                    <div class="flex">
                        <a href="{{'/prev/' . $categoryId . '/'. $photo->id}}" class="left ss-btn prev"></a>
                        <a href="{{'/next/' . $categoryId . '/'. $photo->id}}" class="right ss-btn next"></a>
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