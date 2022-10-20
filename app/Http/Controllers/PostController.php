<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
        
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(Prefecture $prefecture)
    {
        // dd($prefecture->get()); エラーの時使える
        return view('posts/create')->with(['prefectures' => $prefecture->get()]);
        
    }
    
    public function store(Post $post, Request $request)
    {
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        $post->title = $request->title;
        $post->prefecture_id = $request->prefecture_id;
        $post->address = $request->address;
        $post->image = Storage::disk('s3')->url($path);
        $post->comment = $request->comment;
        $post->user_id = Auth::id();
        $post->save();
        
       
        return redirect('/posts/' . $post->id);

    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
     public function __construct()
     {
         $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
     }
     public function like($id)
     {
         Like::create([
         'post_id' => $id,
         'user_id' => Auth::id(),
         ]);
         
         session()->flash('success', 'You Liked the Post.');

         return redirect()->back();
     }

  /**
   * 引数のIDに紐づくリプライにUNLIKEする
   *
   * @param $id リプライID
   * @return \Illuminate\Http\RedirectResponse
   */
    public function unlike($id)
    {
       $like = Like::where('post_id', $id)->where('user_id', Auth::id())->first();
       $like->delete();
       session()->flash('success', 'You Unliked the Post.');
       return redirect()->back();
  }
   
}    
