<?php


namespace TaskManager;
use PDO;

class Task
{
    protected $pdo;
    private $subject;
    private $priority;
    private $dueDate;
    private $status = 0;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
public function createTask($task){
        $this->subject = $task['subject'];
        $this->priority = $task['priority'];
        $this->dueDate = $task['dueDate'];
        $this->insertTask();

}
private function insertTask()
{
    try{
        $query = "INSERT INTO `taskmanager` (`subject`, `priority`,`dueDate`,`status`)
VALUES(:subject, :priority, :dueDate, :status)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':subject', $this->subject, PDO::PARAM_STR);
        $stmt->bindParam(':priority', $this->priority, PDO::PARAM_STR);
        $stmt->bindParam(':dueDate', $this->dueDate, PDO::PARAM_STR);
        $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
        $stmt->execute();
        header('Location:/PHP_todo/');


    }catch (PDOException $e) {
        echo  $e->getMessage();
    }
}

public function allTasks()
{
    $statement = $this->pdo->prepare("select * from taskmanager");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

public function setComplete($id){
echo"XXXXXXXXXXXXXXXX";
    $this->status=1;

    try {
        $query = "UPDATE taskmanager SET `status` = :status WHERE id =:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        header('Location:/PHP_todo/');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
}

    public function setNotcomplete($id){
        echo"XXXXXXXXXXXXXXXX";
        $this->status=0;

        try {
            $query = "UPDATE taskmanager SET `status` = :status WHERE id =:id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/PHP_todo/');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $conn = null;
    }

public function deleteEntry($id){
        $this->id = 1;
    try {
        $query = "DELETE FROM `taskmanager` WHERE `taskmanager`.`id` = $id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        header('Location:/PHP_todo/');
    }  catch (PDOException $e) {
        echo $e->getMessage();
    }
}


}