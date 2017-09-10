<?php

// Login
$app->get('/', 'App\Action\LoginAction:index')->setName('login.index');
$app->post('/login', 'App\Action\LoginAction:store')->setName('login.store');
$app->get('/login/destroy', 'App\Action\LoginAction:destroy')->setName('login.destroy');

// Register
$app->get('/register', 'App\Action\RegisterAction:index')->setName('register.index');
$app->post('/register', 'App\Action\RegisterAction:store')->setName('register.store');

// Home
$app->get('/home', 'App\Action\HomeAction:index')->setName('home.index')->add($guardian);
$app->get('/home/general', 'App\Action\HomeAction:general')->setName('home.general')->add($guardian);
