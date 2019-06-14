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
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>c
            @endif
            <div class="field">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" class="">
            </div>
            <div class="field">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="text" class="">
            </div>
            <div class="field">
                <label for="subject">Subject</label>
                <input id="subject" name="subject" type="text" class="">
            </div>

            <div class="field">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="6"></textarea>
            </div>

            <button class="border-btn">Submit</button>
        </form>
    </div>
    @include('partials.footer')
@endsection