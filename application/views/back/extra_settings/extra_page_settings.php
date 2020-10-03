<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('extra_page_settings')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<li class="active"><a href="#"><?php echo translate('extra_page_settings')?></a></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<!-- Basic Data Tables -->
		<!--===================================================-->
		<div class="panel">
            <?php if($this->session->flashdata('success')){?>
			<div class="alert alert-success" role='alert'>
                Successfully Added
            </div>
            <?php }?>
            <?php if($this->session->flashdata('error')){?>
			<div class="alert alert-success" role='alert'>
                Successfully Deleted
            </div>
            <?php }?>
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo translate('extra_page_settings')?>
                    <!-- (<span style='color:red; font-size:10px;'>*** Link use for Type follow us / number use for connect us</span>) -->
                </h3>
			</div>
			<div class="panel-body">
				
                <div class="box">
                    <div class="box-body">
                    <?php if($edit){?>
                        <form action="<?=base_url()?>Admin/extra_page_settings/update" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="page_id" class="form-control" value='<?= $edit->page_id;?>'>
                            <div class="col-xs-12 col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Page Name</label>
                                        <input type="text" name="page_name" class="form-control" required placeholder='Ex : about_us' value='<?= $edit->page_name;?>'>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="page_title" class="form-control" placeholder='Ex : About Us' value='<?= $edit->page_title;?>'>
                                    </div>
                                    <div class="form-group">
                                        <label>Cover Image</label>
                                        <input type="file" name="cover_image" class="form-control">
                                        <img src="<?= base_url().'uploads/extra_page_settings/'.$edit->cover_image?>" style="height: 220px; width: 360px;" class='img-responsive'>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="<?= base_url().'uploads/extra_page_settings/'.$edit->image?>" style="height: 220px; width: 360px;" class='img-responsive'>
                                    </div>
                                    <div class="form-group">
                                        <label>Page Short Description</label>
                                        <textarea class="form-control" name="page_shortdesc">
                                            <?=$edit->page_shortdesc?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Page Description</label>
                                        <textarea class="form-control ckeditor" name="page_description">
                                            <?=$edit->page_description?>
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label></label>
                                        <input type="submit" class="btn btn-primary btn-block" value="Update">
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    <?php } else {?>
                        <form action="<?=base_url()?>Admin/extra_page_settings/add" method="post" enctype="multipart/form-data">
                            <div class="col-xs-12 col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Page Name</label>
                                        <input type="text" name="page_name" class="form-control" required placeholder='Ex : about_us'>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="page_title" class="form-control" placeholder='Ex : About Us'>
                                    </div>
                                    <div class="form-group">
                                        <label>Cover Image</label>
                                        <input type="file" name="cover_image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Page Short Description</label>
                                        <textarea class="form-control" name="page_shortdesc">
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Page Description</label>
                                        <textarea class="form-control ckeditor" name="page_description">
                                            
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="submit" class="btn btn-primary btn-block" value="Add">
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    <?php }?>
                    </div>
                </div>
                
                <div class="row" style="padding: 5px">
                    <div class="box">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-12" style="color: #79a0e0">
                                    <h3>List</h3>
                                </div>
                                <table id="example1" class="table table-bordered table-striped" border="1">
                                    <thead style="background-color: #79a0e0">
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th width="10%">Page Name</th>
                                            <th width="10%">Title</th>
                                            <th width="20%">Description</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itembody">
                                        <?php $i=0; foreach ($page_settings as $s) {?>
                                        <tr>
                                            <td><?= ++$i;?></td>
                                            <td><?= $s->page_name; ?></td>
                                            <td><?= $s->page_title ;?></td>
                                            <td><?= $s->page_shortdesc ;?></td>
                                            <td><a href="<?=base_url().'Admin/extra_page_settings/edit/'.$s->page_id?>" style="color:blue">Edit</a> </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
		<!--===================================================-->
		<!-- End Striped Table -->
	</div>
	<!--===================================================-->
	<!--End page content-->
</div>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

</script>
<script>
	setTimeout(function() {
	    $('.alert-success').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
</script>
<!-- CKeditor Text Editor -->
<script src="<?=base_url()?>template/back/plugins/ckeditor/ckeditor.js"></script>