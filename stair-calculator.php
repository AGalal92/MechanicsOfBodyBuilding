
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Stairmaster CALORIES CALCULATOR</h2>
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
                    <h2>CALCULATE YOUR Calories Burned on Stairmaster</h2>
                </div>
                <div class="chart-calculate-form">
                    <p>
                        In simple terms, a StairMaster is a stationary fitness machine that rotates steps, similar to a treadmill, allowing the user to climb upward at the speed and duration he or she sets. It can provide an above-average cardio workout, while also toning lower-body muscles, especially the
                        (quadriceps-
                        hamstrings-
                        calves and
                        glutes)
                    </p>
                    <form id="myForm" action="index.php?page=send_calu_data" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <input

                                    required=""
                                    id="mobb-height"
                                    type="number"
                                    min="1"
                                    step=".1"
                                    placeholder="Height / cm"
                                    name="height"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <input
                                    required=""
                                    id="mobb-weight"
                                    type="number"
                                    min="1"
                                    step=".1"
                                    placeholder="Weight / kg"
                                    name="weight"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <input
                                    required=""
                                    id="mobb-age"
                                    type="number"
                                    min="1"
                                    step=".1"
                                    placeholder="Age"
                                    name="age"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <input
                                    required=""
                                    id="mobb-time"
                                    type="number"
                                    min="1"
                                    step=".1"
                                    placeholder="Time in Minutes"
                                    name="time"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <label style="color: #fff" >Stair Master Pace</label>
                                <select name="Pace" required="">
                                    <option value="4.5">Slow Pace</option>
                                    <option value="7">Moderate Pace</option>
                                    <option value="10">Fast Pace</option>
                                    <option value="15">Running</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label style="color: #fff" >Email</label>

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
                                <input type="hidden" value="stair_cal" name="cal_name" >
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