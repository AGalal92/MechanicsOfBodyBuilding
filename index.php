<!DOCTYPE html>
<html lang="en" style="background-color: #000">
    <head>

        <!-- Header Begin -->
        <?php
        $page = "home";
        $pageLink = "./home.php";
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $pageLink = "./" . $page . ".php";
        }
        include './database_security/database/database_configuration.php';
        include './include/header.php';
        ?>
        <!-- Header End -->

        <!--  Section Begin -->
        <?php include $pageLink; ?>
        <!--  Section End -->

        <!-- Footer Section Begin -->
        <?php include './include/footer.php'; ?>
        <!-- Footer Section end -->
    </body>
    
</html>
