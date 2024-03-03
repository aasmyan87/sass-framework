<?php

function get_menu(){
    $menu = [
        1 => [
            'label' => 'Menu Sub - 1 Level',
            'link' => '#',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Label 1',
                    'link' => '#',
                    'class' => '',
                ],
                2 => [
                    'label' => 'Label 2',
                    'link' => '#',
                    'class' => '',
                ],
                3 => [
                    'label' => 'Label 3',
                    'link' => '#',
                    'class' => '',
                ],
                4 => [
                    'label' => 'Label 4',
                    'link' => '#',
                    'class' => '',
                ],
                5 => [
                    'label' => 'Label 5',
                    'link' => '#',
                    'class' => '',
                ],
            ]
        ],
        2 => [
            'label' => 'Menu Sub - 2 Level',
            'link' => '#',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Label 1',
                    'link' => '#',
                    'class' => 'menu-item-has-children',
                    'submenu2' => [
                        1 => [
                            'label' => 'Label 1',
                            'link' => '#',
                        ],
                        2 => [
                            'label' => 'Label 2',
                            'link' => '#',
                        ],
                    ]
                ],
                2 => [
                    'label' => 'Label 2',
                    'link' => '#',
                    'class' => 'menu-item-has-children',
                    'submenu2' => [
                        1 => [
                            'label' => 'Label 1',
                            'link' => '#',
                        ],
                        2 => [
                            'label' => 'Label 2',
                            'link' => '#',
                        ],
                    ]
                ],
                3 => [
                    'label' => 'Label 3',
                    'link' => '#',
                    'class' => 'menu-item-has-children',
                    'submenu2' => [
                        1 => [
                            'label' => 'Label 1',
                            'link' => '#',
                        ],
                        2 => [
                            'label' => 'Label 2',
                            'link' => '#',
                        ],
                        3 => [
                            'label' => 'Label 3',
                            'link' => '#',
                        ],
                    ]
                ],

            ]
        ],
        5 => [
            'label' => 'Simple Links',
            'link' => '#',
            'class' => 'menu-item-has-children',
            'submenu' => [
                1 => [
                    'label' => 'Label 1',
                    'link' => '#',
                    'class' => '',
                ],
                2 => [
                    'label' => 'Label 2',
                    'link' => '#',
                    'class' => '',
                ],
                3 => [
                    'label' => 'Label 3',
                    'link' => '#',
                    'class' => '',
                ],

            ]
        ],
    ];
    return $menu;
}

