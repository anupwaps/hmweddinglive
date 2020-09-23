<section class="slice sct-color-1">
    <?php if (!empty($success_alert)): ?>
            <div class="col-6 ml-auto mr-auto" id="success_alert">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?=$success_alert?>
                </div>
            </div>
        <?php endif ?>
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-4">
            <h3 class="section-title-inner heading-1 strong-300 text-normal">
                <?php echo translate('about_us')?>
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>
        <?php
            $contact_us_text = $this->db->get_where('frontend_settings', array('type' => 'about_us_text'))->row()->value;
        ?>
        <div class="fluid-paragraph  c-gray-light strong-300" style="width:auto;">
            <div class="row">
            <div class="col-md-6">
                   <img src="<?php echo base_url()?>/uploads/home_page/slider_image/slider_image_8.jpg" width="90%" >
                </div>
                 <div class="col-md-6">
            <?php echo $contact_us_text;?>
            </div>
            </div>
        </div>

        <span class="space-xs-xl"></span>

        
    </div>
</section>
<script>
    $(document).ready(function(){
        setTimeout(function() {
            $('.alert-success').fadeOut('fast');
        }, 5000); // <-- time in milliseconds
    });
</script>