<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showOne($id = null){
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
    if ($id == null)
        return "Вы не передали никакого значения";
    if (array_key_exists($id, $pages))
        return "Переданное значение $id: $pages[$id]";
    else
        return "Нет такой страницы!";
    }

    function showAll(){
        return "Вы выбрали вывести All";
    }
}
