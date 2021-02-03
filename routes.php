<?php
$router->define([
    'PHP_todo'=>'controllers/home.php',
    'PHP_todo/PHP_todo/new-task'=>'controllers/new-task.php',
    'PHP_todo/edit-task'=>'controllers/edit-task.php',
    '404' => 'controllers/404.php',
    'PHP_todo/delete-task' => 'controllers/delete-task.php',
    'PHP_todo/complete-task' => 'controllers/complete-task.php',
    'PHP_todo/notComplete-task' => 'controllers/notComplete-task.php'
]);