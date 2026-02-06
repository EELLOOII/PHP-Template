<?php

$router->get('/', 'HomeController@index');
$router->get('/users', 'UserController@index');
$router->get('/reports', 'ReportController@index');
