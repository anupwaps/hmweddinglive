<p class="text-main text-semibold"><?php echo translate('social_links')?></p>
<form class="form-horizontal" id="social_links_form" action="<?=base_url()?>admin/general_settings/update_social_links" method="POST">
	<?php
            $social_links = $this->db->get('social_links')->result();
            foreach($social_links as $sl){
        ?>   
	<div class="form-group row">
	    <label class="col-sm-2 control-label"></label>
	    <div class="col-sm-8">
	        <div class="input-group mar-btm">
			<?php if ($sl->icon){?>
	            <span class="input-group-addon <?= $sl->type;?>_font">
	                <i class="fa fa-<?= $sl->type;?> fa-lg"></i>
	            </span>
			<?php } else {?>
				<span class="input-group-addon <?= $sl->type;?>_font">
	                <img src="<?= base_url().'uploads/social_image/'.$sl->social_image?>" style='height:18px; weidth: 18px;'>
	            </span>
			<?php }?>
	            <input type="text" name="<?= $sl->type?>" value="<?= $sl->value;?>" class="form-control">
	        </div>
	    </div>
	</div>
	<?php } ?>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8 text-right">
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
		</div>
	</div>
</form>