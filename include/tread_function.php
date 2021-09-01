    <?php
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $grade = $_POST['grade'];
    $time = $_POST['time'];
    $tread_spead = $_POST['tread'];
    $result= (int)((((((($tread_spead * 0.621371 * 26.8) * 0.1) + (($tread_spead * 0.621371 * 26.8) * 1.8 * ($grade / 100)) + 3.5) / 3.5) * 3.5 * $weight) / 200) * $time);
 
echo "<script> window.location.href='index.php?page=".$page_cal."&result=".$result."' </script>";
