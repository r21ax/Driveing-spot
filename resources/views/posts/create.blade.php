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
        <div class="col-md-8 col-md-offset-2">
        <h1>投稿画面</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="spot">
                <input type="text" name="title" placeholder="場所" value="{{ old('post.title') }}"/>
            </div>
            
            <div class="prefecture">
                <h2>都道府県</h2>
                <div class="col-md-6 col-md-offset-3">
                 <select  name="prefecture_id">
                   @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                   @endforeach    
                 </select>
                </div>
            </div>
            <div class="address">
                <input type="text"  id="addressInput" placeholder="住所"/>
            </div>

            <input type="file" name="image">
            
            <div class="body">
               <h2>コメント</h2>
                <textarea name="comment" placeholder="コメント">{{ old('comment') }}</textarea>
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        </div>
        <!--GoogleMapsAPIを使って地図を表示-->
            <body>
    　          
    　         　<button id="searchGeo">緯度経度変換</button>
    　         　<div>
    　         　      緯度：<input type="text" id="lat">
    　         　      経度：<input type="text" id="lng">
    　           </div>
    　        　 <div id="map" style="height:700px"> 
                </div>
    　           <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
                <script src="{{ asset('/js/setLocation.js') }}"></script>
                <script src="{{ asset('/js/result.js') }}"></script>
                <script src="{{ asset('/js/getLatLng.js') }}"></script>
                <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{ config("services.google-map.apikey") }}&callback=initMap" async defer>
	            </script>
            </body>
        @endsection
  </html>        