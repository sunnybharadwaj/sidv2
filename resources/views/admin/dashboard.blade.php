@extends('layouts.admin_layout')

@section('content')
    <div class="container mx-auto">

        <ul>
            <li></li>
        </ul>
    </div>



        <div class="container mx-auto">
            <h2 class="mb-4">Welcome Siddharth!</h2>

            Photos
            Add Browse

            Videos
            Add Browse



            <div class="masonry">
                @foreach($photos as $photo)
                    <div class="item flex-col">
                        <div class="image block">
                            <img class="w-full sd-img" src="{{url($photo->thumbnail_sd)}}" alt="">
                        </div>

                        <div class="info-block flex block">
                            {{--title--}}
                            {{--buttons--}}

                            {{--Edit --}}
                            <a href="/edit/photos/{{$photo->id}}" class="border-btn inline-block">Edit</a>

                            <form method="post" class="p-0 ml-2" action="/photos/{{$photo->id}}">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button class="border-btn" type="submit">Delete</button>
                            </form>

                            {{--Enable --}}
                            {{--Disable--}}
                        </div>
                    </div>



                @endforeach
            </div>
        </div>


@endsection