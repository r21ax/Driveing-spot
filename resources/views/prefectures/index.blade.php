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
        <h1>新着順</h1>
        
        <div div style="width: 150px; margin-left: auto;"><button type="submit"><a href='/posts/create'>投稿</a></button></div>
        <div class='posts'>
        <div class="col-md-8 col-md-offset-2">
            @foreach ($posts as $post)
            <a>_______________________________________________________________________________________</a>
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h5 class='prefecture_id'>
                     <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->prefecture }}</a>
                    </h5>
                    <!-- 画像を表示 -->
                    <img src="{{ $post->image }}" width="25%">
                    <p class='comment'>{{ $post->comment }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <div class="footer">
            <a href="/">back</a>
        </div>
        </div>
        @endsection
    </body>
   
</html>
