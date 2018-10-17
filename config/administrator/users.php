<?php
use  App\Models\User;
return [

    'title' => '文章',
    'heading' => '文章管理',
    'single' => '文章',
    'model' => User::class,

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'title' => [
            'title' => 'Title',
        ],
        'body' => [
            'title' => 'Content',
            'sortable' => false,
            'output' => function($value)
            {
                return str_limit($value);
            },
        ],
        'user_name' => [
            'title' => "Author",
            'select' => "(:table).name",
        ],
        'created_at',

        'operation' => [
            'title'  => '管理',
            'output' => function ($value, $model) {
                return $value;
            },
            'sortable' => false,
        ],
    ],

    'edit_fields' => [
        'title' => [
            'title' => '标题',
            'type' => 'text'
        ],
        'body' => [
            'title' => '内容',
            'type' => 'textarea'
        ],
    ],

    'filters' => [
        'title' => [
            'title' => '标题',
        ]
    ],

];