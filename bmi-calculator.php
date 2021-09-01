

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg set_bg_custom" data-setbg="img/mobb-top.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>BMR and TDEE calculator</h2>
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
            <div class="col-lg-6">
                <div class="section-title chart-title">
                    <span>check your body</span>
                    <h2>BMI CHART</h2>
                </div>
                <div class="chart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Bmi</th>
                                <th>WEIGHT STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="point">Below 18.5</td>
                                <td>Underweight</td>
                            </tr>
                            <tr>
                                <td class="point">18.5 - 24.9</td>
                                <td>Healthy</td>
                            </tr>
                            <tr>
                                <td class="point">25.0 - 29.9</td>
                                <td>Overweight</td>
                            </tr>
                            <tr>
                                <td class="point">30.0 - and Above</td>
                                <td>Obese</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title chart-calculate-title">
                    <span>check your body</span>
                    <h2>CALCULATE YOUR BMR and TDEE</h2>
                </div>
                <div class="chart-calculate-form">
                    <p>
                        The Basal Metabolic Rate (BMR) Calculator estimates your basal
                        metabolic rate—the amount of energy expended while at rest in a
                        neutrally temperate environment, and in a post-absorptive state
                        (meaning that the digestive system is inactive, which requires
                        about 12 hours of fasting).
                    </p>
                    <form id="myForm" action="index.php?page=send_calu_data" method="post">
                        <div class="row">
                            <div class="col-sm-6" >
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
                                    step=".1"
                                    min="1"
                                    placeholder="Weight / kg"
                                    name="weight"
                                    />
                            </div>
                            <div class="col-sm-6">
                                <label style="color: #fff" >Age</label>

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
                                <label style="color: #fff" >Gender</label>
                                <select name="sex" id="sex" required="" >
                                    <option></option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label style="color: #fff" >Activity</label>
                                <select name="activity"   required="" >
                                    <option></option>
                                    <option value="0">Sedentary</option>
                                    <option value="1">Light Exercise</option>
                                    <option value="2">Moderate</option>
                                    <option value="3">heavy Exercise</option>
                                    <option value="4">Exercise Twice a day</option>
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
                            <!--<div class="col-sm-6">
                                <input type="text" placeholder="Body Fat %" />
                                    </div>-->
                            <div class="col-lg-12">
                                <input type="hidden" value="bmr_cal" name="cal_name" >
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
                                            <h3 style="font-size: 30px; color: #f36100;">BMR= <?php echo $_GET['result'] ?> kcal</h3>
                                            <h3 style="font-size: 30px; color: #f36100;">TDEE= <?php echo $_GET['result2'] ?> kcal</h3>
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
<!-- BMI Calculator Section End -->


