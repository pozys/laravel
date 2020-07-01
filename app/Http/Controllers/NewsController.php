<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNewsCategories()
    {
        $result = [];
        $categories = $this->NewsCategories();
        foreach ($categories as $category) {
            $result[] = '<h3><a href=' . route('categories.getNewsByCategoryId', $category['category_id']) . '>' . $category['category_name'] . '</a></h3>';
        }

        return implode('<br>', $result);
    }

    public function getNewsByCategoryId(int $id)
    {
        $news = $this->NewsByCategoryId($id);
        
        if (!$news) {
            return 'Указан некорректный id категории.';
        }
        $categories = $this->NewsCategories();
        return view('news.news_category', ['news'=>$news, 'categories'=>$categories]);
    }

    public function getNewsById(int $id)
    {
        $result = '';
        $news = $this->getAllNews();

        if (!array_key_exists($id, $news)) {
            return 'Указан некорректный id новости.';
        }
        $categories = $this->NewsCategories();
        $news = $news[$id];
        return view('news.news_item', ['news'=>$news, 'categories'=>$categories]);
        return $result;
    }

    public function openAddingNewsPage()
    {
        $html = '<input type="text" name="title" placeholder="Заголовок новости"><br><br>
        <textarea name="fullText" placeholder="Текст новости"></textarea><br><br>
        <input type="" rows="60" name="shortDescription" placeholder="Краткое описание новости">';

        return $html;
    }
}
