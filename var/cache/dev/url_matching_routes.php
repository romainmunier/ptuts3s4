<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/checkoldpassword' => [[['_route' => 'check_oldpassword', '_controller' => 'App\\Controller\\APIController::checkOldPassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/updatepassword' => [[['_route' => 'updatepassword', '_controller' => 'App\\Controller\\APIController::updatePassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/checkusername' => [[['_route' => 'check_username', '_controller' => 'App\\Controller\\APIController::checkUsername'], null, ['POST' => 0], null, false, false, null]],
        '/api/getCategoryByValue' => [[['_route' => 'get_category', '_controller' => 'App\\Controller\\APIController::getCategory'], null, ['POST' => 0], null, false, false, null]],
        '/api/storeArticle' => [[['_route' => 'store_article', '_controller' => 'App\\Controller\\APIController::storeArticle'], null, ['POST' => 0], null, false, false, null]],
        '/api/saveArticle' => [[['_route' => 'save_article', '_controller' => 'App\\Controller\\APIController::saveArticle'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticlesController::index'], null, null, null, false, false, null]],
        '/dashboard/articles/add' => [[['_route' => 'articles_add', '_controller' => 'App\\Controller\\ArticlesController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login_if_not_connected', '_controller' => 'App\\Controller\\DashboardController::login'], null, null, null, false, false, null]],
        '/401' => [[['_route' => 'ERROR_401', '_controller' => 'App\\Controller\\ErrorController::ERROR401'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'ERROR_404', '_controller' => 'App\\Controller\\ErrorController::ERROR404'], null, null, null, false, false, null]],
        '/501' => [[['_route' => 'ERROR_501', '_controller' => 'App\\Controller\\ErrorController::ERROR501'], null, null, null, false, false, null]],
        '/dashboard/gallery' => [[['_route' => 'gallery', '_controller' => 'App\\Controller\\GalleryController::index'], null, null, null, false, false, null]],
        '/fastlogin' => [[['_route' => 'login', '_controller' => 'App\\Controller\\IndexController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\IndexController::register'], null, null, null, false, false, null]],
        '/log' => [[['_route' => 'log', '_controller' => 'App\\Controller\\LogController::index'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/dashboard/(?'
                    .'|articles/(?'
                        .'|edit/([^/]++)(*:208)'
                        .'|delete/([^/]++)(*:231)'
                    .')'
                    .'|category(?:/([^/]++))?(*:262)'
                    .'|mailing/(?'
                        .'|show/([^/]++)(*:294)'
                        .'|edit/([^/]++)(*:315)'
                    .')'
                    .'|users/edit/([^/]++)(*:343)'
                .')'
                .'|/admin/([^/]++)/(?'
                    .'|carousel/(?'
                        .'|add(*:386)'
                        .'|edit/([^/]++)(*:407)'
                        .'|delete/([^/]++)(*:430)'
                    .')'
                    .'|medias/(?'
                        .'|add/([^/]++)(*:461)'
                        .'|upload/([^/]++)(*:484)'
                        .'|delete/([^/]++)(*:507)'
                    .')'
                .')'
                .'|/control/admin/(?'
                    .'|mailing/delete/([^/]++)(*:558)'
                    .'|users/delete/([^/]++)(*:587)'
                .')'
                .'|/export/settings/save/([^/]++)(*:626)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'articles_edit', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['article'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        231 => [[['_route' => 'articles_delete', '_controller' => 'App\\Controller\\ArticlesController::delete'], ['article'], ['GET' => 0], null, false, true, null]],
        262 => [[['_route' => 'category', 'id' => null, '_controller' => 'App\\Controller\\CategoryController::index'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2, 'PUT' => 3], null, false, true, null]],
        294 => [[['_route' => 'mailing_show', '_controller' => 'App\\Controller\\MailingListController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'mailing_edit', '_controller' => 'App\\Controller\\MailingListController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        343 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        386 => [[['_route' => 'admin_carousel_add', '_controller' => 'App\\Controller\\CarouselLikeController::carouselHandle'], ['page'], null, null, true, false, null]],
        407 => [[['_route' => 'admin_carousel_edit', '_controller' => 'App\\Controller\\CarouselLikeController::carouselHandle'], ['page', 'id'], null, null, false, true, null]],
        430 => [[['_route' => 'admin_carousel_delete', '_controller' => 'App\\Controller\\CarouselLikeController::carouselDelete'], ['page', 'id'], null, null, false, true, null]],
        461 => [[['_route' => 'medias_add', '_controller' => 'App\\Controller\\MediaController::add'], ['page', 'id'], null, null, false, true, null]],
        484 => [[['_route' => 'medias_upload', '_controller' => 'App\\Controller\\MediaController::add'], ['page', 'id'], null, null, false, true, null]],
        507 => [[['_route' => 'medias_delete', '_controller' => 'App\\Controller\\MediaController::delete'], ['page', 'id'], null, null, false, true, null]],
        558 => [[['_route' => 'mailing_delete', '_controller' => 'App\\Controller\\MailingListController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        626 => [
            [['_route' => 'settings_save', '_controller' => 'App\\Controller\\SettingsController::saveSettings'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
