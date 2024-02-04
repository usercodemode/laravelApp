<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;


class PostController extends Controller
{
    public function store(Request $request){

        //dd($request);
        //dd((int)$request->is_published);
        //if($request->is_published == null) ? 1 : (int)$request->is_published;

        $validatedData = $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image_path' => $this->storeImage($request),
            'is_published' => (!isset($request->is_published)) ? 1 : (int)$request->is_published,
            'key' => Crypt::encrypt($request->key),
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

        $posts = Auth::user()->posts->sortByDesc('updated_at');
        //dd(Auth::user()->posts);

        return view('post', compact('posts'));
    }

    public function edit($id){
        $post = Post::findOrFail($id);

        return view('edit', compact('post'));
    }

    public function update(Request $request, $id){

        //dd(Post::find($id)->image_path);
        //dd($request->is_published);
        //'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        $validatedData = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $post = Post::where("id", $id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'image_path' => Post::find($id)->image_path,
            'is_published' => (!isset($request->is_published)) ? 1 : (int)$request->is_published,
            'key' => Crypt::encrypt($request->key),
            'user_id' => Auth::id(),
        ]);

        //dd($request->title);

        return redirect('posts');
    }

    public function destroy($id){
        Post::destroy($id);

        return redirect('/posts');


    }
    
    public function storeImage($request){
      //dd($request->file('image')->extension());
      $newImageName = uniqid().'-'.$request->title.'.'.$request->file('image')->extension();
      $request->image->move(public_path('images'), $newImageName);
      //dd($newImageName);
      return $newImageName;
    }
}
