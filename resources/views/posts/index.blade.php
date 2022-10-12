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
        {{Auth::user()->name}}
        <h1>新着順</h1>
        <button type="submit"><a href='/posts/create'>投稿</a></button>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h3 class='prefecture_id'>
                      <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->prefecture }}</a>
                    </h3>
                    
                    <img src="{{ $post->image }}" width="25%">
                    <p class='comment'>{{ $post->comment }}</p>
                    
                    <!--いいね機能-->
                     <div class="col-md-3">
                        <form action="{{ route('dislikes', $post) }}" method="POST">
                         @csrf
                         <input type="submit" value="&#xf164;取り消す" class="fas btn btn-danger">
                        </form>
                     </div>
                     <div class="col-md-3"> 
                        <form action="{{ route('likes', $post) }}" method="POST">
                    　    @csrf
                    　    <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
                    　  </form>
                     </div>
                    
                </div>
                        
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        @endsection
    </body>
   
</html>
