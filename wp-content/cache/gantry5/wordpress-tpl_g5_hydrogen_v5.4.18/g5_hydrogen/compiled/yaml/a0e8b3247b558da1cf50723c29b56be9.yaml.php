<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\Bitnami\\wordpress-4.5.3-0\\apps\\wordpress\\htdocs//wp-content/themes/wordpress-tpl_g5_hydrogen_v5.4.18/g5_hydrogen/blueprints/content/blog/content.yaml',
    'modified' => 1506016058,
    'data' => [
        'name' => 'Content',
        'description' => 'Options for displaying Content in the view',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'type' => [
                    'type' => 'select.select',
                    'label' => 'Content Type',
                    'description' => 'What post should display by default',
                    'default' => 'content',
                    'options' => [
                        'content' => 'Content',
                        'excerpt' => 'Excerpt'
                    ]
                ],
                'columns' => [
                    'type' => 'select.select',
                    'label' => 'Post Columns',
                    'description' => 'In how many columns should the posts appear',
                    'default' => 'size-100',
                    'options' => [
                        'size-100' => '1 Column',
                        'size-50' => '2 Columns',
                        'size-33-3' => '3 Columns',
                        'size-25' => '4 Columns',
                        'size-20' => '5 Columns'
                    ]
                ]
            ]
        ]
    ]
];
