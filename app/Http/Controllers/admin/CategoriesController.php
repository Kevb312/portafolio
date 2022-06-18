<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    //
   

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(){
        $categorias = Category::get();
        return view("admin/categorias", compact('categorias'));
    }

    public function post(Request $request){
        try{
            request()->validate(['InputName' => 'required']);
            
            $verficarNombre = 
            Category::where('name', 'Like', '%' . $request->InputName . '%')
            ->count();

            if($verficarNombre >= 1){
                return redirect()->route('getCategorias');
            }
            else{
                Category::create([
                    'name' => $request->InputName
                ]);
                return redirect()->route('getCategorias');
            }

        }
        catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function put(Request $request){
        try{
            request()->validate(['InputNameEdit' => 'required']);

            Category::where("id", $request->IDCategoriahidden)
            ->update(['name' => $request->InputNameEdit]);
            
            return redirect()->route('getCategorias');
        }
        catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}
