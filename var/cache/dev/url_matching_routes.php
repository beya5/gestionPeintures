<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/categorie' => [[['_route' => '_categorie_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categorie/new' => [[['_route' => '_categorie_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categorie/batch-delete' => [[['_route' => '_categorie_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/categorie/autocomplete' => [[['_route' => '_categorie_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categorie/render-filters' => [[['_route' => '_categorie_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/commentaire' => [[['_route' => '_commentaire_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/commentaire/new' => [[['_route' => '_commentaire_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/commentaire/batch-delete' => [[['_route' => '_commentaire_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/commentaire/autocomplete' => [[['_route' => '_commentaire_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/commentaire/render-filters' => [[['_route' => '_commentaire_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/peinture' => [[['_route' => '_peinture_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/peinture/new' => [[['_route' => '_peinture_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/peinture/batch-delete' => [[['_route' => '_peinture_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/peinture/autocomplete' => [[['_route' => '_peinture_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/peinture/render-filters' => [[['_route' => '_peinture_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/personne' => [[['_route' => '_personne_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/personne/new' => [[['_route' => '_personne_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/personne/batch-delete' => [[['_route' => '_personne_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/personne/autocomplete' => [[['_route' => '_personne_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/personne/render-filters' => [[['_route' => '_personne_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => '_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => '_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => '_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => '_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => '_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::adminDashboard'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/peinture' => [[['_route' => 'app_peinture_index', '_controller' => 'App\\Controller\\PeintureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/peinture/new' => [[['_route' => 'app_peinture_new', '_controller' => 'App\\Controller\\PeintureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/personne' => [[['_route' => 'app_personne_index', '_controller' => 'App\\Controller\\PersonneController::index'], null, ['GET' => 0], null, false, false, null]],
        '/personne/new' => [[['_route' => 'app_personne_new', '_controller' => 'App\\Controller\\PersonneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'app_user_dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], null, null, null, false, false, null]],
        '/user/commentaires' => [[['_route' => 'app_user_commentaires', '_controller' => 'App\\Controller\\UserController::commentaires'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:49)'
                                .'|delete(*:62)'
                            .')'
                            .'|(*:70)'
                        .')'
                        .'|ommentaire/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:108)'
                                .'|delete(*:122)'
                            .')'
                            .'|(*:131)'
                        .')'
                    .')'
                    .'|pe(?'
                        .'|inture/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:172)'
                                .'|delete(*:186)'
                            .')'
                            .'|(*:195)'
                        .')'
                        .'|rsonne/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:230)'
                                .'|delete(*:244)'
                            .')'
                            .'|(*:253)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:287)'
                            .'|delete(*:301)'
                        .')'
                        .'|(*:310)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:351)'
                    .'|wdt/([^/]++)(*:371)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:413)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:450)'
                                .'|router(*:464)'
                                .'|exception(?'
                                    .'|(*:484)'
                                    .'|\\.css(*:497)'
                                .')'
                            .')'
                            .'|(*:507)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:543)'
                        .'|/edit(*:556)'
                        .'|(*:564)'
                    .')'
                    .'|ommentaire/(?'
                        .'|new/([^/]++)(*:599)'
                        .'|([^/]++)(?'
                            .'|(*:618)'
                            .'|/edit(*:631)'
                            .'|(*:639)'
                        .')'
                    .')'
                .')'
                .'|/pe(?'
                    .'|inture/([^/]++)(?'
                        .'|(*:674)'
                        .'|/edit(*:687)'
                        .'|(*:695)'
                    .')'
                    .'|rsonne/([^/]++)(?'
                        .'|(*:722)'
                        .'|/edit(*:735)'
                        .'|(*:743)'
                    .')'
                .')'
                .'|/user/commentaire/(?'
                    .'|new/([^/]++)(*:786)'
                    .'|delete/([^/]++)(*:809)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => '_categorie_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        62 => [[['_route' => '_categorie_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        70 => [[['_route' => '_categorie_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CategorieCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategorieCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        108 => [[['_route' => '_commentaire_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        122 => [[['_route' => '_commentaire_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        131 => [[['_route' => '_commentaire_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CommentaireCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CommentaireCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        172 => [[['_route' => '_peinture_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        186 => [[['_route' => '_peinture_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        195 => [[['_route' => '_peinture_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PeintureCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PeintureCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => '_personne_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        244 => [[['_route' => '_personne_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        253 => [[['_route' => '_personne_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PersonneCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PersonneCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => '_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        301 => [[['_route' => '_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        310 => [[['_route' => '_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        371 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        413 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        450 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        464 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        484 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        497 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        507 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        543 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        556 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        564 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        599 => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], ['peintureId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        618 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        631 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        639 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        674 => [[['_route' => 'app_peinture_show', '_controller' => 'App\\Controller\\PeintureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        687 => [[['_route' => 'app_peinture_edit', '_controller' => 'App\\Controller\\PeintureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        695 => [[['_route' => 'app_peinture_delete', '_controller' => 'App\\Controller\\PeintureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        722 => [[['_route' => 'app_personne_show', '_controller' => 'App\\Controller\\PersonneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        735 => [[['_route' => 'app_personne_edit', '_controller' => 'App\\Controller\\PersonneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        743 => [[['_route' => 'app_personne_delete', '_controller' => 'App\\Controller\\PersonneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        786 => [[['_route' => 'app_user_commentaire_new', '_controller' => 'App\\Controller\\UserController::newCommentaire'], ['peintureId'], null, null, false, true, null]],
        809 => [
            [['_route' => 'app_user_commentaire_delete', '_controller' => 'App\\Controller\\UserController::deleteCommentaire'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
