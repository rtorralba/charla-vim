<?php

namespace App\Http\Controllers;

use App\Category;

class MainController extends Controller
{
    public function index()
    {
        $category = new Category();
        $categories = $category->getRows();
        return view('welcome', ['categories' => $categories]);
    }
}
