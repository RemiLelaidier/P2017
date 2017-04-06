<?php
// Routes

/**
 * Routes publiques
 */
$app->get('/', 'App\Action\HomeController:home')
    ->setName('homepage');

/**
 * Routes privees
 */
$app->get('/admin', 'App\Action\AdminController:home')
    ->setName('adm_home');