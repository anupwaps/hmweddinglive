<p class="text-main text-semibold"><?php echo translate('google_map_iframe_link')?></p>
<form class="form-horizontal" id="terms_and_conditions_form" method="POST" action="<?=base_url()?>admin/general_settings/update_location">
	<div class="form-group">
		<div class="col-sm-12">
			<input class="form-control" name="location_map" value='<?=$this->Crud_model->get_type_name_by_id('general_settings', '92', 'value')?>' id="location_map" required >
                 
            <br>
            <p class="text-main text-semibold"><?php echo translate('location_preview')?></p>	
            <iframe src="<?=$this->Crud_model->get_type_name_by_id('general_settings', '92', 'value')?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 text-right">
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
		</div>
	</div>
</form>

