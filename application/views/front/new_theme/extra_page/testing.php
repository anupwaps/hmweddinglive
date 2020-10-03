<link rel="stylesheet" href="<?=base_url()?>template/assets/css/aboutus.css">

<!--    faq part stars-->

<div class="about-heading" style="background-image: url(<?=base_url().'uploads/extra_page_settings/'.$about_us->cover_image;?>)">
    <div class="hover">
        <div class="container">
            <div class="text-center">
                <h1><?= $about_us->page_title; ?></h1>
                <p>
                <?php $arr = explode("\n", $about_us->page_description) ; echo $first = strip_tags($arr[0]);?>
                </p>
            </div>
        </div>
        
    </div>
            
</div>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="text-center">
                <img src="<?=base_url().'uploads/extra_page_settings/'.$about_us->image;?>" class='img-responsive'>
            </div>
        </div>
        <div class="col-md-5">
            <div class="text-center">
                <p style="text-align: justify;"><?= $first;?></p>
            </div>
        </div>
        <div class="col-md-12">
            <p style="text-align: justify;">
                <?php 
                    // $slice = array_slice($arr, 1);
                    // echo implode(" ", $slice);
                    echo array_slice($arr, 1);
                
                ?>
            </p>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="about-content">
        <div class="row">
            <div class="col-md-7">
                <div class="text-center">
                    <img src="<?=base_url().'uploads/extra_page_settings/'.$about_us->image;?>">
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <p style="text-align: justify;"><?= $first;?></p>
                </div>
            </div>
        
        </div>
        <p style="text-align: justify;">
            <?php 
                $slice = array_slice($arr, 1);
                echo implode(" ", $slice);
            
            ?>
        </p>
    </div>
</div> -->