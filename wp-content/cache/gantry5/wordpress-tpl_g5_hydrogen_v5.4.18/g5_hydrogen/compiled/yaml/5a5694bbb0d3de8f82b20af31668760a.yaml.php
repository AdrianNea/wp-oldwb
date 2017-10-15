<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\Bitnami\\wordpress-4.5.3-0\\apps\\wordpress\\htdocs/wp-content/themes/wordpress-tpl_g5_hydrogen_v5.4.18/g5_hydrogen/blueprints/page.yaml',
    'modified' => 1506016058,
    'data' => [
        'name' => 'Page Settings',
        'description' => 'Settings that can be applied to the page.',
        'form' => [
            'fields' => [
                'doctype' => [
                    'type' => 'input.text',
                    'label' => 'Doctype',
                    'default' => 'html'
                ],
                'body.class' => [
                    'type' => 'input.text',
                    'label' => 'Body Class',
                    'default' => 'gantry'
                ]
            ]
        ]
    ]
];
