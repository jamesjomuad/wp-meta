<?php

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the menu routes for a plugin.
| In this context, the route are the menu link.
|
*/

return [
  'advance_meta_slug_menu' => [
    "page_title" => "WP Kirk Page title",
    "menu_title" => "WP Kirk Menu title",
    'capability' => 'read',
    'icon'       => 'dashicons-lightbulb',
    'items'      => [
      [
        "page_title" => "Main View",
        "menu_title" => "Main View",
        'capability' => 'read',
        'route'      => [
          'get' => 'Dashboard\DashboardController@index'
        ],
      ],
    ]
  ]
];
