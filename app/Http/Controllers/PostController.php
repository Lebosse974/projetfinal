<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {

        
        $rules = [
                'title' => ['required', 'string', 'max:255'],
                'content' => ['required', 'string', 'max:255'],
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];

        $validated = $request->validate($rules);
        $post = new Post();
        $post->title  = $validated['title'];
        $post->content = $validated['content'];
        $post->save();
        return redirect()->route('/homepage');
    }
   

    public function show (){
        $posts= Post::All();
        return view('homepage',[
            'posts' => $posts,
            ]);

    }
}
