<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="view/css/bootstrap.css" rel="stylesheet" >
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <title>TO-DO</title>

    <style>

        body{
            background-color:blueviolet ;
        }

        .virsus{
            height: 150px;
            background-color: blueviolet;
        }

        .vidurys{
            height: 600px;
            background-color: blueviolet;
        }

        .spalva{
            background-color: coral;
            height: 600px;
        }

        .plotis{
            width: 800px;
        }

        #tableBody{
            background-color: whitesmoke;
        }

        .table td, .table th {
            padding: .75rem;
            vertical-align: top;
            border-top:10px solid #dee2e6
        }
    </style>
</head>
<body>
<div class="row virsus">
    <div class="col"></div>

    <div class="col"></div>
</div>
<div class="row" >
    <div class="col vidurys"></div>
    <div class="col  spalva">
        <form id="form">
            <div class="mt-3 input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tema</span>
                </div>
                <input type="text" id="tema" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="row">
                <div class="ml-3 form-group">
                    <select class="mb-3 form-control" id="priority">
                        <option value="" disabled selected>Prioritetas</option>
                        <option>Aukštas</option>
                        <option>Vidutinis</option>
                        <option>Žemas</option>
                    </select>
                </div>

                <div class=" col input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                    </div>
                    <input type="date" class="form-control" id="data" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row">
                <div class="col"> </div>
                <h4 class="  col-11 ml-3 mt-2 input-group-text" >Atlikta %</h4>
                <div class="col"> </div>
                <div class="mt-3 ml-4 slidecontainer">
                    <input type="range" min="1" max="100" value="0" class="slider" id="myRange">
                </div>

                <div class="col"></div>
                <button type="button" id="prideti" class="mr-3 btn btn-outline-light ">Pridėti</button>

            </div>
        </form>



        <div class="row">
            <table class="table mt-3 ml-3 mr-3 col">
                <thead class="thead-light rounded ">
                <tr>
                    <th scope="col" class="text-center"><span class="input-group-text">√</span></th>
                    <th scope="col" class="text-center"><span class="input-group-text">Tema</span></th>
                    <th scope="col" class="text-center"><span class="input-group-text">Prioritetas</span></th>

                    <th scope="col" class="text-center"><span class="input-group-text">Data</span></th>
                    <th scope="col" class="text-center"><span class="input-group-text">Atlikta %</span></th>
                    <th scope="col" class="text-center"><span class="input-group-text">  X</span></th>
                </tr>
                </thead>
                <tbody id="tableBody">
                </tbody>
            </table>
        </div>



    </div>


    <div class="col vidurys"></div>
</div>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>