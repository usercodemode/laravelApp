<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:1',
        ]);

        $post = Post::create([[
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'user_id' => Auth::id(),
        ]]);

        return redirect('dashboard');
    }

    public function show($id){
        $posts = Post::findOrFail($id);

        return view('dashboard', compact('posts'));
    }
}
