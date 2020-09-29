<p class="text-main text-semibold"><?php echo translate('youtube_video_settings')?></p>
<form class="form-horizontal" id="terms_and_conditions_form" method="POST" action="<?=base_url()?>admin/general_settings/update_youtube_video">
	<div class="form-group">
		<div class="col-sm-12">
			<p class="text-main text-semibold"><?php echo translate('youtube_iframe_link')?></p>	
			<input class="form-control" name="youtube_link" value='<?=$this->Crud_model->get_type_name_by_id('general_settings', '93', 'value')?>' id="youtube_link" required >
                 
            <br>
            <p class="text-main text-semibold"><?php echo translate('Video_preview')?></p>	
            <iframe src="<?=$this->Crud_model->get_type_name_by_id('general_settings', '93', 'value')?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
		</div>
		<div class="col-sm-12">
			<p class="text-main text-semibold"><?php echo translate('youtube_text')?></p>	
			<textarea class="form-control ckeditor" name="youtube_text">
				<?=$this->Crud_model->get_type_name_by_id('general_settings', '94', 'value')?>
			</textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 text-right">
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
		</div>
	</div>
</form>

