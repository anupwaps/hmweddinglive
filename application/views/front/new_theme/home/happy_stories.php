<div class="section-space40 ptrn-bg2" ng-app="HomePage">
    <!-- Success Stories Start -->
    <div class="container">
        <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title mb20 text-center">
                        <h2>Be inspired by Real Weddings</h2>
                        <p>Find inspiration for your Special Day. Yours could be the next Success Story.</p>
                    </div>
                </div>
            </div>
            <div class="row ng-scope">
            <?php foreach ($happy_stories as $happy_storie): ?>
                <div class="col-md-4 col-sm-4 ">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <?php
                            $story_image = $happy_storie->image;
                            $images = json_decode($story_image, true);
                            if (file_exists('uploads/happy_story_image/'.$images[0]['thumb'])) {
                            ?>
                                <div class="real-wedding-img"><a href="#"><img src="<?=base_url()?>uploads/happy_story_image/<?=$images[0]['thumb']?>"> </a></div>
                                
                            <?php
                            }
                            else {
                            ?>

                                <div class="real-wedding-img"><a href="#"><img src="<?=base_url()?>uploads/happy_story_image/default_image.jpg"> </a></div>
                                
                            <?php
                            }
                        ?>


                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title ng-binding"><?=$happy_storie->title?></a></h2>
                            <p class="story-msg ng-binding"><?=substr($happy_storie->title,0,23)?><?php if(strlen($happy_storie->title) > 23){echo '..';}?></p>
                        </div>
                        <a href="<?=base_url()?>home/stories/story_detail/<?=$happy_storie->happy_story_id?>" class="btn btn-primary btn-block bor-r0 ripplelink">Read more</a>
                    </div>
                    <!-- /.real wedding block -->
                </div>
            <?php endforeach ?>


            </div>
            <!-- /.Success Stories center -->
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center"> <a href="<?=base_url()?>home/stories/" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_View_Stories">View Happy Stories</a> </div>
            </div>
        </div>
    </div>
</div>