<?php

return [
    '__name' => 'product-last-seen',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-last-seen.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-last-seen' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProductLastSeen\\Library' => [
                'type' => 'file',
                'base' => 'modules/product-last-seen/library'
            ],
            'ProductLastSeen\\Model' => [
                'type' => 'file',
                'base' => 'modules/product-last-seen/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product-last-seen' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'product' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Product\\Model\\Product',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product'
                ],
                'seen' => [
                    'type' => 'number'
                ],
                'updated' => [
                    'type' => 'date',
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];