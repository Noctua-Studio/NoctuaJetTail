<?php

return[

    'menuOptions'=>[
        'inicio',
        'nosotros',
        'productos'
    ],

    'optionRight'=>'ordenar',

    //Importante que los índices de las rutas sean iguales a las opciones de menú
    'menuRouteNames'=>[
        'inicio'=>'home',
        'nosotros'=>'us',
        'productos'=>'products',
        'ordenar'=>'order'
    ],

    //Lang
    //Importante que los índices de las rutas sean iguales a las opciones de menú
    'manuLangKeys'=>[
        'inicio'=>'INICIO',
        'nosotros'=>'NOSOTROS',
        'productos'=>'PRODUCTOS',
        'ordenar'=>'ORDENAR'
    ]

];