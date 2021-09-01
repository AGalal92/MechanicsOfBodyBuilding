<?php
session_start();
session_destroy();
include '../../database_security/database/database_configuration.php';
$error = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = test_input($_POST["user"]);
    $pass = test_input($_POST["pass"]);
    $sql = "SELECT * FROM `login_info` where `username`='" . $user . "' and `pass`='" . $pass . "'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        ini_set('session.cookie_httponly', true);
        session_start();
        $_SESSION["val"] = $_SERVER['REMOTE_ADDR'];
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
         echo "<script> window.location.href='../main/index.php' </script>";
        mysqli_close($conn);
    } else {
        $error = 1;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>
    <head>
        <title>login</title> 
        <!-- icon title -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
        <link rel="stylesheet" href="../assets/css/style_login.css"/>
    </head>
    <body>
        <div class="container">
            <center class="contain_form">
                <h1 style=" margin-top: 20px;width: 160px;color: #fff;font-size: 30px;text-align: center">Login  </h1>
                <form style="margin-top: 20px" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
                    <input required="" type="text" name="user"  placeholder="Enter Username"/>
                    <input  required="" type="password" name="pass"  placeholder="Enter Password"/>
                    <input class="button" type="submit" value="Login" /><br><br>
                </form>
                <?php
                if ($error) {
                    echo '<h3 style="color: #cc0000; display: inline"" > Error Enter Correct Data</h3> ';
                }
                ?> 
            </center>
        </div>
    </body>
</html>