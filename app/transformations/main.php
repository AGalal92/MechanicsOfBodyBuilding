
<script>
    function LoadDataForUpdate(id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("loadDateUpdate").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("POST", "./include/main_input_view.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);

    }
</script>

<div class="taple-content" id="loadDateUpdate">
    <?php include './include/main_input_view.php'; ?>
</div><br>
<div class="taple-content">
    <div class="row">
        <?php
        $count = 0;
        $sql = "SELECT * FROM `transformations`";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-sm-3" style="margin-top: 50px">
                    <div onclick="LoadDataForUpdate(<?php echo $row['id'] ?>)" class="card-container" style="width: 250px;height: 250px">
                        <img src="<?php echo str_replace("../", "", $row['image']) ?>" style="width: 250px">
                    </div>
                </div>
                <?php
            }
        } else {
            echo 'لايوجد بيانات';
        }
        ?>

    </div>
</div>