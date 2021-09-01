<?php
$sql = "SELECT * FROM `tips` ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $rowData = mysqli_fetch_assoc($result);
}
?>
<div class="taple-title">
    <span class="taple-name">Tips & Guides</span>
</div>

<div class="taple-content printHide">
    <a class="btn btn-info" href="page.php?page=tips_input">Add new</a>

    <div class="row">
        <div class="col-sm-12">
            <div class="dropdown-divider"></div>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th> #</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th><i class="fas fa-edit"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $c = 0;
                    $sql = "SELECT * FROM `tips`";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr class="taple-data">
                                <td><?php echo ++$c; ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['details'] ?></td>
                                <td>
                                    <form   action="controller/mainController.php"  onsubmit="return ConfirmDelete(this.submited);" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                                        <button  class="btn btn-danger"  onclick="this.form.submited = this.value;" type="submit" name="submit" value="delete">delete</button>
                                        <a class="btn btn-info" href="page.php?page=tips_input&id=<?php echo $row['id'] ?>">Update</a>
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