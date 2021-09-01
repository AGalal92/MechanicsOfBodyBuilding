<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="index.php"><img class="logo-img" src="img/logo.png" alt=""/></a>
                    </div>
                    <p> 
                        Mechanics Of BodyBuilding is Created in 2016 and Published in 2020.
                    </p>
                    <div class="fa-social">
                        <a target="_blank" href="https://www.facebook.com/MechanicsOfBodybuilding"
                           ><i class="fa fa-facebook"></i
                            ></a>
                        <a target="_blank"
                           href="https://www.youtube.com/MechanicsOfBodybuilding?fbclid=IwAR2Ezg-cxcK7CvY6T0maTCbVSIj9m5abozJXc1fMTY74y0r7FmHAusKZlkA"
                           ><i class="fa fa-youtube-play"></i
                            ></a>
                        <a  target="_blank"
                            href="https://www.instagram.com/MechanicsOfBodybuilding"
                            ><i class="fa fa-instagram"></i
                            ></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="./index.php?page=about-us">About</a></li>
                        <li><a href="./index.php?page=bmi-calculator">Calculators</a></li>
                        <li><a href="./index.php?page=articles">Articles</a></li>
                        <li><a href="./index.php?page=faqs">FAQs</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="./index.php?page=services">Subscribe</a></li>
                        <!-- <li><a href="./contact.php">Contact</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fs-widget">
                    <h4>Tips & Guides</h4>
                    <?php
                    $sql = "SELECT * FROM `tips`";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="fw-recent">
                                <h6>
                                    <h5 style="color: #fff"><?php echo $row['title'] ?></h5>
                                    <p><?php echo $row['details'] ?></p>
                                </h6>
                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Proudly made with
                        <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="#" target="_blank">PORTAL</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->

<!-- Js Plugins -->

<script src="js/main.js"></script>
<?php if (isset($_GET['mail'])) { ?>
    <script type="text/javascript">
                            $(document).ready(function () {
                                $('#myModalMail').modal('show');
                            });
    </script>
<?php } ?>
<script>
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp)
                startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

</script>
<script>
    /* $(document).ready(function () {
     var footer = $("#transform");
     var f_top = footer.position().top;
     $(window).scroll(function () {
     
     if ($(window).scrollTop() - $(window).height() <= f_top) {
     const obj = document.getElementById("transform");
     animateValue(obj, 0, 300, 5000);
     const obj2 = document.getElementById("programs_created");
     animateValue(obj2, 0, 500, 5000);
     } else {
     
     }
     });
     });*/
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function () {

            $(this).addClass('transition');
        }, function () {

            $(this).removeClass('transition');
        });
    });

</script>

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 100000,
        autoplay: true,
        autoplayTimeout: 10000000,
        autoplayHoverPause: true
    });
    owl.trigger('play.owl.autoplay', [8000])

</script>
