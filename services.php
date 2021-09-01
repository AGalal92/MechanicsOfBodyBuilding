
<style>
    #btn_payByCredit{
        font-size: 12px;
        margin-top: 10px;
        background-color: #181818;
    }
    #btn_payByWallet{
        font-size: 12px;
        margin-top: 10px

    }
</style>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Services</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<section class="choseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Why choose us?</span>

                    <h2>
                        PUSH YOUR LIMITS, TRANSFORM YOUR BODY, AND CHANGE YOUR LIFE
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-002-dumbell"></span>
                    <h4>Professional Training Plan</h4>
                    <p>
                        According to your body type, your fitness level, and muscular
                        endurance, Coach Mustafa will design a workout plan according
                        taking into consideration your body unique biomechanics.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-033-juice"></span>
                    <h4>Healthy Nutrition Plan</h4>
                    <p>
                        7 different nutrition plans perfectly designed by Coach Mustafa
                        that will suit your daily life and fitness goals.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-014-heart-beat"></span>
                    <h4>Daily Habits</h4>
                    <p>
                        We will not only change your perception towards fitness and
                        health, we aim to change your lifestyle and seed healthy daily
                        habits in you so that you can continue the rest of your life in
                        a healthy manner.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Pricing Section Begin -->
<section class="pricing-section service-pricing spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>Nutrition Plan </h3>
                    <h3>(3 Months)</h3>
                    <div class="pi-price">
                        <h2>EGP 2000</h2>
                        <!-- <span>Nutrition Plan</span> -->
                    </div>
                    <ul>
                        <li>Perfectly calculated plan in terms of calories</li>
                        <li>
                            micro, and macronutrients.<br> Considering your medical history and
                            food allergies.
                        </li>
                        <li>
                            Meal timing will be from your own choice according to your own
                            schedule.<br>
                        </li>
                        <li>
                            The plan is designed for your goal whether it was muscle gain
                            or fat loss,or even both!
                        </li>

                    </ul>
                    <a href="#" class="primary-btn pricing-btn"  data-toggle="modal" data-target="#myModalNutrition1">Enroll now</a>
                </div>
            </div>
            <div class="modal fade" id="myModalNutrition1" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Nutrition Plan</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12">
                                <div class="leave-comment">
                                    <form  action="paymentMethod.php" method="post">
                                        <input type="hidden" name="amount" value="2000" />
                                        <div class="row">
                                            <div class="col-lg-6">     
                                                <input type="text" required="" name="fname" placeholder="First Name" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" required="" name="lname" placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <input type="email" required=""  name="email" placeholder="Email" />
                                        <input type="tel"  required="" name="tel" placeholder="Mobile" />
                                        <span><strong>Pay by:</strong></span><br>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <button id="btn_payByCredit" type="submit" name="submit" value="card">Credit/Debit Card</button>
                                            </div>
                                            <div class="col-lg-7">
                                                <button id="btn_payByWallet" type="submit" name="submit" value="wallet">Mobile Wallet (Vodafone Cash)</button>
                                            </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>Training Plan</h3>
                    <h3>(3 Months)</h3>
                    <div class="pi-price">
                        <h2>EGP 2000</h2>
                        <!-- <span>SINGLE CLASS</span> -->
                    </div>
                    <ul>
                        <li>
                            Perfectly designed training plan for your body type, genetics,
                            and bone structure.<br>
                        </li>
                        <li>
                            Emphasis on strengthening your weak points, and enhancing your
                            strong points.<br>
                        </li>
                        <li>Increase your muscle size, endurance, and performance.</li>
                        <li>
                            Whether you were a gym goer, football player, or even a tennis
                            player.
                        </li>
                        <li>
                            Customized and detailed program with mentioning how to perform
                            each workout.
                        </li>
                        <li>
                            With sets, reps, rest period, tempo, and RPE through our
                            custom-made mobile application!
                        </li>

                    </ul>
                    <a href="#" class="primary-btn pricing-btn" data-toggle="modal" data-target="#myModalTraining">Enroll now</a>
                </div>
            </div>
            <div class="modal fade" id="myModalTraining" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Training Plan</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12">
                                <div class="leave-comment">
                                    <form  action="paymentMethod.php" method="post">
                                        <input type="hidden" name="amount" value="2000" />
                                        <div class="row">
                                            <div class="col-lg-6">     
                                                <input type="text" required="" name="fname" placeholder="First Name" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" required="" name="lname" placeholder="Last Name" />
                                            </div>
                                        </div>                                        <input type="email" required=""  name="email" placeholder="Email" />
                                        <input type="tel"  required="" name="tel" placeholder="Mobile" />
                                        <span><strong>Pay by:</strong></span><br>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <button id="btn_payByCredit" type="submit" name="submit" value="card">Credit/Debit Card</button>
                                            </div>
                                            <div class="col-lg-7">
                                                <button id="btn_payByWallet" type="submit" name="submit" value="wallet">Mobile Wallet (Vodafone Cash)</button>
                                            </div>
                                        </div>    
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>Training + Nutrition Plan</h3>
                    <h3>(3 Months)</h3>
                    <div class="pi-price">
                        <h2>EGP 2500</h2>
                        <!-- <span>SINGLE CLASS</span> -->
                    </div>
                    <ul>
                        <li>Everything mentioned in the previous two plans.</li>
                        <li>This is considered the best option for you</li>
                        <li>
                            As it combines the best of both worlds to achieve the best
                            result!
                        </li>

                        <!-- <li>Month to mouth</li>
                        <li>No time restriction</li> -->
                    </ul>
                    <a href="#" class="primary-btn pricing-btn"  data-toggle="modal" data-target="#myModalNutrition">Enroll now</a>

                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModalNutrition" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Training + Nutrition Plan</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12">
                                <div class="leave-comment">
                                    <form  action="paymentMethod.php" method="post">
                                        <input type="hidden" name="amount" value="2500" />
                                        <div class="row">
                                            <div class="col-lg-6">     
                                                <input type="text" required="" name="fname" placeholder="First Name" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" required="" name="lname" placeholder="Last Name" />
                                            </div>
                                        </div>                                        <input type="email" required=""  name="email" placeholder="Email" />
                                        <input type="tel"  required="" name="tel" placeholder="Mobile" />
                                        <span><strong>Pay by:</strong></span><br>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <button id="btn_payByCredit" type="submit" name="submit" value="card">Credit/Debit Card</button>
                                            </div>
                                            <div class="col-lg-7">
                                                <button id="btn_payByWallet" type="submit" name="submit" value="wallet">Mobile Wallet (Vodafone Cash)</button>
                                            </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 col-md-12">

                <h6 style="text-align: center;font-size: 16px;color: #fff"> Got questions? Visit <a href="index.php?page=faqs">FAQs</a> </h6>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<section
    class="banner-section set-bg"
    data-setbg="img/banner-bg.jpg"
    style="background-image: url('img/banner-bg.jpg')"
    >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <h2>Book an appointment</h2>
                    <div class="bt-tips">
                        Have a 30 minutes zoom meeting with Coach Mustafa to ask about ANYTHING you
                        want Whether it was about nutrition, exercises, supplements, or
                        even roids You have non limited questions to ask.
                    </div>
                    <button class="primary-btn btn-normal" data-toggle="modal" data-target="#myModal">Appointment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create Appointment</h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="leave-comment">
                            <form action="send_appointment.php" method="post" >
                                <input type="hidden" name="amount" value="200" />
                                <div class="row">
                                    <div class="col-lg-6">     
                                        <input type="text" required="" name="fname" placeholder="First Name" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" required="" name="lname" placeholder="Last Name" />
                                    </div>
                                </div>

                                <input type="email" required=""  name="email" placeholder="Email" />
                                <input type="tel"  required="" name="tel" placeholder="Mobile" />
                                <label> Date</label>
                                <input type="date"  required="" name="date"  />
                                <div class="row">
                                    <div class="col-lg-6" style="">
                                        <label> Hour</label>
                                        <select  required="" name="hour" style="width: 100%;height: 30px;padding: 5px">
                                            <option ></option>
                                            <?php
                                            for ($i = 1; $i <= 12; $i++) {
                                                ?>
                                                <option value="<?php echo $i. "AM" ?>"><?php echo $i . " AM" ?></option>
                                                <?php
                                            }for ($i = 1; $i <= 12; $i++) {
                                                ?>
                                                <option value="<?php echo $i . "PM" ?>"><?php echo $i . " PM" ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label> Minutes</label>
                                        <select  required="" name="minutes" style="width: 100%;height: 30px;padding: 5px">
                                            <option ></option>
                                            <?php
                                            for ($i = 1; $i <= 60; $i++) {
                                                ?>
                                                <option value="<?php echo $i ?>"><?php echo $i ?></option>

                                            <?php } ?>
                                        </select>                                    </div>
                                </div>

                                <span><strong>Pay by:</strong></span><br>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <button id="btn_payByCredit" type="submit" name="submit" value="card">Credit/Debit Card</button>
                                    </div>
                                    <div class="col-lg-7">
                                        <button id="btn_payByWallet" type="submit" name="submit" value="wallet">Mobile Wallet (Vodafone Cash)</button>
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="modal fade" id="myModalService" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="leave-comment">
                        <h3 style="font-size: 18px; color: #000;">
                            <?php
                            if (isset($_GET['s']) && $_GET['s'] == 1) {
                                echo 'Your message Successfully sent Administration will contact with you by (Email or Mobile)';
                            }
                            if (isset($_GET['success']) && $_GET['success'] == "true") {
                                $amount = $_GET['amount_cents'] / 100;
                                echo 'Transaction has been completed successfully Amount(' . $amount . ' EGP) Administration will contact with you by (Email or Mobile)';
                                include './database_security/database/database_configuration.php';
                                include './mail_payment_suc.php';
                            } elseif (isset($_GET['success']) && $_GET['success'] == "false" && $_GET['source_data_sub_type'] == "wallet") {
                                echo 'Transaction Failed Note: For mobile wallet payments, you must provide a phone number with active wallet.';
                            } elseif (isset($_GET['success']) && $_GET['success'] == "false") {
                                echo 'Transaction Failed Check your Card.';
                            }
                            ?>           
                        </h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

</div>
<?php
if ((isset($_GET['s']) && $_GET['s'] == 1) ||
        (isset($_GET['success']) && $_GET['success'] == "true") ||
        (isset($_GET['success']) && $_GET['success'] == "false" && $_GET['source_data_sub_type'] == "wallet") ||
        (isset($_GET['success']) && $_GET['success'] == "false")) {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myModalService').modal('show');
        });
    </script>
<?php }
?>