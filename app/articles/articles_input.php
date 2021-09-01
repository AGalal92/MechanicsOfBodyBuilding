<?php
$id = @$_GET['id'];
$sql = "SELECT * FROM `articles` where `id`='$id' ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $rowData = mysqli_fetch_assoc($result);
}
?>
<div class="taple-title">
    <span class="taple-name">articles</span>
</div>
<div class="taple-content" id="loadDateUpdate">
    <form  action="controller/mainController.php" onsubmit="return ConfirmDelete(this.submited);" method="post" enctype="multipart/form-data">
        <div class="row taple-content-form">



            <div class="col-sm-4 taple-content-form">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="data"  id="fileToUpload"  name="fileToUpload[]"   accept="image/*">
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
                                <a class="attachment_delete fas fa-trash-alt" style="color: #ad0641" onclick="DeleteAttachment('articles', 'image', '<?php echo $rowData['id']; ?>', 'attachment_1')" href="#" ></a>
                                <a class="attachment_preview fas fa-search-plus" target="_blank" href="<?php echo $url ?>"></a>
                                <img src="<?php echo $url ?>" style="width: 80px">
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                    <label> Add by </label>
                    <input  class="form-control" name="by" value="<?php echo @$rowData['by'] ?>"> 
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label> Date </label>
                    <input  class="form-control" type="date" name="date" value="<?php echo @$rowData['date'] ?>"> 
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label> Title </label>
                    <textarea  class="form-control" name="title"><?php echo @$rowData['title'] ?></textarea> 
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label> Short description </label>
                    <textarea  class="form-control" name="short_description"><?php echo @$rowData['short_description'] ?></textarea> 
                </div>
            </div>
            <div class="col-sm-12" >
                <div class="form-group">
                    <label> Details </label>

                    <textarea id="editor" name="sub_title"><?php echo @$rowData['details'] ?></textarea> 
                </div>
            </div>
        </div>
        <div class="row taple-bottom-button">
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <button  style="margin-right: 10px"class="btn btn-info flag-add" type="submit" name="submit" value="<?php echo!isset($id) ? "save" : "update" ?>">Save</button>
        </div>
    </form>
</div><br>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/b768w8ou5bky13svohpfh3645pjtuxtfstp30nqvhexh15xi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
                                    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

                                    tinymce.init({
                                        selector: 'textarea#editor',
                                        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                                        imagetools_cors_hosts: ['picsum.photos'],
                                        menubar: 'file edit view insert format tools table help',
                                        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                                        toolbar_sticky: true,
                                        autosave_ask_before_unload: true,
                                        autosave_interval: '30s',
                                        autosave_prefix: '{path}{query}-{id}-',
                                        autosave_restore_when_empty: false,
                                        autosave_retention: '2m',
                                        image_advtab: true,
                                        link_list: [
                                            {title: 'My page 1', value: 'https://www.tiny.cloud'},
                                            {title: 'My page 2', value: 'http://www.moxiecode.com'}
                                        ],
                                        image_list: [
                                            {title: 'My page 1', value: 'https://www.tiny.cloud'},
                                            {title: 'My page 2', value: 'http://www.moxiecode.com'}
                                        ],
                                        image_class_list: [
                                            {title: 'None', value: ''},
                                            {title: 'Some class', value: 'class-name'}
                                        ],
                                        importcss_append: true,
                                        file_picker_callback: function (callback, value, meta) {
                                            /* Provide file and text for the link dialog */
                                            if (meta.filetype === 'file') {
                                                callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
                                            }

                                            /* Provide image and alt text for the image dialog */
                                            if (meta.filetype === 'image') {
                                                callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
                                            }

                                            /* Provide alternative source and posted for the media dialog */
                                            if (meta.filetype === 'media') {
                                                callback('movie.mp4', {source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg'});
                                            }
                                        },
                                        templates: [
                                            {title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'},
                                            {title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...'},
                                            {title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'}
                                        ],
                                        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                                        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                                        height: 600,
                                        image_caption: true,
                                        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                                        noneditable_noneditable_class: 'mceNonEditable',
                                        toolbar_mode: 'sliding',
                                        contextmenu: 'link image imagetools table',
                                        skin: useDarkMode ? 'oxide-dark' : 'oxide',
                                        content_css: useDarkMode ? 'dark' : 'default',
                                        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                                    });

</script>