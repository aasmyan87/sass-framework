<?php

function get_menu(){
    $menu = [
        1 => [
            'label' => 'Headers',
            'link' => '#',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Default',
                    'link' => 'header.html',
                    'class' => '',
                ],
                2 => [
                    'label' => 'Fixed',
                    'link' => 'header-fixed.html',
                    'class' => '',
                ],
                3 => [
                    'label' => 'Jump',
                    'link' => 'header-jump.html',
                    'class' => '',
                ],
                4 => [
                    'label' => 'Reduce',
                    'link' => 'header-reduce.html',
                    'class' => '',
                ],
                5 => [
                    'label' => 'Transparent',
                    'link' => 'header-transparent.html',
                    'class' => '',
                ],
            ]
        ],

        2 => [
            'label' => 'Typography',
            'link' => 'typography.html',
            'class' => ''
        ],
        3 => [
            'label' => 'Section',
            'link' => 'sections.html',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Columns',
                    'link' => 'columns.html',
                    'class' => '',
                ],
            ]
        ],
        4 => [
            'label' => 'Tabs',
            'link' => 'tabs.html',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Label 1',
                    'link' => '#link1',
                    'class' => 'menu-item-has-children',
                    'submenu2' => [
                        1 => [
                            'label' => 'Label 4',
                            'link' => '#link1',
                        ],
                        2 => [
                            'label' => 'Label 4',
                            'link' => '#link1',
                        ],
                    ]
                ],
                2 => [
                    'label' => 'Label 1',
                    'link' => '#link1',
                    'class' => 'menu-item-has-children',
                    'submenu2' => [
                        1 => [
                            'label' => 'Label 4',
                            'link' => '#link1',
                        ],
                        2 => [
                            'label' => 'Label 4',
                            'link' => '#link1',
                        ],
                    ]
                ],
                3 => [
                    'label' => 'Label 3',
                    'link' => '#link3',
                    'class' => '',
                ],
            ]
        ],
        5 => [
            'label' => 'Inputs',
            'link' => '#',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Inputs',
                    'link' => 'inputs.html',
                    'class' => '',
                ],
                2 => [
                    'label' => 'Buttons',
                    'link' => 'buttons.html',
                    'class' => '',
                ],
                3 => [
                    'label' => 'Checkboxes',
                    'link' => 'checkbox.html',
                    'class' => '',
                ],

            ]
        ],
        6 => [
            'label' => 'Accordion',
            'link' => 'accordion.html',
            'class' => '',
        ],
        7 => [
            'label' => 'Sliders',
            'link' => '#',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Full Slider',
                    'link' => 'slider-full.html',
                    'class' => '',
                ],
                2 => [
                    'label' => 'Grid Slider',
                    'link' => 'slider-grid.html',
                    'class' => '',
                ],

            ]
        ],
    ];
    return $menu;
}

