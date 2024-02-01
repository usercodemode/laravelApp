<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function store(Request $request){

        //dd($request);

        $validatedData = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);

        //dd($request->title);

        return redirect('blog');
    }

    public function show($id){
        $posts = Post::findOrFail($id);

        return view('blog', compact('posts'));
    }

    public function userPosts(){
        $posts = User::find(1)->posts;

        return view('post', compact('posts'));
    }
}
