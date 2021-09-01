<?php
$sql = "SELECT * FROM `articles` ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $rowData = mysqli_fetch_assoc($result);
}
?>
<div class="taple-title">
    <span class="taple-name">Articles</span>
</div>

<div class="taple-content printHide">
    <a class="btn btn-info" href="page.php?page=articles_input">Add new</a>

    <div class="row">
        <div class="col-sm-12">
            <div class="dropdown-divider"></div>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th> #</th>
                        <th>Title</th>
                         <th>By</th>
                         <th>Date</th>
                        <th><i class="fas fa-edit"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $c = 0;
                    $sql = "SELECT * FROM `articles`";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr style="height: 10px" class="taple-data">
                                <td><?php echo ++$c; ?></td>
                                <td style="width: 30%;"> 
                                    <div style="height: 50px; overflow:hidden;">
                                        <?php echo $row['title'] ?>
                                    </div>
                                </td>
                               
                                <td><?php echo $row['by'] ?></td>
                                <td><?php echo $row['date'] ?></td>
                                <td>
                                    <form   action="controller/mainController.php"  onsubmit="return ConfirmDelete(this.submited);" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                                        <button  class="btn btn-danger"  onclick="this.form.submited = this.value;" type="submit" name="submit" value="delete">delete</button>
                                        <a class="btn btn-info" href="page.php?page=articles_input&id=<?php echo $row['id'] ?>">Update</a>
                                    </form>

                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
            </table>
        </div> 

    </div>                
</div>