<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'check_oldpassword' => [[], ['_controller' => 'App\\Controller\\APIController::checkOldPassword'], [], [['text', '/api/checkoldpassword']], [], []],
    'updatepassword' => [[], ['_controller' => 'App\\Controller\\APIController::updatePassword'], [], [['text', '/api/updatepassword']], [], []],
    'check_username' => [[], ['_controller' => 'App\\Controller\\APIController::checkUsername'], [], [['text', '/api/checkusername']], [], []],
    'get_category' => [[], ['_controller' => 'App\\Controller\\APIController::getCategory'], [], [['text', '/api/getCategoryByValue']], [], []],
    'category' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\CategoryController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/category']], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], []],
    'login_if_not_connected' => [[], ['_controller' => 'App\\Controller\\DashboardController::login'], [], [['text', '/login']], [], []],
    'ERROR_401' => [[], ['_controller' => 'App\\Controller\\ErrorController::ERROR401'], [], [['text', '/401']], [], []],
    'ERROR_404' => [[], ['_controller' => 'App\\Controller\\ErrorController::ERROR404'], [], [['text', '/404']], [], []],
    'ERROR_501' => [[], ['_controller' => 'App\\Controller\\ErrorController::ERROR501'], [], [['text', '/501']], [], []],
    'gallery' => [[], ['_controller' => 'App\\Controller\\GalleryController::index'], [], [['text', '/gallery']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\IndexController::login'], [], [['text', '/fastlogin']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\IndexController::logout'], [], [['text', '/logout']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\IndexController::register'], [], [['text', '/register']], [], []],
    'mailing' => [[], ['_controller' => 'App\\Controller\\MailingListController::index'], [], [['text', '/dashboard/mailing']], [], []],
    'mailing_add' => [[], ['_controller' => 'App\\Controller\\MailingListController::add'], [], [['text', '/dashboard/mailing/add']], [], []],
    'mailing_show' => [['id'], ['_controller' => 'App\\Controller\\MailingListController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/mailing/show']], [], []],
    'mailing_edit' => [['id'], ['_controller' => 'App\\Controller\\MailingListController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/mailing/edit']], [], []],
    'mailing_delete' => [['id'], ['_controller' => 'App\\Controller\\MailingListController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/control/admin/mailing/delete']], [], []],
    'news' => [[], ['_controller' => 'App\\Controller\\NewsController::index'], [], [['text', '/dashboard/news']], [], []],
    'settings' => [[], ['_controller' => 'App\\Controller\\SettingsController::index'], [], [['text', '/dashboard/settings']], [], []],
    'settings_save' => [['id'], ['_controller' => 'App\\Controller\\SettingsController::saveSettings'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/export/settings/save']], [], []],
    'account' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/dashboard/account']], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\UserController::users'], [], [['text', '/dashboard/users']], [], []],
    'users_add' => [[], ['_controller' => 'App\\Controller\\UserController::add'], [], [['text', '/dashboard/users/add']], [], []],
    'users_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/users/edit']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/control/admin/users/delete']], [], []],
    'user_executeAction' => [[], ['_controller' => 'App\\Controller\\UserController::executeAction'], [], [['text', '/control/admin/users/executeAction']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], []],
];
