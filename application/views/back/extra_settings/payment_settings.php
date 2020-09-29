<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('payment_settings')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<li class="active"><a href="#"><?php echo translate('payment_settings')?></a></li>
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
				<h3 class="panel-title"><?php echo translate('choose_image')?></h3>
			</div>
			<div class="panel-body">
				
                <div class="box">
                    <div class="box-body">
                        <form action="<?=base_url()?>Admin/payment_settings/add" method="post" enctype="multipart/form-data">
                            <div class="col-xs-12 col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="card_name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="submit" class="btn btn-primary btn-block" value="Add">
                                    </div>
                                </div>
                            </div>
                            
                        </form>
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
                                            <th width="20%">Name</th>
                                            <th width="20%">Images</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itembody">
                                        <?php $i=0; foreach ($payment_settings as $s) {?>
                                        <tr>
                                            <td><?= ++$i;?></td>
                                            <td><?= $s->card_name;?></td>
                                            <td><img src="<?= base_url().'uploads/payment_settings/'.$s->image?>" style="height: 35px; width: 50px;"></td>
                                            <td><a href="<?=base_url().'Admin/payment_settings/delete/'.$s->payment_id?>" onclick="return confirm('are you sure?')" style="color:red">Delete</a></td>
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