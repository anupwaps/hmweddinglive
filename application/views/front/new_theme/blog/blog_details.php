
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/privacy_policy.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/blog.css">

<section id="blogBody">
        <div class="container">
            <div class="row">
                <div class="blogElements col-xs-12 col-sm-7 ">
                    <!-- Image and short texts -->
                    <div class="blogImage">
                        <img class="img-thumbnail" src="<?=base_url().'uploads/blog/'.$g->image ?>">
                        
                         <div class="blogHeading">
                             <h1>
                                <?= $g->title;?>
                             </h1>
                         </div>

                         

                         <div class="user">
                             <div class="row">
                                 <div class="col-md-1"> <span><img src="<?=base_url().'uploads/blog/'.$g->image ?>"></span></div>
                                 <div class="col-md-5">
                                    <span><i>Posted By: <?= $g->posted_by;?></i></span>
                                    <br>
                                    <span><i class="">Date:<?= date_format(date_create($g->date),"d, F Y")?></i></span>
                                 </div>
                                 <div class="col-xs-6"></div>
                             </div>
                         </div>

                         <div class="blogShortText">
                             <p><?= $g->description;?></p>
                                <!-- Read More Button -->
                        </div>
                     
                    </div>



                </div>


                <!-- Dummy row -->
                <div class=" col-xs-12 col-sm-1"></div>
                <!-- Dummy row -->


                
                <div class="col-sm-4 col-xs-12">
                  <!-- Catagory  (right side) -->
                       <div class="catagoryAndrecent">
                        <div class="catHead">
                            <div class="panel panel-heading">
                                <p>Catagories</p>
                            </div>


                           <!-- Single cat Items -->
                        <?php foreach($blog_cat as $b){?>
                        <a>
                            <div role="button" class="catItems">
                                <div class="colorBox1"></div>
                                <div class="colorBox2"></div>
                                <div class="catName">
                                    <a href="<?=base_url().'home/blog_category/'.$b->blog_cat_id ?>"><?= $b->category_name;?></a>
                                </div>
                                <div class="col-xs-12 catItemsImage"><a role="button" href=""><img  src="<?=base_url().'uploads/blog_cat/'.$b->image ?>"></a></div>
                            </div>
                        </a>
                        <?php } ?>
                        <!-- single cat Items Ended -->

                        </div>

                        
                    <!-- Recent Posts (right side) -->
           
                        
                    <div class="recentHead">
                        <div class="separator"></div>
                            <div class="panel panel-heading">
                                <p>Recent Posts </p>
                            </div>

                            <div class="recentItems">
                                <?php foreach($recent as $b){?>
                                    <div class="row signgleItems">
                                        <div class="col-xs-4"><img  src="<?=base_url().'uploads/blog/'.$b->image ?>"></div>
                                        <div class="col-xs-8"><a href="<?=base_url().'home/blog_details/'.$b->blog_id ?>" class="itemsHeading"> <?= $b->title; ?></p></div>
                                    </div>
                                <?php }?>
                            </div>

                        
                           
                        </div>

                            
                            </div>
                        </div>
                    <!-- Recent Posts ended (right side) -->
                    </div>



                  <!-- Catagory ended  (right side) -->

    
                </div>
            </div>
        </div>
    </section>
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