<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicoController extends Controller
{
    //

    public function index(){
        return view('main');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function blog(){

        $posts = Post::select(
            "posts.id",
            "posts.title",
            "posts.brief",
            "posts.content",
            "posts.image",
            "posts.status",
            "posts.category_id",
            "posts.user_id",
            "Posts.created_at",
            "categories.name as nombreCategoria",
            "users.name"
            )->leftjoin("categories", "posts.category_id", "=", "categories.id")
            ->leftjoin("users", "posts.user_id", "=", "users.id")
            ->get();

        return view('blog', compact('posts'));
    }

    public function viewBlog($id){
        

        $post = Post::select(
            "posts.id",
            "posts.title",
            "posts.brief",
            "posts.content",
            "posts.image",
            "posts.status",
            "posts.category_id",
            "posts.user_id",
            "Posts.created_at",
            "categories.name as nombreCategoria",
            "users.name"
            )
            ->where('posts.id', $id)
            ->leftjoin("categories", "posts.category_id", "=", "categories.id")
            ->leftjoin("users", "posts.user_id", "=", "users.id")
            ->get();

        return view('blogView', compact('post'));
    }
}
