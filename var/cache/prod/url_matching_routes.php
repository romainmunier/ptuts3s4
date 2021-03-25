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
        '/api/getCategoryByValue' => [[['_route' => 'get_category', '_controller' => 'App\\Controller\\APIController::getCategory'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login_if_not_connected', '_controller' => 'App\\Controller\\DashboardController::login'], null, null, null, false, false, null]],
        '/401' => [[['_route' => 'ERROR_401', '_controller' => 'App\\Controller\\ErrorController::ERROR401'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'ERROR_404', '_controller' => 'App\\Controller\\ErrorController::ERROR404'], null, null, null, false, false, null]],
        '/501' => [[['_route' => 'ERROR_501', '_controller' => 'App\\Controller\\ErrorController::ERROR501'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'gallery', '_controller' => 'App\\Controller\\GalleryController::index'], null, null, null, false, false, null]],
        '/fastlogin' => [[['_route' => 'login', '_controller' => 'App\\Controller\\IndexController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\IndexController::register'], null, null, null, false, false, null]],
        '/dashboard/mailing' => [[['_route' => 'mailing', '_controller' => 'App\\Controller\\MailingListController::index'], null, null, null, false, false, null]],
        '/dashboard/mailing/add' => [[['_route' => 'mailing_add', '_controller' => 'App\\Controller\\MailingListController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/news' => [[['_route' => 'news', '_controller' => 'App\\Controller\\NewsController::index'], null, null, null, false, false, null]],
        '/dashboard/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\SettingsController::index'], null, null, null, false, false, null]],
        '/dashboard/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::users'], null, null, null, false, false, null]],
        '/dashboard/users/add' => [[['_route' => 'users_add', '_controller' => 'App\\Controller\\UserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/control/admin/users/executeAction' => [[['_route' => 'user_executeAction', '_controller' => 'App\\Controller\\UserController::executeAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/dashboard/(?'
                    .'|category(?:/([^/]++))?(*:43)'
                    .'|mailing/(?'
                        .'|show/([^/]++)(*:74)'
                        .'|edit/([^/]++)(*:94)'
                    .')'
                    .'|users/edit/([^/]++)(*:121)'
                .')'
                .'|/control/admin/(?'
                    .'|mailing/delete/([^/]++)(*:171)'
                    .'|users/delete/([^/]++)(*:200)'
                .')'
                .'|/export/settings/save/([^/]++)(*:239)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'category', 'id' => null, '_controller' => 'App\\Controller\\CategoryController::index'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2, 'PUT' => 3], null, false, true, null]],
        74 => [[['_route' => 'mailing_show', '_controller' => 'App\\Controller\\MailingListController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'mailing_edit', '_controller' => 'App\\Controller\\MailingListController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        121 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        171 => [[['_route' => 'mailing_delete', '_controller' => 'App\\Controller\\MailingListController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [
            [['_route' => 'settings_save', '_controller' => 'App\\Controller\\SettingsController::saveSettings'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
