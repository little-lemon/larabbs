<?php

use App\Models\Link;

return [
    // 页面标题
    'title'       => '资源推荐',

    // 模型单数，用作页面『新建 $single』
    'single'      => '资源推荐',

    // 数据模型，用作数据的 CRUD
    'model'       => Link::class,

    // 设置当前页面的访问权限，通过返回布尔值来控制权限。
    // 返回 True 即通过权限验证，False 则无权访问并从 Menu 中隐藏
    'permission'  => function () {
        return Auth::user()->hasRole('Founder');
    },

    // 字段负责渲染『数据表格』，由无数的『列』组成，
    'columns'     => [
        'id'        => [
            'title' => 'ID',
        ],
        'title'     => [
            'title'    => '名称',
            'sortable' => false,
        ],
        'link'      => [
            'title'    => '链接',
            'sortable' => false,
        ],
        'operation' => [
            'title'    => '管理',
            'sortable' => false,
        ],
    ],

    // 『模型表单』设置项
    'edit_fields' => [
        'title'     => [
            'title' => '名称',
        ],
        'link'    => [
            'title' => '链接',
        ],
    ],

    // 『数据过滤』设置
    'filters'     => [
        'id'    => [
            'title' => '标签ID',
        ],
        'title'  => [
            'title' => '名称',
        ]
    ],
];