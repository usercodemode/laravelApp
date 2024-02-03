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

        return redirect('posts');
    }

    public function show($id){
        $post = Post::findOrFail($id);

        return view('blog', compact('post'));
    }

    public function userPosts(){
        //$posts = User::find(1)->posts;
        // $posts = Post::all()->where("user_id", Auth::id())->sortDesc();

        //dd($posts);

        $posts = Auth::user()->posts->sortDesc();
        //dd(Auth::user()->posts);

        return view('post', compact('posts'));
    }

    public function edit($id){
        $posts = Post::findOrFail($id);

        return view('edit', compact('posts'));
    }

    public function update(Request $request, $id){

        //dd($request);

        $validatedData = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $post = Post::where("id", $id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);

        //dd($request->title);

        return redirect('posts');
    }

    public function destroy($id){
        Post::destroy($id);

        return redirect('/posts');


    }
}
