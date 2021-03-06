<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\Bitnami\\wordpress-4.5.3-0\\apps\\wordpress\\htdocs/wp-content/plugins/gantry5/engines/nucleus/particles/widget.yaml',
    'modified' => 1508069783,
    'data' => [
        'name' => 'Widget',
        'description' => 'Display a single widget.',
        'icon' => 'fa-object-ungroup',
        'type' => 'position',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable widget particle.',
                    'default' => true
                ],
                'widget' => [
                    'type' => 'gantry.widget',
                    'label' => 'Widget',
                    'class' => 'g-urltemplate input-small',
                    'picker_label' => 'Pick a Widget',
                    'pattern' => '[a-z0-9_-]+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Widget chrome.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
