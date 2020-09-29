<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('follow_connect_us_settings')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<li class="active"><a href="#"><?php echo translate('follow_connect_us_settings')?></a></li>
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
				<h3 class="panel-title"><?php echo translate('follow_connect_us_settings')?>
                    (<span style='color:red; font-size:10px;'>*** Link use for Type follow us / number use for connect us</span>)
                </h3>
			</div>
			<div class="panel-body">
				
                <div class="box">
                    <div class="box-body">
                    <?php if($edit){?>
                        <form action="<?=base_url()?>Admin/follow_connect/update" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="follow_id" class="form-control" value='<?= $edit->follow_id;?>'>
                            <div class="col-xs-12 col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required placeholder='Ex : facebook' value='<?= $edit->title;?>'>
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" name="link" class="form-control" placeholder='Ex : facebook.com/hmweddings' value='<?= $edit->link;?>'>
                                    </div>
                                    <div class="form-group">
                                        <label>Number</label>
                                        <input type="text" name="number" class="form-control" placeholder='Ex : +8801712-080-085' value='<?= $edit->number;?>'>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="<?= base_url().'uploads/follow_connect/'.$edit->image?>" style="height: 36px; width: 36px;">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select name="type" class="form-control" required>
                                            <option>Select Status</option>
                                            <option value="0" <?php if($edit->type==0){echo "Selected";}?>>Follow Us</option>
                                            <option value="1" <?php if($edit->type==1){echo "Selected";}?>>Connect Us</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="submit" class="btn btn-primary btn-block" value="Update">
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    <?php } else {?>
                        <form action="<?=base_url()?>Admin/follow_connect/add" method="post" enctype="multipart/form-data">
                            <div class="col-xs-12 col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required placeholder='Ex : facebook'>
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" name="link" class="form-control" placeholder='Ex : facebook.com/hmweddings'>
                                    </div>
                                    <div class="form-group">
                                        <label>Number</label>
                                        <input type="text" name="number" class="form-control" placeholder='Ex : +8801712-080-085'>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select name="type" class="form-control" required>
                                            <option>Select Status</option>
                                            <option value="0">Follow Us</option>
                                            <option value="1">Connect Us</option>
                                        </select>
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
                                    <h3>Follow Connect Us List</h3>
                                </div>
                                <table id="example1" class="table table-bordered table-striped" border="1">
                                    <thead style="background-color: #79a0e0">
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th width="10%">Type</th>
                                            <th width="10%">Title</th>
                                            <th width="20%">Link</th>
                                            <th width="20%">Images</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itembody">
                                        <?php $i=0; foreach ($follow as $s) {?>
                                        <tr>
                                            <td><?= ++$i;?></td>
                                            <td><?php if($s->type == '0'){echo 'Follow Us';} else{echo 'Connect Us';} ?></td>
                                            <td><?= $s->title ;?></td>
                                            <td><?= $s->link ;?></td>
                                            <td><img src="<?= base_url().'uploads/follow_connect/'.$s->image?>" style="height: 36px; width: 36px;"></td>
                                            <td><a href="<?=base_url().'Admin/follow_connect/edit/'.$s->follow_id?>" style="color:blue">Edit</a> | <a href="<?=base_url().'Admin/follow_connect/delete/'.$s->follow_id?>" onclick="return confirm('are you sure?')" style="color:red">Delete</a></td>
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