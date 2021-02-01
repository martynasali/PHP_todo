<?php
use TaskManager\Request;
use TaskManager\DB;
use TaskManager\Task;



$connection = DB::connect();
$task = new Task($connection);
$id = intval(basename(Request::uri()));
$task->setComplete($id);
echo 'labas';
var_dump($id);
require 'view/pages/delete-task.view.php';


