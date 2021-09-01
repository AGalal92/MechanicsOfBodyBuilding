<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Treadmill Calories calculator</h2>
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
                    <h2>CALCULATE YOUR Calories Burned on Treadmill</h2>
                </div>
                <div class="chart-calculate-form">
                    <p>
                        It variously verifies it from the running record of a monotonous treadmill.
                        Please input the gradient, the speed, the running time, the mileage, and weight, etc.
                        Is there a new discovery?
                    </p>
                    <form id="myForm" action="index.php?page=send_calu_data" method="post">
                        <div class="row">
                            <div class="col-sm-4">
                                <label style="color: #fff">Height</label>
                                <input  required=""
                                        id="mobb-height"
                                        type="number"
                                        min="1"
                                        step=".1"
                                        placeholder="Height / cm"
                                        name="height"
                                        />
                            </div>
                            <div class="col-sm-4">
                                <label style="color: #fff">Weight</label>
                                <input required=""
                                       id="mobb-weight"
                                       type="number"
                                       min="1"
                                       step=".1"
                                       placeholder="Weight / kg"
                                       name="weight"
                                       />
                            </div>
                            <div class="col-sm-4">
                                <label style="color: #fff">Age</label>

                                <input id="mobb-age" type="text" placeholder="Age" name="age" />
                            </div>

                            <div class="col-sm-4" >
                                <label style="color: #fff">Grade</label>
                                <input required=""
                                       id="mobb-weight"
                                       type="number"
                                       min="0"
                                       step=".1"
                                       placeholder="grade"
                                       name="grade"
                                       />

                            </div>
                            <div class="col-sm-4">
                                <label style="color: #fff">Speed</label>
                                <input required=""
                                       id="mobb-weight"
                                       type="number"
                                       min="1"
                                       step=".1"
                                       placeholder="Speed"
                                       name="tread"
                                       />
                            </div>
                            <div class="col-sm-4">         
                                <label style="color: #fff">Time</label>
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
                            <div class="col-sm-4">
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
                            <div class="col-lg-3 " style="margin-top: 30px">
                                <input type="hidden" value="tread_cal" name="cal_name" >

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