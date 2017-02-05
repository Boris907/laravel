<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index')->with(compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store()
    {
        //dd(request()->all());
        $this->validate(request(),[
            'title' => 'required',
            'alias' => 'required',
            'body' => 'required|max:255'
        ]);
        Post::create([
           'title'=>request('title'),
           'alias'=>request('alias'),
           'body'=>request('body')
        ]);

        return redirect('/posts');
    }

    public function show(Post $post){

        return view('posts.show',compact('post'));
    }


    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts');
    }
    //GET posts
    //GET posts/create
    //POST posts
    //GET post/id
    //DELETE /post/id
    //PATCH /post/id

}
