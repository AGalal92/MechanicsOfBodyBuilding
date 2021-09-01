<?php
if (isset($_POST['id'])) {
    session_start();
    include '../../../database_security/database/database_configuration.php';
    include '../../../database_security/security/security.php';
    $sql = "SELECT * FROM `employee` where `id`='$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $rowData = mysqli_fetch_assoc($result);
    }
    echo '<style> .flag-add{display:none}</style>';
} else {
    echo '<style> .flag-update,.flag-delete{display:none}</style>';
}
?>
<form  action="controller/employeeController.php" method="post" onsubmit="return ConfirmDelete(this.submited);" enctype="multipart/form-data">
    <div class="row taple-content-form">

        <div class="col-sm-3">
            <div class="form-group">
                <label> اسم  الموظف</label>
                <input autocomplete="off" required="" class="form-control" value="<?php echo @$rowData['name'] ?>"   type="text"  placeholder="ادخل اسم الموظف" name="name">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>رقم الموبيل </label>
                <input autocomplete="off"   class="form-control" value="<?php echo @$rowData['tel'] ?>" type="text" placeholder="ادخل رقم الموبيل" name="tel1">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>العنوان </label>
                <input autocomplete="off"    class="form-control" value="<?php echo @$rowData['address'] ?>" type="text" placeholder="ادخل العنوان" name="address">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>الراتب الاساسى </label>
                <input autocomplete="off"    class="form-control" value="<?php echo @$rowData['salary'] ?>" type="text" placeholder="ادخل الراتب الاساسى" name="salary">
            </div>
        </div>      
        <div class="col-sm-2">
            <div class="form-group">
                <label class=" ">رقم التامين  </label>
                <input autocomplete="off"    class="form-control" value="<?php echo @$rowData['insurance_number'] ?>" type="text" placeholder="ادخل رقم التامين" name="insurance_number">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>صورة التامين </label>
                <input type="file" style="width: 100%" class="data"  id="fileToUpload"  name="fileToUpload2[]"   accept="image/*">
            </div>
        </div>
        <?php if (isset($rowData['insurance_url']) && $rowData['insurance_url'] != "") { ?>
            <div id="attachment_1" class="col-sm-3">
                <div class="form-group">
                    <input value="<?php echo @$rowData['insurance_url'] ?>" type="hidden"  name="insurance_url">
                    <div  class="attachment" style="background-image: url(<?php echo str_replace("../", "", $rowData['insurance_url']) ?>);">
                        <a class="attachment_delete fas fa-trash-alt" onclick="DeleteAttachment('employee', 'insurance_url', '<?php echo $rowData['id']; ?>', 'attachment_1')" ></a>
                        <a class="attachment_preview fas fa-search-plus" target="_blank"href="<?php echo str_replace("../", "", $rowData['insurance_url']) ?>"></a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="col-sm-3">
            <div class="form-group">
                <label>صورة البطاقة </label>
                <input type="file" style="width: 100%" class="data"  id="fileToUpload"  name="fileToUpload[]"   accept="image/*">
                <input value="<?php echo @$rowData['ID_url'] ?>" type="hidden"  name="ID_url">
            </div>
        </div>
        <?php if (isset($rowData['ID_url']) && $rowData['ID_url'] != "") { ?>
            <div id="attachment_2" class="col-sm-3">
                <div class="form-group">
                    <input value="<?php echo @$rowData['ID_url'] ?>" type="hidden"  name="ID_url">
                    <?php if (isset($rowData['ID_url']) && $rowData['ID_url'] != "") { ?>
                        <div  class="attachment" style="background-image: url(<?php echo str_replace("../", "", $rowData['ID_url']) ?>);">
                            <a class="attachment_delete fas fa-trash-alt" onclick="DeleteAttachment('employee', 'ID_url', '<?php echo $rowData['id']; ?>', 'attachment_2')" ></a>
                            <a class="attachment_preview fas fa-search-plus" target="_blank"href="<?php echo str_replace("../", "", $rowData['ID_url']) ?>"></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>


    </div>
    <div class="row taple-bottom-button">
        <input type="hidden" name="id" value="<?php echo @$rowData['id']; ?>">
        <?php if (!isset($rowData['id'])) { ?>
            <button  style="margin-right: 10px"class="btn btn-info flag-add" type="submit" name="submit" value="add">اضافة</button>
        <?php } ?>
        <button  style="margin-right: 10px"class="btn btn-primary flag-update" type="submit" name="submit" value="update">تعديل</button>
        <button  style="margin-right: 10px" class="btn btn-danger flag-delete" onclick="this.form.submited = this.value;" type="submit" name="submit" value="delete">حذف</button>
        <a  style="margin-right: 10px" href="page.php?page=employee"class="btn btn-dark flag-update"> الغاء</a>
    </div>
</form>