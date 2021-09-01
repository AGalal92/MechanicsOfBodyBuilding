
<?php
$sql = "SELECT * FROM `articles` where `id`='$_GET[id]'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg" style="padding-top: 190px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2><?php echo $row['title'] ?></h2>
                        <div style="color: #eaeaea">
                            <span>by  <?php echo $row['by']; ?></span><br>
                            <span><?php echo $row['date']; ?> </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section style="width: 100%;background-color: #eee!important;padding: 20px;padding-top: 30px">
        <div style="color: #fff !important">
            <?php echo $row['details'] ?>
        </div>
    </section>

<?php } else { ?>
    <section class="breadcrumb-section set-bg" data-setbg="img/mobb-top.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">

                        <h2>Not found</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>