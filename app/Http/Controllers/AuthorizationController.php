<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function main()
    {
        $html = '<form action=' . route('auth.authorization') . '>
        <input type="text" name="login">Ваш логин<br><br>
        <input type="password" name="password">Пароль<br><br>
        <input type="checkbox" name="rememberMe">Запомнить меня<br><br>
        <button type="submit">Войти</button>
        </form>';
        return $html;
    }

    public function authorization()
    {
        return '<a href=' . route('news.addingNewsPage') . '>Создать новость</a>';
    }
}
