<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/Bitnami/wordpress-4.5.3-0/apps/wordpress/htdocs/wp-content/themes/wordpress-tpl_g5_hydrogen_v5.4.18/g5_hydrogen/blueprints/content/archive/heading.yaml',
    'modified' => 1506016058,
    'data' => [
        'name' => 'Page Heading',
        'description' => 'Options for displaying Heading',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Display custom heading text at the top of the page.',
                    'default' => 1
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Custom Heading',
                    'description' => 'Text to be used as a custom heading.'
                ]
            ]
        ]
    ]
];
