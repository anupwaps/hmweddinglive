
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/contact.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/privacy_policy.css">

<!-- <div class="main page-bg">
    <div class="about-privacy">
        <div class="hover">
            <div class="container text-center">
                <div class="text-center">
                    <h1>Media Press Release</h1>


                </div>
            </div>

        </div>
    </div>
</div> -->
<section id="bg_gallery">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 section-title text-center">
                     <h2 style="padding-top:40px;">Gallery</h2>
                     <div class="col-md-12">
                        <div class="glry">
                        <?php
                            // $gallery = $this->db->get('gallery')->result();
                            foreach($general as $sl){
                        ?>
                            <img src="<?= base_url().'uploads/media_pr_settings/'.$sl->image?>">
                        <?php }?>
                        
                            
                        </div>
                        

                     </div>
                     

                 </div>
             </div>
         </div>
         <div class="lightbox">
          <div class="title"></div>
          <div class="filter"></div>
          <div class="arrowr"></div>
          <div class="arrowl"></div>
          <div class="close"></div>
        </div>
     </section>