<?php

return [

    'label' => '产品选项',

    'plural_label' => '产品选项',

    'table' => [
        'name' => [
            'label' => '名称',
        ],
        'label' => [
            'label' => '标签',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'shared' => [
            'label' => '共享',
        ],
    ],

    'form' => [
        'name' => [
            'label' => '名称',
        ],
        'label' => [
            'label' => '标签',
        ],
        'handle' => [
            'label' => '处理',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => '产品变体保存',
                    ],
                ],
            ],
            'actions' => [
                'cancel' => [
                    'label' => '取消',
                ],
                'save-options' => [
                    'label' => '保存选项',
                ],
                'add-shared-option' => [
                    'label' => '添加共享选项',
                    'form' => [
                        'product_option' => [
                            'label' => '产品选项',
                        ],
                        'no_shared_components' => [
                            'label' => '没有共享选项可用。',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => '添加选项',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading' => '没有配置产品选项',
                    'description' => '添加共享或受限的产品选项，以开始生成一些变体。',
                ],
            ],
            'options-table' => [
                'title' => '产品选项',
                'configure-options' => [
                    'label' => '配置选项',
                ],
                'table' => [
                    'option' => [
                        'label' => '选项',
                    ],
                    'values' => [
                        'label' => '值',
                    ],
                ],
            ],
            'variants-table' => [
                'title' => '产品变体',
                'actions' => [
                    'create' => [
                        'label' => '创建变体',
                    ],
                    'edit' => [
                        'label' => '编辑',
                    ],
                    'delete' => [
                        'label' => '删除',
                    ],
                ],
                'empty' => [
                    'heading' => '没有配置的变体',
                ],
                'table' => [
                    'new' => [
                        'label' => 'New',
                    ],
                    'option' => [
                        'label' => '选项',
                    ],
                    'sku' => [
                        'label' => 'SKU',
                    ],
                    'price' => [
                        'label' => '价格',
                    ],
                    'stock' => [
                        'label' => '库存',
                    ],
                ],
            ],
        ],
    ],

];
