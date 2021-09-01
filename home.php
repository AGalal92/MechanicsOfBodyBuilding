
<section class="hero-section">
    <div id="intro" class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/slide.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-16 " style="float: right;">
                        <div class="hi-text" >
                            <span>Shape your body</span>
                            <h1> Our <strong>Services</strong>?</h1>
                            <a href="./index.php?page=services" class="primary-btn customBtn">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero/slide02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 " style="float: right;">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Got <strong>Questions</strong>? </h1>
                            <a href="./index.php?page=faqs" class="primary-btn customBtn">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero/slide03.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 " style="float: right;">
                        <div class="hi-text">
                            <span>Shape your body</span>

                            <h1> How many <strong>calories</strong> does your body burn?</h1>
                            <a href="./index.php?page=bmi-calculator" class="primary-btn customBtn">Calculate your BMR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="img/hero/slide04.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 " style="float: right;">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1> What is <strong>MOBB</strong>?</h1>
                            <a href="./index.php?page=about-us" class="primary-btn customBtn">About MOBB</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Story Section Start -->
<section class="aboutus-section" style="background-color: #000">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="about-video set-bg" data-setbg="img/story.jpg">
                    <!-- <a href="#" class="play-btn video-popup"
                       ><i class="fa fa-caret-right"></i
                        ></a> -->
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="about-text">
                    <div class="section-title">
                        <span>My</span>
                        <h2>Story</h2>
                    </div>
                    <div class="at-desc">
                        <p>
                            I am Mustafa Khalaf, a certified fitness trainer, a specialist in sports nutrition, and a fitness instructor in Gold’s Gym Egypt. I graduated from faculty of engineering and since I was in college, I wanted to combine my hobby with my profession and that’s how Mechanics of Bodybuilding was established in 2016. The name itself does not solely imply that I am an engineer, but it means that I use what I had learned in engineering and implement it in the fitness and bodybuilding fields in terms of thermodynamics (how the body reacts to energy balance) and biomechanics (the effect of certain motions on certain muscles and joints). 
                            At the beginning, MOBB was focused on highlighting the natural fit lifestyle by advocating the classic bodybuilding era, how they trained, ate, and lived. But as the years passed by, I started to merge the classic era of bodybuilding/fitness with the present modern era by shooting YouTube workout, nutrition, and scientific videos since 2016. Then I began implementing my scientific/engineering research into creating workout and nutrition plans that ACTUALLY works until I managed to train more than 500 persons from all over the world in 4 years, starting from a regular gym goer, old men, to competitive athletes in all fields (bodybuilding, football, basketball, tennis, etc..)

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ٍStory Section End -->

<!-- transform Section Begin -->
<section class="transform-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="transform-title">
                    <div class="section-title">
                        <span>Our Clients</span>
                        <h2>Transformations</h2>
                    </div>
                    <a
                        href="./index.php?page=gallery"
                        class="primary-btn btn-normal appoinment-btn"
                        >Explore More</a
                    >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
                <?php
                $sql = "SELECT * FROM `transformations` limit 4";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-lg-10">
                            <div
                                style="height: 300px"
                                class="ts-item set-bg"
                                
                                data-setbg="app/transformations/<?php echo $row['image'] ?>"
                                ></div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- transform Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Testimonial</span>
                    <h2>Our clients say</h2>
                </div>
            </div>
        </div>
        <div class="ts_slider owl-carousel">
            <div class="ts_item">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ti_pic">
                            <img src="img/testimonial/male.png" alt="" />
                        </div>
                        <div class="ti_text">
                            <p>
                                “Thank you for the outstanding customized plan, my weight got out of control in quarantine but as you always say (follow me and watch magic happens) and it really happened.”
                            </p>
                            <h5>Alaa</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts_item">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ti_pic">
                            <img src="img/testimonial/male.png" alt="" />
                        </div>
                        <div class="ti_text">
                            <p>
                                “The program is very detailed with the reps, sets, and even notes for each exercise! It’s really amazing, thank you.”
                            </p>
                            <h5>Ahmed</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts_item">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ti_pic">
                            <img src="img/testimonial/male.png" alt="" />
                        </div>
                        <div class="ti_text">
                            <p>
                                “Your famous quote makes sense every day, Mustafa. As the weeks go by, magic really happens, and my body is transforming!”
                            </p>
                            <h5>Hossam</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts_item">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ti_pic">
                            <img src="img/testimonial/male.png" alt="" />
                        </div>
                        <div class="ti_text">
                            <p>
                                “Without you, I wouldn’t have competed and placed high. I cannot thank you enough for your approach towards science and mental toughness”
                            </p>
                            <h5>Hazem</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts_item">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ti_pic">
                            <img src="img/testimonial/female.png" alt="" />
                        </div>
                        <div class="ti_text">
                            <p>
                                “I am learning from you every day; you have never been late to reply to my questions nor been stingy in your answers. YOU ARE THE BEST!”
                            </p>
                            <h5>Rofail</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts_item">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ti_pic">
                            <img src="img/testimonial/female.png" alt="" />
                        </div>
                        <div class="ti_text">
                            <p>
                                “You have changed my life; you changed the way I think which changed the way I look. You are more than a coach, you are a live changer!”
                            </p>
                            <h5>Salma</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts_item">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ti_pic">
                            <img src="img/testimonial/male.png" alt="" />
                        </div>
                        <div class="ti_text">
                            <p>
                                “I can’t believe that we managed to build muscle by bodyweight training at home without lifting weights, it’s like magic!”
                            </p>
                            <h5>Yasser </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Counter Section Begin -->
<section class="banner-section set-bg counters counterBack" id="counterContainer"data-setbg="img/mobb-test.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                  <!-- <span>lorem</span> -->
                    <h2>What are you waiting for? Transform your body and change your life!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="cs-item">
                    <h2><span>2016</span></h2>
                    <h4>Coaching Since</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="cs-item">
                    <!-- <div style="color: #000000;" class="counter" data-target="9000">0</div> -->
                    <h2 ><span id="programs_created" >500</span></h2>
                    <h4>Programs Created</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="cs-item">
                    <h2 ><span id="transform">300</span></h2>
                    <h4>INSANE Transformations</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
<div class="modal fade" id="myModalMail" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="leave-comment">
                        <h3 style="font-size: 18px; color: #0a941a;">Your message has been successfully sent! We will contact you as soon as possible.</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- Contact Section Begin -->
<?php include './contact_mail.php'; ?>