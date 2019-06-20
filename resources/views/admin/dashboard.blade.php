@extends('layouts.admin_layout')

@section('content')
    <div class="container mx-auto">

        <ul>
            <li></li>
        </ul>
    </div>



    <div class="container mx-auto">
        <h2 class="greeting">Welcome Siddharth,</h2>
        <div class="mb-6"></div>

        <div id="components">
            <h2 class="section-title">Components</h2>
            <div class="flex flex-wrap">
                <div class="component-wrapper w-1/3 flex">
                    <div class="component ">

                        <div class="text-content">
                            <h2>Photos</h2>
                            <a href="/photos">Browse</a>
                            <a href="/photos/create">Create</a>
                        </div>
                        <span class="component-icon">
                        <img src="/media/icons/photos.svg" alt="" class="w-full">
                    </span>

                    </div>
                </div>

                <div class="component-wrapper w-1/3 flex">
                    <div class="component ">

                        <div class="text-content">
                            <h2>Videos</h2>
                            <a href="/admin/videos">Browse</a>
                            <a href="/videos/create">Create</a>
                        </div>
                        <span class="component-icon">
                        <img src="/media/icons/videos.svg" alt="" class="w-full">
                    </span>
                    </div>
                </div>

                <div class="component-wrapper w-1/3 flex">
                    <div class="component ">

                        <div class="text-content">
                            <h2>Categories</h2>
                            <a href="/tags">Browse</a>
                            <a href="/tags/create">Create</a>
                        </div>
                        <span class="component-icon">
                        {{--<img src="/media/icons/videos.svg" alt="" class="w-full">--}}
                    </span>
                    </div>
                </div>
                {{--<div class="component-wrapper w-1/3 flex">--}}
                    {{--<div class="component ">--}}

                        {{--<div class="text-content">--}}
                            {{--<h2>Links</h2>--}}
                            {{--<a href="/tags">Update</a>--}}
                        {{--</div>--}}
                        {{--<span class="component-icon">--}}
                        {{--<img src="/media/icons/videos.svg" alt="" class="w-full">--}}
                    {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>


    </div>


@endsection