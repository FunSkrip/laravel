<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Все посты";
    }

    public function show($id){
        $post = [
            1 => 'Пост 1',
            2 => 'Пост 2',
            3 => 'Пост 3',
            4 => 'Пост 4',
            5 => 'Пост 5',
        ];
        return $post[$id];
    }

    public function store(Request $request){
        // if (isset($request)){
        //     return "store";
        // }
        // else 
            return $request->name;
    }

    public function update(Request $request, $Id){
        return "update";
    }

    public function destroy($id){
        return "destroy";
    }
}
