<section id="bg_gallery">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 section-title text-center">
                     <h2>Gallery</h2>
                     <div class="col-md-12">
                        <div class="glry">
                        <?php
                            // $gallery = $this->db->get('gallery')->result();
                            foreach($gallery as $sl){
                        ?>
                            <img src="<?= base_url().'uploads/home_gallery/'.$sl->image?>">
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