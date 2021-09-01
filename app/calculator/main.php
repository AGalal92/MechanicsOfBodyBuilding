
<div class="taple-title">
    <span class="taple-name">Email</span>
</div>

<div class="taple-content printHide">
    <div class="row">
        <div class="col-sm-12">
            <div class="dropdown-divider"></div>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th> #</th>
                        <th>Email</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $c = 0;
                    $sql = "SELECT * FROM `cal_mail`";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr class="taple-data">
                                <td><?php echo ++$c; ?></td>
                                <td><?php echo $row['mail'] ?></td>
                                 <td>
                                    <form   action="controller/mainController.php"  onsubmit="return ConfirmDelete(this.submited);" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                                        <button  class="btn btn-danger"  onclick="this.form.submited = this.value;" type="submit" name="submit" value="delete">delete</button>
                                     </form>

                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
            </table>>
        </div> 

    </div>                
</div>