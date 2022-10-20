<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')　　　　　　　　　　　　　　　　　　
        
        @section('content')
        <div class="col-md-8 col-md-offset-2">
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <h5 class='prefecture_id'>
             <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->prefecture }}</a>
        </h5>
        <img src="{{ $post->image }}" width="35%">
        
        <div class="content">
            <div class="content__post">
                <p>{{ $post->comment }}</p>
            </div>
            <p class='updated_at'>{{ $post->updated_at }}</p>
            <!--GoogleMapsAPIを使って地図を表示-->
            <body>
    　        　 <div id="map"  style="height:700px"> 
                </div>
    　           <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
                <script src="{{ asset('/js/setLocation.js') }}"></script>
                <script src="{{ asset('/js/result.js') }}"></script>
                <script src="{{ asset('/js/getLatLng.js') }}"></script>
                <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{ config("services.google-map.apikey") }}&callback=initMap" async defer>
	            </script>
            </body>
        </div>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        <div class="footer">
            <a href="/">back</a>
        </div>
        </div>
        @endsection
    </body>
    
</html>