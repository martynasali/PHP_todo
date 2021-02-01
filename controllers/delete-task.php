<?php
use TaskManager\Request;
use TaskManager\DB;
use TaskManager\Task;

echo "delete labas task";


$connect = DB::connect();
$tasks = new Task($connect);
$id = intval(basename(Request::uri()));
echo 'is this real life';
echo $id;
$tasks->deleteEntry($id);



require 'view/pages/delete-task.view.php';
