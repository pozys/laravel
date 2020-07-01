<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function WelcomePage()
    {
        $categories = $this->NewsCategories();
        $news = $this->getAllNews();
        return view('news.index', ['categories' => $categories, 'news' => $news]);
    }
}
