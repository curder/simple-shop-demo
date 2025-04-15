<?php

return [
    'name' => '产品名称',
    'description' => '产品描述',
    'feature' => '产品特色',
    'body' => '产品详情',

    'media' => '产品图片',

    'form.status.label' => '',
    'form.status.options.published.label' => '已发布',
    'form.status.options.published.description' => '产品将在所有允许展示的地方展示',
    'form.status.options.draft.label' => '草稿箱',
    'form.status.options.draft.description' => '产品将对客户隐藏',

    'status' => [
        'unpublished' => [
            'content' => '当前产品目前处于草稿状态，不会对客户展示',
        ],
    ],

    'actions' => [
        'edit_status' => [
            'label' => '产品状态',
            'heading' => '更新产品状态',
        ],
    ],

    'pages.variants.label' => '选项',
    'pages.variants.description' => '产品选项',

    'pages' => [
        'edit' => [
            'title' => '基础信息',
        ],
    ],
];
