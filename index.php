<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, Sanah!</title>
  </head>

  <body>
    <div class="container">
        <div class="row header">
          <h1>APLIKASI-QUH</h1>
    </div>
        <div class="row main">
            <div class="col-4 sidebar" style="background-color:pink;">
                SIDEBAR
            </div>
        <div class="col-8 content" style="background-color:white;">
            <?php

                define("IS_INDEX", true);  //variabel konstan hanya sekali
                //regustnya apa dulu, disini pake get dan variabel nya variabel page
                 if(isset($_GET['page']))
                 {
                  $page = $_GET['page'];
                 }
                   else
                 {
                   $page = "beranda";
                 }
                  require_once("aplikasi.php"); //harus diatas page supaya tidak error
                  require_once($page.".php"); //guna untuk menuju ke file php yang ada
             ?>
         </div>
        </div>
    </div clas="row">
        <div class="col">Copyright @2019</div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>