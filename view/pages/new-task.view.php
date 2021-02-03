<?php
$title = 'Nauja užduotis';
$i=3;
use TaskManager\Request;
use TaskManager\DB;
use TaskManager\Task;
?>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/./view/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container col-6">
<h5 class="mt-3 display-4"><?=$title;?></h5>

    <?php if (!empty($validation)): ?>
        <?php foreach ($validation as $error): ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php endforeach; ?>
    <?php endif; ?>


<div class="mt-2 row">


<form method="post">

    <div class="mt-3 input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Įveskite užduotį</span>
        <input type="text" name="subject" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
    </div>




    <div class="input-group flex-nowrap">




    </div>



    <select name="priority" class="mt-3 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>Prioritetas</option>
        <option value="Žemas">Žemas</option>
        <option value="Vidutinis">Vidutinis</option>
        <option value="Aukštas">Aukštas</option>

    </select>





    <div class="form-group row">

        <div class="col">
            <input  name="dueDate" class="form-select-lg form-control" type="date"  id="example-date-input">

        </div>


</div>
<div class="mt-3 d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="mt-2 mb-2 btn btn-primary position-relative">
        <a style="text-decoration: none;" class="link-light" href="http://192.168.64.2/PHP_todo/">
            Įvestos užduotys <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"><?=$i++;?> <span class="visually-hidden">Įvestos užduotys</span></span>  </a></button>
    <button type="submit" class="btn btn-danger" id="send" name="send">Prideti</button>
</div>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>