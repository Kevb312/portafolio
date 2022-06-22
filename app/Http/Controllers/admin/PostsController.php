<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(){
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
        $categorias = Category::get();
        return view("admin/posts", compact('posts', 'categorias'));
    }

    public function post(Request $request){
        request()->validate([
            'InputName' => 'required',
            'InputDes' => 'required',
            'InputImage' => 'required',
            'InputContent' => 'required',
            'InputEstado' => 'required',
            'InputCategoria' => 'required',
            'idUser' => 'required',
        ]);

        #Verificamos si hay una imagen cargada
        if($request->file('InputImage')){
            $file= $request->file('InputImage'); #obtenemos la imagen
            $filename= date('YmdHi').$file->getClientOriginalName(); #Renombramos la imagen con la fecha como nombre
            $file-> move(public_path('public/img'), $filename); #Movemos la imagen
        }else{
           
            return redirect()->route('getPosts'); #Caso contrario redirigimos
        }

        Post::create([
            'title' => $request->InputName,
            'brief' => $request->InputDes,
            'content' => $request->InputContent,
            'image' => $filename,
            'status' => $request->InputEstado,
            'category_id' =>  $request->InputCategoria,
            'user_id' => $request->idUser
        ]);
        return redirect()->route('getPosts');
    }

    public function put(Request $request){
        request()->validate([
            'IDPosthidden' => 'required',
            'InputNameEdit' => 'required',
            'InputDesEdit' => 'required',
            'InputContentEdit' => 'required',
            'InputEstado' => 'required',
            'InputCategoria' => 'required',
            'idUser' => 'required',
        ]);
        
        $oldNameImg = Post::select("image")->where("id", $request->IDPosthidden)->first();
        
        #Verificamos si hay una imagen cargada
        if($request->file('InputImage')){
            #definimos el path
            $image_path = public_path('public/img/').$oldNameImg->image;
            unlink($image_path); #borramos

            $file= $request->file('InputImage'); #obtenemos la nueva imagen
            $filename= date('YmdHi').$file->getClientOriginalName(); #Renombramos la imagen con la fecha como nombre
            $file-> move(public_path('public/img'), $filename); #Movemos la imagen

            Post::where("id", $request->IDPosthidden)
            ->update([
                'title' => $request->InputNameEdit,
                'brief' => $request->InputDesEdit,
                'content' => $request->InputContentEdit,
                'image' => $filename,
                'status' => $request->InputEstado,
                'category_id' => $request->InputCategoria,
            ]);
        }else{
            
            Post::where("id", $request->IDPosthidden)
            ->update([
                'title' => $request->InputNameEdit,
                'brief' => $request->InputDesEdit,
                'content' => $request->InputContentEdit,
                'status' => $request->InputEstado,
                'category_id' => $request->InputCategoria,
            ]);
        }



        return redirect()->route('getPosts'); 
        
    }
}
