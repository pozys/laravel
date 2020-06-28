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
        $result = [];
        $news = $this->NewsByCategoryId($id);

        if (!$news) {
            return 'Указан некорректный id категории.';
        }

        foreach ($news as $key => $item) {
            $result[] = '<a href=' . route('news.getNewsById', $key) . '><h3>' . $item['title'] . '</h3></a>';
        }

        return implode('<br>', $result);
    }

    public function getNewsById(int $id)
    {
        $result = '';
        $news = $this->getAllNews();

        if (!array_key_exists($id, $news)) {
            return 'Указан некорректный id новости.';
        }

        $news = $news[$id];
        $result .= '<h3>' . $news['title'] . '</h3>' . PHP_EOL . $news['body'];

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
