<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\Bitnami\\wordpress-4.5.3-0\\apps\\wordpress\\htdocs//wp-content/themes/wordpress-tpl_g5_hydrogen_v5.4.18/g5_hydrogen/blueprints/styles/subfeature.yaml',
    'modified' => 1506016058,
    'data' => [
        'name' => 'Subfeature Colors',
        'description' => 'Subfeature colors for the Hydrogen theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f0f0f0'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#666666'
                ]
            ]
        ]
    ]
];
