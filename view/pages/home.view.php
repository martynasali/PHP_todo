


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/d80427d0bb/UntitledProject/style.css">
    <link href="view/css/bootstrap.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/./view/style.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>
<style>

    @font-face {
        font-family: 'icomoon';
        src:  url('fonts/icomoon.eot?bm0ean');
        src:  url('fonts/icomoon.eot?bm0ean#iefix') format('embedded-opentype'),
        url('fonts/icomoon.ttf?bm0ean') format('truetype'),
        url('fonts/icomoon.woff?bm0ean') format('woff'),
        url('fonts/icomoon.svg?bm0ean#icomoon') format('svg');
        font-weight: normal;
        font-style: normal;
        font-display: block;
    }

    [class^="icon-"], [class*=" icon-"] {
        /* use !important to prevent issues with browser extensions that change fonts */
        font-family: 'icomoon' !important;
        speak: never;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;

        /* Better Font Rendering =========== */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .icon-check:before {
        content: "\e900";
    }
    .icon-checkO:before {
        content: "\e901";
    }


    th {
        text-align: center;
    }

    .check:hover {
        color: #0a53be;
        -webkit-filter: drop-shadow(10px 10px 41px #222);
        filter:         drop-shadow(10px 10px 41px #222);
    }


    .icon-checkObj:hover {
        color: #0a53be;
        -webkit-filter: drop-shadow(10px 10px 41px #222);
        filter:         drop-shadow(10px 10px 41px #222);

    }

</style>
<body>


<div class="mt-3 container col-6">
    <h5 class="mt-3 display-4">Užduotys</h5>
<div class="row">
    <table class="table mt-3 ml-3 mr-3 col  table table-bordered  table-striped">
        <thead class="thead-light rounded ">
        <tr>
            <th scope="col" class="th "><i class="bi bi-check2-all"></i></th>
            <th scope="col " class="th"><i class="bi bi-card-checklist"></i></th>
            <th scope="col" class="th"><i class="bi bi-bar-chart"></i></th>

            <th scope="col" class="th"><i class="bi bi-calendar-date"></i></th>
            <th scope="col" class="th"><i class="bi bi-trash2"></i></i></th>
        </tr>
        </thead>









        <tbody id="tableBody">
        <?php foreach ($tasks->allTasks() as $task): ?>
        <?php if ($task['status']==1):?>
        <th class="rounded" style="display:block;">  <a href='PHP_todo/notComplete-task/id/<?=$task['id'];?>'><i class="bi bi-check2"></i></a> </th>
        <?php else:?>
        <th class="rounded" style="display:block;"> <a href='PHP_todo/complete-task/id/<?=$task['id'];?>'> <i class="bi bi-circle"></i></a> </th>
        <?endif?>




                 <th class="rounded" ><?=$task['subject'];?></th>
                <th class="rounded" ><?=$task['priority'];?></th>
                <th class="rounded" ><?=$task['dueDate'];?></th>
                <th class="rounded" style="display:block;"> <a href="PHP_todo/delete-task/id/<?=$task['id']?>"><i class="bi bi-trash2"></i></th>
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





<span class="icon-checkObj"></span>



</body>
</html>
