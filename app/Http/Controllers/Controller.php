<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $news = [
        1 =>
        [
            'category_name' => 'Category 1',
            'news' => [
                1 =>
                [
                    'title' => 'News 1',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                2 =>
                [
                    'title' => 'News 2',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                3 =>
                [
                    'title' => 'News 3',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
            ]
        ],
        2 =>
        [
            'category_name' => 'Category 2',
            'news' => [
                6 =>
                [
                    'title' => 'News 6',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                7 =>
                [
                    'title' => 'News 7',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                8 =>
                [
                    'title' => 'News 8',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                9 =>
                [
                    'title' => 'News 9',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ], 10 =>
                [
                    'title' => 'News 10',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                11 =>
                [
                    'title' => 'News 11',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                12 =>
                [
                    'title' => 'News 12',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
            ]
        ],
        3 =>
        [
            'category_name' => 'Category 3',
            'news' => [
                13 =>
                [
                    'title' => 'News 13',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                14 =>
                [
                    'title' => 'News 14',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                15 =>
                [
                    'title' => 'News 15',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                16 =>
                [
                    'title' => 'News 16',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                17 =>
                [
                    'title' => 'News 17',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                18 =>
                [
                    'title' => 'News 18',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
            ]
        ],
        4 =>
        [
            'category_name' => 'Category 4',
            'news' => [
                19 =>
                [
                    'title' => 'News 19',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                20 =>
                [
                    'title' => 'News 20',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                21 =>
                [
                    'title' => 'News 21',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                22 =>
                [
                    'title' => 'News 22',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                23 =>
                [
                    'title' => 'News 23',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                24 =>
                [
                    'title' => 'News 24',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                25 =>
                [
                    'title' => 'News 25',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                26 =>
                [
                    'title' => 'News 26',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
            ]
        ],
        5 =>
        [
            'category_name' => 'Category 5',
            'news' => [
                27 =>
                [
                    'title' => 'News 27',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                28 =>
                [
                    'title' => 'News 28',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                29 =>
                [
                    'title' => 'News 29',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                30 =>
                [
                    'title' => 'News 30',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                31 =>
                [
                    'title' => 'News 31',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                32 =>
                [
                    'title' => 'News 32',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                33 =>
                [
                    'title' => 'News 33',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                34 =>
                [
                    'title' => 'News 34',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                35 =>
                [
                    'title' => 'News 35',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
                36 =>
                [
                    'title' => 'News 36',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga sed dolorum laudantium. Molestias quam odit dolorem voluptate rerum nihil eveniet. Nisi, illo veniam reiciendis quam placeat assumenda corporis ut quidem.'
                ],
            ]
        ]
    ];

    protected function NewsCategories()
    {
        $result = [];
        foreach ($this->news as $key => $value) {
            $result[] = ['category_id' => $key, 'category_name' => $value['category_name']];
        }

        return $result;
    }

    protected function getAllNews()
    {
        $array = array_column($this->news, 'news');
        $result = array_reduce($array, function ($carry, $item) {
            return $carry + $item;
        }, []);

        return $result;
    }

    protected function NewsByCategoryId(int $id)
    {
        if (!array_key_exists($id, $this->news)) {
            return false;
        }

        return $this->news[$id]['news'];
    }
}
