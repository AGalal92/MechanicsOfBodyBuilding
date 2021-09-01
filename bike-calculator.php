<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>BIKE CALORIES CALCULATOR</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- BMI Calculator Section Begin -->
<section class="bmi-calculator-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title chart-calculate-title">
                    <span>check your body</span>
                    <h2>CALCULATE YOUR Calories Burned on BIKE </h2>
                </div>
                <div class="chart-calculate-form">
                    <p>
                        Ever wonder how many calories you burn when riding your bike? The answer is pretty complex, and it depends on what kind of bike you’re riding, what kind of resistance there is, and how fast you’re going. 
                    </p>
                    <form id="myForm" action="index.php?page=send_calu_data" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <input
                                    id="mobb-height"
                                    type="number"
                                    min="1"
                                    required=""
                                    placeholder="Height / cm"
                                    name="height"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <input
                                    id="mobb-weight"
                                    type="number"
                                    min="1"
                                    required=""
                                    step=".1"
                                    placeholder="Weight / kg"
                                    name="weight"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <input
                                    id="mobb-age"
                                    type="number"
                                    min="1"
                                    step=".1"
                                    required=""
                                    placeholder="Age"
                                    name="age"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <input
                                    id="mobb-time"
                                    type="number"
                                    min="1"
                                    required=""
                                    step=".1"
                                    placeholder="Time in Minutes"
                                    name="time"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <label style="color: #fff" > Bike Pace</label>

                                <select name="Pace" required="">
                                    <option value="3.5">8.9 km/hr</option>
                                    <option value="5.8">15.1 km/hr</option>
                                    <option value="6.8">16.1 - 19.2 km/hr</option>
                                    <option value="8">19.3 - 22.4 km /hr</option>
                                    <option value="10">22.5 - 25.7 km /hr</option>
                                    <option value="12">25.7 - 32.1 km /hr</option>
                                    <option value="15.8">More Than 32.2 km /hr</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label style="color: #fff" >  Email</label>
                                <input
                                    required=""
                                    type="email"
                                    placeholder="Enter Email"
                                    name="email"
                                    />
                            </div>
                            <!-- <div class="col-sm-6">
                              <input type="text" placeholder="Body Fat %" />
                            </div> -->
                            <div class="col-lg-3">
                                <input type="hidden" value="bike_cal" name="cal_name" >
                                <button type="submit" class="primary-btn customBtn" >Calculate</button>
                            </div>
                        </div>
                    </form>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Result</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="leave-comment">
                                            <h3>YOU BURN</h3> 
                                            <h3 style="font-size: 30px; color: #f36100;">Result= <?php echo $_GET['result'] ?> kcal</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (isset($_GET["result"])) { ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myModal').modal('show');
        });
    </script>
<?php } ?>