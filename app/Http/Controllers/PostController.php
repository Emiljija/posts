<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
            Post::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'text' => $request->input('text')
                ]);
            return "Successful";
    }

    public function index(){
        $posts = Post::all();

        return view('posts.index', [ 'posts' => $posts ]);
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);

        $post->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'text' => $request->input('text')
                ]);

        return "Update successful";
    }

    public function destroy($id){
        $post = Post::find($id);

        $post->delete();

        return "Post with id: $post->id has been deleted.";
    }
}
