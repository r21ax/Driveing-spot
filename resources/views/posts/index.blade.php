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
        <div style="text-align:center;">
            <h1 >新着順</h1>
        </div>
        <div div style="width: 150px; margin-left: auto;"><button type="submit"><a href='/posts/create'>投稿</a></button></div>
        <div class='posts'>
        <div class="col-md-8 col-md-offset-2">
            @foreach ($posts as $post)
            <a>_______________________________________________________________________________________</a>
                <div class='post'>
                    <h2 class='title'>
                         <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>

                    </h2>
                    <!--都道府県表示-->
                    <h5 class='prefecture_id'>
                      <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->prefecture }}</a>
                    </h5>
                    <!--画像、コメント表示-->
                    <img src="{{ $post->image }}" width="25%">
                    <p class='comment'>{{ $post->comment }}</p>
                    
                    <!--いいね機能-->
                     <div class="col-md-3"> 
                      <form action="{{ route('favorites', $post) }}" method="POST">
                          @csrf
                          <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
                      </form>
                     </div>
                     <div class="col-md-3">
                      <form action="{{ route('unfavorites', $post) }}" method="POST">
                          @csrf
                          <input type="submit" value="&#xf164;取り消す" class="fas btn btn-danger">
                      </form>
                        
                </div>
                
            @endforeach
        </div>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        @endsection
    </body>
   
</html>
