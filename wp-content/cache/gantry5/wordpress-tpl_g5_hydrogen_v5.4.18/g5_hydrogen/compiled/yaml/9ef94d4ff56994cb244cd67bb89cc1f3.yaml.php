<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/Bitnami/wordpress-4.5.3-0/apps/wordpress/htdocs/wp-content/themes/wordpress-tpl_g5_hydrogen_v5.4.18/g5_hydrogen/blueprints/content/archive/title.yaml',
    'modified' => 1506016058,
    'data' => [
        'name' => 'Post Title',
        'description' => 'Options for displaying title',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display post titles.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link titles to the posts.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
