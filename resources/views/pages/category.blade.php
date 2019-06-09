@extends('layouts.site_layout')

@section('content')
    @include('partials.header')

    <div class="container mx-auto">
        <div class="mb-12"></div>
        <h1 class="">Nature</h1>
        <div class="mb-6"></div>
        <div class="masonry">
            <div class="item">
                <img class="w-full sd-img" src="{{url('media/images/1sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/5sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/8sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/2sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/3sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/6sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/7sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/4sd.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{url('media/images/9sd.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="pb-12"></div>
    <div class="pb-12"></div>
    <div class="pb-12"></div>

    @include ('partials.cta')

    @include('partials.footer')

@endsection