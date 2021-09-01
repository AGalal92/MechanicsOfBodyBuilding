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
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <script>
            function ConfirmDelete(submit_value) {
                if (submit_value === 'delete') {
                    if (!confirm('هل تريد الحذف ؟')) {
                        return false;
                    }
                }
            }
            function DeleteAttachment(taple, row, row_id, element_id) {
                if (confirm('هل تريد الحذف ؟')) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (xhttp.readyState == 4 && xhttp.status == 200) {
                            document.getElementById(element_id).innerHTML = xhttp.responseText;
                        }
                    };
                    xhttp.open("POST", "./delete_attachment.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("taple=" + taple + "&row=" + row + "&row_id=" + row_id);
                }
            }
        </script>
        <script type="text/javascript">
            function PrintDiv() {

                window.print();
            }
        </script>
    </head>
    <body>
        <?php
        include '../include/nav-header.php';
        ?>
        <div class="row">

            <div style="padding-right: 30px"class="col-sm-12">
                <?php
                if (isset($_GET['page'])) {
                    $url = $_GET['page'] . '.php';
                    if (is_file($url)) {
                        include $url;
                    }
                }else{
                    include './main.php';;

                }
                ?>

            </div>
           
        </div>


    </body>
    <script src="../assets/js/datatable_custom.js" ></script>
</html>



