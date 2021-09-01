<?php
$id = @$_GET['id'];
$sql = "SELECT * FROM `tips` where `id`='$id' ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $rowData = mysqli_fetch_assoc($result);
}
?>
<div class="taple-title">
    <span class="taple-name">Tips & Guides</span>
</div>
<div class="taple-content" id="loadDateUpdate">
    <form  action="controller/mainController.php" onsubmit="return ConfirmDelete(this.submited);" method="post">
        <div class="row taple-content-form">
            <div class="col-sm-4">
                <div class="form-group">
                    <label> Title </label>
                    <textarea  class="form-control" name="title"><?php echo @$rowData['title'] ?></textarea> 
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label> Details </label>
                    <textarea  class="form-control" name="sub_title"><?php echo @$rowData['details'] ?></textarea> 
                </div>
            </div>

        </div>
        <div class="row taple-bottom-button">
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <button  style="margin-right: 10px"class="btn btn-info flag-add" type="submit" name="submit" value="<?php echo!isset($id) ? "save" : "update" ?>">Save</button>
        </div>
    </form>
</div><br>