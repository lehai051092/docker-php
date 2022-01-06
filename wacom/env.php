<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => 'a8a11e433690de8d68fb2e8521afb2f9'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'wacom_db_1',
                'dbname' => 'wacom',
                'username' => 'wacom',
                'password' => 'wacom',
                'active' => '1',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1,
        'compiled_config' => 1,
        'google_product' => 1,
        'fishpig_wordpress' => 1
    ],
    'install' => [
        'date' => 'Thu, 02 May 2019 07:13:59 +0000'
    ],
    'system' => [
        'default' => [
            'design' => [
                'search_engine_robots' => [
                    'default_robots' => 'INDEX,FOLLOW'
                ]
            ],
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://w-ec.sun-asterisk.vn/',
                    'base_link_url' => 'https://w-ec.sun-asterisk.vn/',
                    'base_static_url' => null,
                    'base_media_url' => null
                ],
                'secure' => [
                    'base_url' => 'https://w-ec.sun-asterisk.vn/',
                    'base_link_url' => 'https://w-ec.sun-asterisk.vn/',
                    'base_static_url' => null,
                    'base_media_url' => null
                ],
                'default' => [
                    'front' => 'cms'
                ]
            ]
        ]
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'a5e_'
            ],
            'page_cache' => [
                'id_prefix' => 'a5e_'
            ]
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ]
];
