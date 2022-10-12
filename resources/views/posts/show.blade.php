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
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <h3 class='prefecture_id'>
             <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->prefecture }}</a>
        </h3>
        <img src="{{ $post->image }}" width="35%">
        
        <div class="content">
            <div class="content__post">
                <h3>コメント</h3>
                <p>{{ $post->comment }}</p>
            </div>
        </div>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        <div class="footer">
            <a href="/">back</a>
        </div>
        @endsection
    </body>
</html>