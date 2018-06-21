<?php
include("class/auth.php");
include("plugin/plugin.php");
$plugin = new cmsPlugin();
$table = "page_data";
?>
<?php
if (isset($_POST['create'])) {
    extract($_POST);
    if (!empty($category_id) && !empty($sub_category_id) && !empty($photo_title)) {
        if (!empty($_FILES['photo']['name'])) {
        include('class/uploadImage_Class.php');
        $imgclassget = new image_class();
        $photo = $imgclassget->upload_fiximage("upload", "photo", "photo_upload_" . $table_name . "_" . time());
        }  else {
            $photo ="";
        }
        $insert = array('category_id' => $category_id, 'sub_category_id' => $sub_category_id, 'photo_title' => $photo_title, 'photo' => $photo, 'photo_type' => $photo_type, 'photo_details' => $photo_details, 'priority' => $priority, 'date' => date('Y-m-d'), 'status' => 1);
        if ($obj->insert($table, $insert) == 1) {
            $plugin->Success("Successfully Saved", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    } else {
        $plugin->Error("Fields is Empty", $obj->filename());
    }
} elseif (isset($_POST['update'])) {
    extract($_POST);
    if (!empty($category_id) && !empty($sub_category_id) && !empty($photo_title) && !empty($photo_type) && !empty($photo_details) && !empty($priority)) {
        $updatearray = array("id" => $id);
        if (!empty($_FILES['photo']['name'])) {
            include('class/uploadImage_Class.php');
            $imgclassget = new image_class();
            $photo_1 = $imgclassget->upload_fiximage("upload", "photo", "photo_upload_" . $table_name . "_" . time());
            $photo = $photo_1;
            @unlink("upload/" . $ex_photo);
        } else {
            $photo = $ex_photo;
        }$upd2 = array('category_id' => $category_id, 'sub_category_id' => $sub_category_id, 'photo_title' => $photo_title, 'photo' => $photo, 'photo_type' => $photo_type, 'photo_details' => $photo_details, 'priority' => $priority, 'date' => date('Y-m-d'), 'status' => 1);
        $update_merge_array = array_merge($updatearray, $upd2);
        if ($obj->update($table, $update_merge_array) == 1) {
            $plugin->Success("Successfully Updated", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    }
} elseif (isset($_GET['del']) == "delete") {
    $delarray = array("id" => $_GET['id']);
    $photolink = $obj->SelectAllByVal($table, 'id', $_GET['id'], 'photo');
    @unlink("upload/" . $photolink);
    if ($obj->delete($table, $delarray) == 1) {
        $plugin->Success("Successfully Delete", $obj->filename());
    } else {
        $plugin->Error("Failed", $obj->filename());
    }
}
?><!doctype html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
    <head>
        <?php
        echo $plugin->softwareTitle();
        echo $plugin->TableCss();
        echo $plugin->KendoCss();
        echo $plugin->FileUploadCss();
        ?>
    </head>
    <body class="">
        <?php include('include/topnav.php');
        include('include/mainnav.php');
        ?>





        <div id="content">
            <h1 class="content-heading bg-white border-bottom">Page Data</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Page Data</a></li>
                    <li><a href="page_data_data.php">Page Data List</a></li>
                </ul>
            </div>
            <div class="innerAll spacing-x2">
<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                <!-- Widget -->
                <div class="widget widget-inverse" >
                    <?php
                    if (isset($_GET['edit'])) {
                        ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Update/Change - Page Data</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
                                <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Category ID </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='category_id' placeholder='Category ID'  value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"category_id");   ?>'  class='form-control' />-->
                                        <select name="category_id" id='category'class='form-control'>
                                            <option value="">Select A Category</option>
                                            <?php
                                            $category_id = $obj->SelectAllByVal($table, "id", $_GET['edit'], "category_id");
                                            $sqlcategory = $obj->FlyQuery("Select * from category");
                                            if (!empty($sqlcategory)) {
                                                foreach ($sqlcategory as $category):
                                                    ?>
                                                    <option <?php if ($category_id == $category->id) { ?> selected="selected"<?php } ?> value="<?php echo $category->id ?>"><?php echo $category->name ?></option>

                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category ID </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='sub_category_id' placeholder='Sub Category ID'  value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"sub_category_id");   ?>'  class='form-control' />-->
                                        <select name="sub_category_id" id='subcategory' class='form-control'>
                                            <option value="0">Select A Sub Category</option>
                                            <?php
                                            $subcategory_id = $obj->SelectAllByVal($table, "id", $_GET['edit'], "sub_category_id");
                                            $sqlsubcategory = $obj->FlyQuery("Select * from sub_category");
                                            if (!empty($sqlsubcategory)) {
                                                foreach ($sqlsubcategory as $subcategory):
                                                    ?>
                                                    <option <?php if ($subcategory_id == $subcategory->id) { ?> selected="selected"<?php } ?> value="<?php echo $subcategory->id ?>"><?php echo $subcategory->name ?></option>

                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo Title </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='photo_title' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "photo_title"); ?>' placeholder='Photo Title' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>

                                    <div class='col-sm-3'>
                                            <!--<input type='file' id='id-input-file-1' name='photo' placeholder='Photo' class='form-control' />-->
                                        <?php
                                        $photo = $obj->SelectAllByVal($table, "id", $_GET['edit'], "photo");
                                        echo $plugin->FileUploadBox("1", $photo, "photo");
                                        ?>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo Type </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='photo_type' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "photo_type"); ?>' placeholder='Photo Type' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='photo_details' placeholder='Photo Details' class='form-control'><?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "photo_details"); ?></textarea>
                                        <script>
                                            $(document).ready(function () {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Priority </label>

                                    <div class='col-sm-6'>
                                        <input type='text' id='form-field-1' name='priority' placeholder='Priority'  value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "priority"); ?>'  class='form-control' />
                                    </div>
                                </div><div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<?php } else { ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Create New Page Data</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Category ID </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='category_id' placeholder='Category ID' class='form-control' />-->
                                        <select name="category_id" id='category'class='form-control'>
                                            <option value="">Select A Category Name</option>
                                            <?php
                                            $sql_category = $obj->FlyQuery("Select * from category");
                                            if (!empty($sql_category)) {
                                                foreach ($sql_category as $category):
                                                    ?>
                                                    <option value="<?php echo $category->id ?>"><?php echo $category->name; ?></option>

                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category ID </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='sub_category_id' placeholder='Sub Category ID' class='form-control' />-->
                                        <select name="sub_category_id" id='subcategory' class='form-control'>
                                            <option value="">Select A Category Name</option>
                                            <?php
                                            $sql_subcategory = $obj->FlyQuery("Select * from sub_category WHERE category_id='category'");
                                            if (!empty($sql_subcategory)) {
                                                foreach ($sql_subcategory as $subcategory):
                                                    ?>
                                                    <option value="<?php echo $subcategory->id ?>"><?php echo $subcategory->name ?></option>

                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo Title </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='photo_title' placeholder='Photo Title' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>

                                    <div class='col-sm-3'>
                                            <!--<input type='file' id='id-input-file-1' name='photo' placeholder='Photo' class='form-control' />-->
                                        <?php
                                        echo $plugin->FileUploadBox("0", "", "photo");
                                        ?>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo Type </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='photo_type' placeholder='Photo Type' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='photo_details' placeholder='Photo Details' class='form-control'></textarea>
                                        <script>
                                            $(document).ready(function () {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Priority </label>

                                    <div class='col-sm-6'>
                                        <input type='text' id='form-field-1' name='priority' placeholder='Priority' class='form-control' />
                                    </div>
                                </div><div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit"   onclick="javascript:return confirm('Do You Want Create/save These Record?')"  name="create" class="btn btn-info">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<?php } ?>
                </div>
                <!-- // Widget END -->




                <!-- // Widget END -->
            </div>
        </div>
        <!-- // Content END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
<?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    <script>
        $(document).ready(function () {
            $('#category').change(function () {
                var cid = $(this).val();
                //alert(cid);
                $.post("ajax/subcategory_data.php", {cid: cid}, function (cat) {
                    $("#subcategory").html(cat);
                });
            });
        });


    </script>
    <?php
    echo $plugin->TableJs();
    echo $plugin->KendoJS();
    echo $plugin->FileUploadJS();
    ?>
</body>
</html>