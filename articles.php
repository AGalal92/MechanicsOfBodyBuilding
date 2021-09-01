
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Articles</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Articles Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0">
                <?php
                $t = 0;
                if (isset($_GET['t'])) {
                    $t = $_GET['t'];
                }

                $sql = "SELECT * FROM `articles` limit ".($t*4).",4";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <a href="index.php?page=articls_details&id=<?php echo $row['id'] ?>">
                            <div class="blog-item" style=" border: 1px solid #313131;">
                                <div class="bi-pic">
                                    <img src="app/articles/<?php echo $row['image']; ?>" alt="" />
                                </div>
                                <div class="bi-text">
                                    <h2 style="color: #fff">
                                        <?php echo $row['title']; ?>
                                    </h2>
                                    <ul>
                                        <li>by   <?php echo $row['by']; ?></li>
                                        <li><?php echo $row['date']; ?> </li>
                                    </ul>
                                    <p><?php echo $row['short_description']; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                }
                ?>


                <nav aria-label="...">
                    <ul class="pagination">
                        <?php
                        $sql = "SELECT * FROM `articles` ";
                        $result = mysqli_query($conn, $sql);
                        $count = ($result->num_rows / 4) ;
                        for ($i = 0; $i < $count; $i++) {
                            ?>
                            <li  class="page-item   <?php echo $t == $i ? 'active' : "" ?>" ><a class="page-link" href="index.php?page=articles&t=<?php echo $i ?>"><?php echo $i+1 ?></a></li>
                            <?php } ?>
                    </ul>
                </nav>

            </div>

        </div>
    </div>
</section>
<!-- Articles Section End -->
