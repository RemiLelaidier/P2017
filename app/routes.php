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
// Cockpit
$app->get('/admin', 'App\Action\AdminController:home')
    ->setName('adm_home');

// Content
$app->group('/content', function (){
    $this->get('/add', 'App\Action\AdminController:contentForm')
        ->setName('adm_contentForm');
    $this->post('/add', 'App\Action\AdminController:postContent');
});

// Theme
$app->group('/theme', function (){
    $this->get('/add', 'App\Action\AdminController'/* TODO*/);
    $this->post('add', 'App\Action\AdminController'/* TODO*/);
});