<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        dump($posts);
    }

    public function create(){
        $postsArr=[
            ['title'=>'Title 1','content'=>'Content 1', 'img'=>'img1', 'likes'=>1, 'active'=>1],
            ['title'=>'Title 2','content'=>'Content 2', 'img'=>'img2', 'likes'=>2, 'active'=>0],
            ['title'=>'Title 3','content'=>'Content 3', 'img'=>'img3', 'likes'=>3, 'active'=>1],
        ];
        foreach($postsArr as $post){
            Post::create($post);
        }
    }

    public function update(){
        $post=Post::find(1);
        $post->update([
            'title'=>'Title UPDATED',
        ]);
    }

    public function delete(){
        $post = Post::find(2);
        $post->delete();
    }

    public function restore()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
    }

    public function first_or_create(){}
    public function updateOrCreate(){
        $anotherPost = ['title'=>'Title UPDATED/CREATED', 'content'=>'Content UPDATED/CREATED'];
        $post = Post::updateOrCreate(['title'=>'Title UPDATED/CREATED'],$anotherPost);
    }
}
