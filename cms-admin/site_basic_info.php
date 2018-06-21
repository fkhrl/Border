<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="site_basic_info"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($site_name)){
                            if(!empty($_FILES['site_logo']['name'])){
                            include('class/uploadImage_Class.php'); 
                            $imgclassget=new image_class(); 
			$site_logo=$imgclassget->upload_fiximage("upload","site_logo","site_logo_upload_".$table_name."_".time());  $insert=array('site_name'=>$site_name,'site_logo'=>$site_logo,'facebook_link'=>$facebook_link,'twitter_link'=>$twitter_link,'youtube_link'=>$youtube_link,'flickr'=>$flickr,'date'=>date('Y-m-d'),'status'=>1);
                            }else{
                                $site_logo = "";
                            }
				if($obj->insert($table,$insert)==1)
				{
					$plugin->Success("Successfully Saved",$obj->filename());
				}
				else 
				{
					$plugin->Error("Failed",$obj->filename());
				}
			}
			else 
			{
				$plugin->Error("Fields is Empty",$obj->filename());
			}   
		}
		elseif(isset($_POST['update'])) 
		{
			extract($_POST);if(!empty($site_name) && !empty($facebook_link) && !empty($twitter_link) && !empty($youtube_link) && !empty($flickr))
			{$updatearray=array("id"=>$id);if(!empty($_FILES['site_logo']['name']))
					{
						include('class/uploadImage_Class.php'); $imgclassget=new image_class(); $site_logo_1=$imgclassget->upload_fiximage("upload","site_logo","site_logo_upload_".$table_name."_".time());
						$site_logo=$site_logo_1;
						@unlink("upload/".$ex_photo);
					}else{
						$site_logo=$ex_photo;
					}$upd2=array('site_name'=>$site_name,'site_logo'=>$site_logo,'facebook_link'=>$facebook_link,'twitter_link'=>$twitter_link,'youtube_link'=>$youtube_link,'flickr'=>$flickr,'date'=>date('Y-m-d'),'status'=>1);
						$update_merge_array=array_merge($updatearray,$upd2);
						if($obj->update($table,$update_merge_array)==1)
						{ 
							$plugin->Success("Successfully Updated",$obj->filename());
						} 
						else 
						{ 
							$plugin->Error("Failed",$obj->filename()); 
						}}}
		elseif(isset($_GET['del'])=="delete") 
		{
			$delarray=array("id"=>$_GET['id']);$photolink=$obj->SelectAllByVal($table,'id',$_GET['id'],'site_logo'); @unlink("upload/".$photolink);if($obj->delete($table,$delarray)==1)
			{ 
				$plugin->Success("Successfully Delete",$obj->filename());  
			} 
			else 
			{ 
				$plugin->Error("Failed",$obj->filename()); 
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
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Site basic info</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Site basic info</a></li>
                    <li><a href="site_basic_info_data.php">Site basic info List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
				<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                        <!-- Widget -->
                        <div class="widget widget-inverse" >
							<?php 
							if(isset($_GET['edit']))
							{
							?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Update/Change - Site basic info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='site_name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"site_name"); ?>' placeholder='Site Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Logo </label>
		
											<div class='col-sm-3'>
												<!--<input type='file' id='id-input-file-1' name='site_logo' placeholder='Site Logo' class='form-control' />-->
                                                                                            <?php 
                                                                                                $site_logo = $obj->SelectAllByVal($table,"id",$_GET['edit'],"site_logo");
                                                                                                echo $plugin->FileUploadBox("1",$site_logo,"site_logo");
                                                                                            ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Facebook Link </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='facebook_link' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"facebook_link"); ?>' placeholder='Facebook Link' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Twitter Link </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='twitter_link' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"twitter_link"); ?>' placeholder='Twitter Link' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Youtube Link </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='youtube_link' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"youtube_link"); ?>' placeholder='Youtube Link' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Flickr </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='flickr' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"flickr"); ?>' placeholder='Flickr' class='form-control' />
											</div>
										</div><div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php }else{ ?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Create New Site basic info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='site_name' placeholder='Site Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Logo </label>
		
											<div class='col-sm-3'>
												<!--<input type='file' id='id-input-file-1' name='site_logo' placeholder='Site Logo' class='form-control' />-->
                                                                                            <?php 
                                                                                                echo $plugin->FileUploadBox("0","","site_logo");
                                                                                            ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Facebook Link </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='facebook_link' placeholder='Facebook Link' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Twitter Link </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='twitter_link' placeholder='Twitter Link' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Youtube Link </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='youtube_link' placeholder='Youtube Link' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Flickr </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='flickr' placeholder='Flickr' class='form-control' />
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
    
    <?php 
        echo $plugin->TableJs(); 
        echo $plugin->KendoJS();
        echo $plugin->FileUploadJS();
    ?>
</body>
</html>