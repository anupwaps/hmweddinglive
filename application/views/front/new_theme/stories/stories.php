<!-- <link rel="stylesheet" href="<?=base_url()?>template/assets/css/custom2c06.css?v=116" media="screen" type="text/css" /> -->
<link href="<?=base_url()?>template/assets/css/counselling/style8e0e.css?v=8" rel="stylesheet">

<style>
    .about-heading { 
	background:url(../images/counselling/homepage_bg.jpg) no-repeat center; 
	background-size: cover;
    background-attachment: fixed;
    }
    .about-heading h1{
        font-size:45px;
        color:#fff;
        margin-top:13px;
    }
    .about-heading1 { 
        /* background:url(../images/happystories.jpg);  */
        background-position: center; 
        padding: 70px 50px;
        height: auto;
        display: block;
    }
    .main{
        background-image: url("../../assets/img/1.png");
    }
    .about-heading1 h1{
        font-size:45px;
        color:#fff;
        margin-top:13px;
    }
    .about-content{
        padding: 60px 20px;
    background: #fff;
    border: 3px solid #f5f4f4;
    position: relative;
    z-index: 999;
    /*top: -57px;*/
        margin-top: 100px;
    }
</style>
<div class="main page-bg" style="background-image: url(<?=base_url()?>template/assets/images/happystories.jpg)">
    <div class="about-heading1 HPS">
        <div class="text-left">
            <h1>Happy Stories</h1>
            <p>The secret of a happy marriage is finding the right person. You know they're right if you love to be with them all the time. </p>
        </div>
    </div>

</div>
     <main class="HS">
     <?php
    $i = 1;
    foreach ($get_all_stories as $value): ?>
        <?php 
            $images = json_decode($value->image, true);
        ?>
        <?php if ($i%2 != 0): ?>
         <div class="container_styled_1 padtb30 compo">
             <div class="container">
                 <div class="row">
                     <div class="components-TeamRow">
                         <div class="components-image">
                         <?php
                        if (file_exists('uploads/happy_story_image/'.$images[0]['img'])) {
                        ?>
                             <div class="components-image-main" style="background-image: url(<?=base_url()?>uploads/happy_story_image/<?=$images[0]['img']?>);">
                                 <div class="components-image-main2"></div>
                             </div>
                             <?php
                        }
                        else {
                        ?>
                            <div class="components-image-main" style="background-image: url(<?=base_url()?>template/assets/images/counselling/comp3860.jpg?v=1);">
                                 <div class="components-image-main2"></div>
                             </div>
                             <?php
                        }
                        ?>
                         </div>
                         <div class="components-content">
                             <div class="flower-top"></div>
                             <div class="flower-bottom"></div>
                             <h3><a href="<?=base_url()?>home/stories/story_detail/<?=$value->happy_story_id?>"><?=$value->title?></a></h3>
                             <span><i class="c-base-1 fa fa-clock-o"></i> <?= date_format(date_create($value->post_time),"d, F Y")?></span>
                             <div>
                                 <p style="margin-top: 10px; font-size:20px;">
                                    <?=substr($value->description,0 ,150).". . ."?>
                                 </p>

                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End row -->
             </div>
         </div>
         
        <?php endif ?>

        <?php if ($i%2 == 0): ?>
         <div class="container_styled_1 padtb30 compo">
             <div class="container">
                 <div class="row">
                     <div class="components-TeamRow rowreverse">
                     <?php
                        if (file_exists('uploads/happy_story_image/'.$images[0]['img'])) {
                        ?>
                         <div class="components-image">
                             <div class="components-image-main" style="background-image: url(<?=base_url()?>uploads/happy_story_image/<?=$images[0]['img']?>);">
                                 <div class="components-image-main2"></div>
                             </div>
                         </div>
                         <?php
                        }
                        else {
                        ?>
                        <div class="components-image">
                             <div class="components-image-main" style="background-image: url(<?=base_url()?>template/assets/images/counselling/comp23860.jpg?v=1);">
                                 <div class="components-image-main2"></div>
                             </div>
                         </div>
                         <?php
                        }
                        ?>
                         <div class="components-content upper2">
                             <div class="flower-top"></div>
                             <div class="flower-bottom"></div>
                             <h3><a href="<?=base_url()?>home/stories/story_detail/<?=$value->happy_story_id?>"><?=$value->title?></a></h3>
                             <span><i class="c-base-1 fa fa-clock-o"></i> <?= date_format(date_create($value->post_time),"d, F Y")?></span>
                             <div>
                                 <p style="margin-top: 10px; font-size:20px;">
                                    <?=substr($value->description,0 ,150).". . ."?> 
                                </p>


                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- End row -->
             </div>
         </div>
        <?php endif ?>

        <?php
            $i++;
            endforeach; 
        ?>


            
    <div class="text-center">
    <div class="pagination"><?=$links?></div>
    </div>
         <!-- End container -->
     </main>

     <style>
.pagination {
	display: inline-block;
	text-align: center;
}

.pagination a {
	color: black;
	float: left;
	padding:4px 8px;
	text-decoration: none;
	border: 1px solid #ddd;
}

.pagination a.active {
	background-color: #F68B1E;
	color: white;
	border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

.pagination a:first-child {
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
}

.pagination a:last-child {
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
}
</style>
<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
     border-radius: 5px;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>