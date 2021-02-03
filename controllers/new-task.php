<?php
use TaskManager\DB;
use TaskManager\Task;
use TaskManager\Validation;

if(isset($_POST['send'])){
    $validation = Validation::validateName($_POST);


}
if (isset($_POST['send']) && empty($validation))
{
    $connection = DB::connect();
    $task = new Task($connection);
    $task->createTask($_POST);
}
else{
require 'view/pages/new-task.view.php';

}
?>