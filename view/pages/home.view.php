


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <link href="view/css/bootstrap.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Home</title>
</head>
<style>

    th {
        text-align: center;
    }
</style>
<body>



<div class="mt-3 container col-6">
    <h5 class="mt-3 display-4">Užduotys</h5>
<div class="row">
    <table class="table mt-3 ml-3 mr-3 col  table table-bordered  table-striped">
        <thead class="thead-light rounded ">
        <tr>
            <th scope="col" class="th "><i class="bi bi-hammer"></i></th>
            <th scope="col " class="th">Tema</th>
            <th scope="col" class="th">Prioritetas</th>

            <th scope="col" class="th">Data</th>
            <th scope="col" class="th"><i class="bi bi-trash-fill"></i></th>
        </tr>
        </thead>









        <tbody id="tableBody">
        <?php foreach ($tasks->allTasks() as $task): ?>
        <?php if ($task['status']==1):?>
        <th <button class="rounded" style="display:block;"> <a href="PHP_todo/notComplete-task/id/<?=$task['id'];?>"><i class="bi bi-circle"></i></i></button></th>
        <?php else:?>
        <th class="rounded" style="display:block;"> <a href="PHP_todo/complete-task/id/<?=$task['id'];?>"><i class="bi bi-check2-circle"></i></th>
        <?endif?>




                 <th class="rounded" ><?=$task['subject'];?></th>
                <th class="rounded" ><?=$task['priority'];?></th>
                <th class="rounded" ><?=$task['dueDate'];?></th>
                <th class="rounded" style="display:block;"> <a href="PHP_todo/delete-task/id/<?=$task['id']?>"><i class="bi bi-trash-fill"></i></th>
        </tbody>
        <?php endforeach; ?>

    </table>
</div>
    <div class="justify-content-md-end">

    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="PHP_todo/new-task" type="button"  href="PHP_todo/new-task" class="btn btn-primary">Nauja Užduotis</a>
    </div>
</div>






</body>
</html>
