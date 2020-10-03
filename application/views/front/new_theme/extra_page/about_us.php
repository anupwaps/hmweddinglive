<link rel="stylesheet" href="<?=base_url()?>template/assets/css/aboutus.css">

<div class="main page-bg">
    <div class="about-heading" style="background-image: url(<?=base_url().'uploads/extra_page_settings/'.$about_us->cover_image;?>)">
        <div class="hover">
            <div class="container">
                <div class="text-center cover_title">
                    <h1><?= $about_us->page_title; ?></h1>
                    <p>
                        <?= $about_us->page_shortdesc;?>
                    </p>
                </div>
            </div>
            
        </div>
                
    </div>


    
    
	<div class="container">
        <div class="about-content cover_title">
            <div class="row">
                <div class="col-md-7">
                    <div class="text-center">
                        <img src="<?=base_url().'uploads/extra_page_settings/'.$about_us->image;?>" class='img-responsive'>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="text-center">
                        <p style="text-align: justify;">
                            <?= $about_us->page_shortdesc;?>
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <?= $about_us->page_description;?>
                </div>
            </div>
        </div>
    </div>
</div>