     <?php
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $Pace = $_POST['Pace'];
    $result= (int)((($Pace*3.5*91)/200)*$time); 
    echo "<script> window.location.href='index.php?page=" . $page_cal . "&result=" . $result . "' </script>";
