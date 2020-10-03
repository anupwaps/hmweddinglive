
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/contact.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/privacy_policy.css">
<!-- <div class="main page-bg">
    <div class="about-privacy" style="background-image: url(<?=base_url().'uploads/extra_page_settings/'.$privacy_policy->cover_image;?>)">
        <div class="hover">
            <div class="container">
                <div class="text-center cover_title">
                    <h1><?= $privacy_policy->page_title; ?></h1>
                    <p>
                        <?= $privacy_policy->page_shortdesc;?>
                    </p>
                </div>
            </div>
            
        </div>
                
    </div>
</div> -->
<div class="main page-bg">
    <!--       contact us page -->
    <div class="about-privacy" style="background-image: url(<?=base_url().'uploads/extra_page_settings/'.$privacy_policy->cover_image;?>)">
        <div class="hover">
            <div class="container text-center">
                <div class="text-center">
                    <h1><?= $privacy_policy->page_title; ?> </h1>


                </div>
            </div>

        </div>
    </div>
</div>
<div class="policybody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?= $privacy_policy->page_description;?>
                </div>
            </div>
        </div>

    </div>