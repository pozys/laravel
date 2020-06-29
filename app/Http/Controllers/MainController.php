<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function WelcomePage()
    {
        return 'Самые важные новости обо всем на свете!
        <br>
        <a href=' . route('categories.getNewsCategories') . '>Открыть ленту новостей</a><br>
        <a href=' . route('auth.auth_main') . '>Войти</a>';
    }
}
