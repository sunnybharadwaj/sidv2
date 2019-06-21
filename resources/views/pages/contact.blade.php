@extends('layouts.site_layout')

@section('content')
    @include('partials.header')
    <div class="container mx-auto">
        <div class="mb-10"></div>
        <h1>Contact Me</h1>


        <form class="ui form px-1 my-12" method="POST" action="/contact" enctype="multipart/form-data">
            <p class="form-intro">I'd love to hear about potential collaborations, work opportunities or feedback if you have any.
                If you have a more pressing matter, you could contact me at +91- <span class="font-bold">8143000184</span>.</p>
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger py-8">
                    <p class="font-bold text-2xl text-red-500 mb-2">Please check your entry and try again.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="mb-1">- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="field-wrapper">
                <div class="field">
                    <label  for="name">Name</label>
                    <input class="{{$errors->has('name')? 'border-red-500' : '' }}" id="name" name="name" value="{{old('name')}}" type="text">
                </div>
                <div class="field">
                    <label for="email">E-mail</label>
                    <input class="{{$errors->has('email')? 'border-red-500' : '' }}" id="email" name="email" value="{{old('email')}}" type="text">
                </div>
                <div class="field">
                    <label for="subject">Subject</label>
                    <input id="subject" class="{{$errors->has('subject')? 'border-red-500' : '' }}" name="subject" value="{{old('subject')}}" type="text">
                </div>

                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" class="{{$errors->has('message')? 'border-red-500' : '' }}" id="message" cols="30" rows="6">{{old('message')}}</textarea>
                </div>
            </div>


            <button class="border-btn">Submit</button>
        </form>
    </div>
    @include('partials.footer')
@endsection