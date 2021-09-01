<?php
if (isset($_POST['id'])) {
    session_start();
    include '../../../database_security/database/database_configuration.php';
    include '../../../database_security/security/security.php';
    $sql = "SELECT * FROM `transformations` where `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $rowData = mysqli_fetch_assoc($result);
    }
    echo '<style> .flag-add{display:none}</style>';
} else {
    echo '<style> .flag-update,.flag-delete{display:none}</style>';
}
?>
<style>
    .categorey_branch{
        border-radius: 15px;
        width: 78%;
        float: right
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <form  action="controller/mainController.php" onsubmit="return ConfirmDelete(this.submited);" method="post" enctype="multipart/form-data">
            <div class="row taple-content-form">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file"  class="data"  id="fileToUpload"  name="fileToUpload[]"   accept="image/*">
                    </div>
                </div>
                <?php
                if (isset($rowData['image']) && $rowData['image'] != "") {
                    $url = $rowData['image'];
                    ?>
                    <div class="col-sm-3" id="attachment_1">
                        <div class="form-group">
                            <input value="<?php echo $url ?>" type="hidden"  name="image">
                            <div  class="attachment" >
                                 <a class="attachment_preview fas fa-search-plus" target="_blank" href="<?php echo $url ?>"></a>
                                <img src="<?php echo $url ?>" style="width: 80px">
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
            <div class="row taple-content-form">
                <div style="margin-top: 10px">
                    <input type="hidden" name="id" value="<?php echo @$rowData['id']; ?>">
                    <?php if (!isset($rowData['id'])) { ?>
                        <button  style="margin-right: 10px"class="btn btn-info flag-add" type="submit" name="submit" value="add">Add</button>
                    <?php } ?>
                    <button  style="margin-right: 10px"class="btn btn-primary flag-update" type="submit" name="submit" value="update">Save update</button>
                    <button  style="margin-right: 10px" class="btn btn-danger flag-delete" onclick="this.form.submited = this.value;" type="submit" name="submit" value="delete">Delete</button>
                    <a  style="margin-right: 10px" href="page.php?page=main"class="btn btn-dark flag-update">Cancel</a>
                </div>
            </div><br>
        </form>
    </div>  

</div>
