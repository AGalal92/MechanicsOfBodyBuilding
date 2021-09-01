
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Transformations</h2>
                    <h5 style="color: #fff">For more transformations, please click <a target="blank" href="https://www.instagram.com/MechanicsOfBodybuilding/">here</a></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<div style="clear: both"></div>

<!-- Gallery Section Begin -->
<div class="row" style="margin: 0px; background-color: #000;padding: 20px">

    <?php
    $sql = "SELECT * FROM `transformations`";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="app/transformations/<?php echo $row['image'] ?>" class="fancybox" rel="ligthbox">
                    <img  src="app/transformations/<?php echo $row['image'] ?>" class="zoom img-fluid "  alt="">
                </a>
            </div>
           

            <?php
        }
    }
    ?>


</div>
<div style="clear: both"></div>
<!-- Gallery Section End -->
