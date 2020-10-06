
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/privacy_policy.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/career.css">

 <div class="main page-bg">
    <div class="about-privacy">
        <div class="hover">
            <div class="container text-center">
                <div class="text-center">
                    <h1>Career Details</h1>


                </div>
            </div>

        </div>
    </div>
</div> 
<div class="container">
	<!-- <h2 class=" text-center">Career </h2> -->
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
        	        <p><?= $g->description;?></p>
        	        
        	    </div>
        	    
        	    
	        </div>
	        
	        
	        	
	    </div>
	</div>
	
	
    </div>