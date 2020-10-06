<?php include_once 'new_theme/home.php'; ?>




     <script type="text/javascript" language="javascript">
         function openregisterModal() {
             $('#loginModal').modal('hide');
             $('#Register').modal('show');
         }
     </script>

     <!-- Sidebar Holder -->
     <?php include_once 'new_theme/top/sidebar.php'; ?>
     <!--  -->

     <!-- Aadhaar Holder right-->

     <div class="overlay"></div>

     <?php include_once 'new_theme/top/topbar.php'; ?>

     <style>
         .lv-alert {
             display: none;
         }

         .display-block {
             display: block;
         }
     </style>
     <!--Header End-->
     <style type="text/css">
         body.modal-open {
             position: static !important;
             overflow: visible;
             padding: 0 !important;
         }
     </style>
     <div class="slider-bg">

         <!-- Banner start-->


         <!-- Slider Area Start -->
         <?php include_once 'new_theme/home/slider.php'; ?>
         <!-- Slider Area End -->



         <!-- <div class="couple-hero-section-img" alt="lovevivah.com matrimony site"></div> -->
         

         <div class="find-section">
             <!-- Find search section-->
            <?php include_once 'new_theme/home/find.php'; ?>
         <!-- /.Find search section-->
         <!-- /.Find search section-->
     </div>
     <!-- slider end-->
     <div class="col-md-12 aadhaar-holder-mobile">

         <div class="col-xs-12">
             <a href="javascript:void('0')" data-toggle="modal" id="registerBTN" onclick="openregisterModal()" class="btn btn-blue bor-r50 btn-big ripplelink" style="margin:10px 0px;">Register Free!</a>
             <p>&amp; Enjoy Unlimited Benefits</p>
         </div>
     </div>

     <!-- Success Stories -->
    <?php include_once 'new_theme/home/happy_stories.php'; ?>

     <!-- Mobile App Section-->
     <section class="module parallax parallax-2">
         <div class="container">
             <div class="row">
                 <div class="col-lg-5 col-md-5 col-xs-4 col-sm-12 mobileapp-img"> <img class="img-fluid" src="<?=base_url()?>template/assets/images/mobile.png" alt="LoveVivah App" /> </div>
                 <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12 parallax-caption">
                     <h2>Happiness is Just an App Away!</h2>
                     <p>Find your right match with Hmwedding.com </p>
                     <p style="font-weight:bold;"><i class="fa fa-hand-o-right"></i> Simple | Fast | Convenient | Safe & Secure</p>
                     <div class="app-download-btn">
                         <p>Available on iOS and Android</p>
                         <?php $app_store = $this->db->get_where('general_settings', array('type' => 'app_store_apple'))->row()->value; ?>
                         <?php $play_store = $this->db->get_where('general_settings', array('type' => 'play_store_google'))->row()->value; ?>
                         <a href="<?= $app_store;?>" target="_blank"><span class="membership-icon">
                                 <img src="<?=base_url()?>template/assets/images/mobile_store_one.png" alt="">
                             </span></a>
                         <a href="<?= $play_store;?>" target="_blank"><span class="membership-icon">
                                 <img src="<?=base_url()?>template/assets/images/mobile_store_two.png" alt="">
                             </span></a>
                     </div>
                 </div>


             </div>
         </div>
     </section>

     <!-- Mobile App Banner End -->

     <div class="section-space40 bg-light ptrn-bg1">
         <div class="container">
             <div class="col-lg-10 col-md-offset-1 col-md-12 col-sm-12 col-xs-12">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                         <div class="section-title mb30 text-center">
                             <h2>Upgrade your membership to connect with those you like.</h2>
                             <p>Search your perfect life-partner from millions of trusted &amp; authentic profiles.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                         <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
                             <div class="membership-icon">

                                 <img class="contact" src="<?=base_url()?>template/assets/images/selected_icon/Contract.png" alt="">

                             </div>
                             <div class="feature-info">
                                 <h3>View Contacts</h3>
                                 <p>Access contact number and connect directly on call or via sms</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                         <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
                             <div class="membership-icon">
                                 <img src="<?=base_url()?>template/assets/images/selected_icon/Email.png" alt="">
                             </div>
                             <div class="feature-info">
                                 <h3>View Email</h3>
                                 <p>Get the email id of your selected profile and reach via email</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                         <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
                             <div class="membership-icon">
                                 <img src="<?=base_url()?>template/assets/images/selected_icon/Chat.png" alt="">
                             </div>
                             <div class="feature-info">
                                 <h3>Chat</h3>
                                 <p>Chat instantly with all other free members and premium members <br>
                                     online users</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30 text-center"> <a href="<?= base_url()?>home/plans" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_Membership_CTA">Browse Membership Plans</a>
                         <p class="member-know"> To know more, call us @ +8801731556712</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- member section -->
     <?php include_once 'new_theme/home/premium_members.php'; ?>

    
     </div>

     <!-- Elite Package Section-->

     

     <!--    Elite Package Section ends     -->
     <!--bg video starts-->
     
     <?php include_once 'new_theme/home/video.php'; ?>
     <!--bg video starts-->

     <div class="section-space40 lv-fotter-text ptrn-bg4">
         <div class="container">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ection-title text-center LV-content">
                 <h2>About HM WEDDINGS</h2>
                 <p>
                    <?php 
                        $ab = $this->db->get_where('extra_page_settings', array('page_name'=>'about_us'))->row()->page_description;
                        $arr = explode("\n", $ab);
                        echo $first = strip_tags($arr[0]);
                    ?>
                    .... <a href="<?= base_url()?>home/about_us">Read More</a>
                 </p>
             </div>
         </div>
     </div>

     <!--  Gallary section   -->
     <?php include_once 'new_theme/home/gallery.php'; ?>
    
<!--     gallery ends-->

     <!--  browse-matrimonial section   -->

     <?php include_once 'new_theme/home/browse_country.php'; ?>

     <!--  our visitor   -->
     <div class="bg_counter">
         <div class="container text-center">
             <div class="row counter_part">
                 <div class="coun">
                    <div class="col-md-12" style="text-align: center;">
                       
                        <p>Visitor : <span class="count">223456700</span></p>
                    </div>
                    <script type="text/javascript">
                        $('.count').each(function () {
                            $(this).prop('Counter',0).animate({
                                Counter: $(this).text()
                            }, {
                                duration: 4000,
                                easing: 'swing',
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });
                    </script>
                 </div>
             </div>
         </div>
     </div>




     <!--  our Location   -->

    <?php include_once 'new_theme/home/location.php'; ?>



<?php include_once 'new_theme/bottom/footer.php'; ?>
