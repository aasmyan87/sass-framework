<?php

function get_menu(){
    $menu = [
        1 => [
            'label' => 'Home',
            'link' => 'index.html',
        ],

        2 => [
            'label' => 'About',
            'link' => 'about.html',
            'class' => ''
        ],
        4 => [
            'label' => 'Links',
            'link' => '#',
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
    ];
    return $menu;
}

