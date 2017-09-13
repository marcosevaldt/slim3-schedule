<?php

// Login
$app->get('/', 'App\Action\LoginAction:index')->setName('login.index');
$app->post('/login', 'App\Action\LoginAction:store')->setName('login.store');
$app->get('/login/destroy', 'App\Action\LoginAction:destroy')->setName('login.destroy')->add($guardian);

// Register
$app->get('/register', 'App\Action\RegisterAction:index')->setName('register.index');
$app->post('/register', 'App\Action\RegisterAction:store')->setName('register.store');

// Home
$app->get('/home', 'App\Action\HomeAction:index')->setName('home.index')->add($guardian);

// Usuários CRUD
$app->get('/home/user/show', 'App\Action\UserAction:index')->setName('home.user.show')->add($guardian);
$app->get('/home/user/create', 'App\Action\UserAction:create')->setName('home.user.create')->add($guardian);
$app->post('/home/user/store', 'App\Action\UserAction:store')->setName('home.user.store')->add($guardian);
$app->get('/home/user/edit/{id}', 'App\Action\UserAction:edit')->setName('home.user.edit')->add($guardian);
$app->post('/home/user/update', 'App\Action\UserAction:update')->setName('home.user.update')->add($guardian);
$app->get('/home/user/destroy/{id}', 'App\Action\UserAction:destroy')->setName('home.user.destroy')->add($guardian);

// Salas CRUD
$app->get('/home/salas/show', 'App\Action\SalasAction:index')->setName('home.salas.show')->add($guardian);
$app->get('/home/salas/create', 'App\Action\SalasAction:create')->setName('home.salas.create')->add($guardian);
$app->post('/home/salas/store', 'App\Action\SalasAction:store')->setName('home.salas.store')->add($guardian);
$app->get('/home/salas/edit/{id}', 'App\Action\SalasAction:edit')->setName('home.salas.edit')->add($guardian);
$app->post('/home/salas/update', 'App\Action\SalasAction:update')->setName('home.salas.update')->add($guardian);
$app->get('/home/salas/destroy/{id}', 'App\Action\SalasAction:destroy')->setName('home.salas.destroy')->add($guardian);

// Agendamento
$app->get('/home/agendamento/show', 'App\Action\AgendamentoAction:index')->setName('home.agendamento.show')->add($guardian);
$app->get('/home/agendamento/calendario/{id}', 'App\Action\AgendamentoAction:showCalendar')->setName('home.agendamento.calendar')->add($guardian);
$app->get('/home/agendamento/agendar', 'App\Action\AgendamentoAction:showAgendarSala')->setName('home.agendamento.agendar')->add($guardian);
$app->post('/home/agendamento/agendar/store', 'App\Action\AgendamentoAction:store')->setName('home.agendamento.store')->add($guardian);
$app->get('/home/agendamento/agendar/edit/{id}', 'App\Action\AgendamentoAction:edit')->setName('home.agendamento.edit')->add($guardian);
$app->post('/home/agendamento/agendar/destroy', 'App\Action\AgendamentoAction:destroy')->setName('home.agendamento.destroy')->add($guardian);
$app->post('/home/agendamento/agendar/update', 'App\Action\AgendamentoAction:update')->setName('home.agendamento.update')->add($guardian);
