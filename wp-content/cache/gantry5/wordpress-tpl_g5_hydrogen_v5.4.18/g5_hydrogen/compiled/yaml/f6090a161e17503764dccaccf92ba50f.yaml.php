<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\Bitnami\\wordpress-4.5.3-0\\apps\\wordpress\\htdocs/wp-content/themes/wordpress-tpl_g5_hydrogen_v5.4.18/g5_hydrogen/blueprints/content/page/title.yaml',
    'modified' => 1506016058,
    'data' => [
        'name' => 'Page Title',
        'description' => 'Options for displaying title',
        'type' => 'page',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display page title.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link title to the page.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
