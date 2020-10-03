<link rel="stylesheet" href="<?=base_url()?>template/assets/css/happy_story.css">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="z96BQHKf"></script>
<div id="header_part">
       <div class="shadow">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <h2>STORY DETAILS</h2>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- header part ends  -->
   
<!-- body part start  -->

    <div id="main_body">
        <div class="container">
        <?php
            foreach ($get_story as $value) 
            {
            ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2><?= $value->title?></h2>
                        <ul class="inline-links inline-links--style-2 mt-1" style="margin-left: 35px;">
                            <li>
                                <i class="c-base-1 fa fa-clock-o"></i> <?= date_format(date_create($value->post_time),"d, F Y")?> 
                            </li>
                            <li>
                                <?=translate('by')?>
                                <?php
                                    if ($value->posted_by == $this->session->userdata('member_id')) {
                                ?>
                                    <a class="c-base-1" href="#"><?=translate('me')?></a>
                                <?php
                                    }
                                    else {
                                ?>
                                    <a class="c-base-1" href="<?=base_url()?>home/member_profile/<?=$value->posted_by?>"><?= $this->Crud_model->get_type_name_by_id('member', $value->posted_by, 'first_name')." ". $this->Crud_model->get_type_name_by_id('member', $value->posted_by, 'last_name');?></a>
                                <?php
                                    }
                                ?>
                            </li>
                            <!-- <li> 5 comments </li> -->
                        </ul>
                        <p>
                            <?=$value->description?>
                        </p>
                    </div>
                    <?php 
                        $images = json_decode($value->image, true);
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <?php
                        $i = 0; 
                        foreach ($images as $image): ?>
                            <img src="<?=base_url()?>uploads/happy_story_image/<?=$image['img']?>" class="img-responsive" alt="">
                        <?php
                        $i++; 
                        endforeach;
                    ?>
                        
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#hmweddingsofficial" data-numposts="5" data-width=""></div>
                </div>
                
            </div>
        </div>
    </div>
    