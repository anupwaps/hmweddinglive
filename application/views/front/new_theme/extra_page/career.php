
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/privacy_policy.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/career.css">

 <div class="main page-bg">
    <div class="about-privacy">
        <div class="hover">
            <div class="container text-center">
                <div class="text-center">
                    <h1>Career </h1>


                </div>
            </div>

        </div>
    </div>
</div> 
<div class="container">
	<!-- <h2 class=" text-center">Career </h2> -->
	 
	<?php foreach($general as $g){?>
	<div class="card mt-20 mb-20">
	    <div class="card-body">
	        <div class="row">
        	   
        	    
        	    <div class="col-md-9 col-md-offset-1">
        	        <h3>
        	            <a class="float-left" href=""><strong><?= $g->post_name;?></strong></a>
                        <br><br>
        	            <span><i class="c-base-1 fa fa-clock-o"></i> <?= date_format(date_create($g->date),"d, F Y")?></span>
        	       </h3>
        	       <div class="clearfix"></div>
        	        <p><?= substr($g->description, 0, 150)?></p>
        	        <p>
        	            
        	            <a class="float-right btn text-white btn-danger" style="float:right;" href="<?=base_url().'home/career_details/'.$g->career_id ?>"> <i class="fa fa-plus"></i> Show More</a>
        	       </p>
        	    </div>
        	    
        	    
	        </div>
	        
	        
	        	
	    </div>
	</div>
    <?php }?>
	
	
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
	
	
	
    </div>