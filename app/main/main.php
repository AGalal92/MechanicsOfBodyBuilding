<?php
session_start();
include '../../database_security/security/security.php';
include '../../database_security/database/database_configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="header-nav" >
            <div class="row">
                <div class="col-sm-3">
                    <a class="btn btn-warning" href="../login/"><i class="fas fa-sign-out-alt"></i> Logout </a>
                </div>
                <div class="col-sm-8">
                    
                </div>
            </div>
        </div>

        <div class="jumbotron text-center" style="padding-top: 25px;padding-bottom: 25px">
            <h1>mobb </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                
                <div class="col-sm-2">
                    <a href="../tips">
                        <div class="icon-container">
                            <img src="../assets/img/027-server.png">
                            <p>Tips & Guides</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="../articles">
                        <div class="icon-container">
                            <img src="../assets/img/003-add-2.png">
                            <p>Articles</p>
                        </div>
                    </a>
                </div>
                 <div class="col-sm-2">
                    <a href="../transformations">
                        <div class="icon-container">
                            <img src="../assets/img/021-add-13.png">
                            <p>Transformation</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="../calculator">
                        <div class="icon-container">
                            <img src="../assets/img/012-add-9.png">
                            <p>Calculator Email</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="../appointment">
                        <div class="icon-container">
                            <img src="../assets/img/006-add-5.png">
                            <p>Appointment</p>
                        </div>
                    </a>
                </div>
              
                
            </div>
        </div>

    </body>
</html>


