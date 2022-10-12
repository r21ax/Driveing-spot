 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
   </head>
        @extends('layouts.app')
        
        @section('content')
        <h1>投稿画面</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="spot">
                <input type="text" name="title" placeholder="場所" value="{{ old('post.title') }}"/>
            </div>
            <div class="prefecture">
                <h2>都道府県</h2>
                <select name="prefecture_id">
                   @foreach($prefectures as $prefecture)
                    <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                   @endforeach    
                </select>
            </div>
            <div class="address">
                <input type="text" name="address" placeholder="住所"/>
            </div>
        
            <input type="file" name="image">
            
            <div class="body">
               <h2>コメント</h2>
                <textarea name="comment" placeholder="コメント">{{ old('comment') }}</textarea>
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        @endsection
    </body>
</html>