<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(Post $request){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'img' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post){
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }

//    public function update(){
//        $post=Post::find(1);
//        $post->update([
//            'title'=>'Title UPDATED',
//        ]);
//    }
//
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }

//
//    public function restore()
//    {
//        $post = Post::withTrashed()->find(2);
//        $post->restore();
//    }
//
//    public function first_or_create(){}
//    public function updateOrCreate(){
//        $anotherPost = ['title'=>'Title UPDATED/CREATED', 'content'=>'Content UPDATED/CREATED'];
//        $post = Post::updateOrCreate(['title'=>'Title UPDATED/CREATED'],$anotherPost);
//    }
}
