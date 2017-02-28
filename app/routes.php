<?php
// Routes

$app->get('/', 'App\Action\HomeController:home')
    ->setName('homepage');
