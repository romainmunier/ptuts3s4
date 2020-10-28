<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/checkoldpassword' => [[['_route' => 'check_oldpassword', '_controller' => 'App\\Controller\\APIController::checkOldPassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/updatepassword' => [[['_route' => 'updatepassword', '_controller' => 'App\\Controller\\APIController::updatePassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/checkusername' => [[['_route' => 'check_username', '_controller' => 'App\\Controller\\APIController::checkUsername'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login_if_not_connected', '_controller' => 'App\\Controller\\DashboardController::login'], null, null, null, false, false, null]],
        '/401' => [[['_route' => 'ERROR_401', '_controller' => 'App\\Controller\\ErrorController::ERROR401'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'ERROR_404', '_controller' => 'App\\Controller\\ErrorController::ERROR404'], null, null, null, false, false, null]],
        '/501' => [[['_route' => 'ERROR_501', '_controller' => 'App\\Controller\\ErrorController::ERROR501'], null, null, null, false, false, null]],
        '/fastlogin' => [[['_route' => 'login', '_controller' => 'App\\Controller\\IndexController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\IndexController::register'], null, null, null, false, false, null]],
        '/dashboard/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\SettingsController::index'], null, null, null, false, false, null]],
        '/dashboard/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::users'], null, null, null, false, false, null]],
        '/dashboard/users/add' => [[['_route' => 'users_add', '_controller' => 'App\\Controller\\UserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/control/admin/users/executeAction' => [[['_route' => 'user_executeAction', '_controller' => 'App\\Controller\\UserController::executeAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/export/settings/save/([^/]++)(*:37)'
                .'|/dashboard/users/edit/([^/]++)(*:74)'
                .'|/control/admin/users/delete/([^/]++)(*:117)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'settings_save', '_controller' => 'App\\Controller\\SettingsController::saveSettings'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        117 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
