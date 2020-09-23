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
                 <div class="col-md-5 col-sm-5 mobileapp-img hidden-xs"> <img class="img-fluid" src="<?=base_url()?>template/assets/images/mobile.png" alt="LoveVivah App" /> </div>
                 <div class="col-md-7 col-sm-7 parallax-caption">
                     <h2>Happiness is Just an App Away!</h2>
                     <p>Find your right match with Lovevivah.com </p>
                     <p style="font-weight:bold;"><i class="fa fa-hand-o-right"></i> Simple | Fast | Convenient | Safe & Secure</p>
                     <div class="app-download-btn">
                         <p>Available on iOS and Android</p>
                         <a href="#" target="_blank"><span class="membership-icon">
                                 <img src="<?=base_url()?>template/assets/images/mobile_store_one.png" alt="">
                             </span></a>
                         <a href="#" target="_blank"><span class="membership-icon">
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
             <div class="col-md-10 col-md-offset-1 col-sm-12">
                 <div class="row">
                     <div class="col-md-12 col-sm-12">
                         <div class="section-title mb30 text-center">
                             <h2>Upgrade your membership to connect with those you like.</h2>
                             <p>Search your perfect life-partner from millions of trusted &amp; authentic profiles.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4 col-sm-4">
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
                     <div class="col-md-4 col-sm-4">
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
                     <div class="col-md-4 col-sm-4">
                         <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
                             <div class="membership-icon">
                                 <img src="<?=base_url()?>template/assets/images/selected_icon/Chat.png" alt="">
                             </div>
                             <div class="feature-info">
                                 <h3>Chat</h3>
                                 <p>Chat instantly with all other<br>
                                     online users</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12 mt30 text-center"> <a href="<?= base_url()?>home/plans" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_Membership_CTA">Browse Membership Plans</a>
                         <p class="member-know"> To know more, call us @ +8801731556712</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- member section -->
     <?php include_once 'new_theme/home/premium_members.php'; ?>

     <!-- <div class="row">
        <div class="col-md-12 mt30 text-center"> <a href="membership.html" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_Membership_CTA">Browse Membership Plans</a>
          <p class="member-know"> To know more, call us @ +91-7827948215 (India) </p>
        </div>
      </div> -->
     </div>

     <!-- Elite Package Section-->

     <style type="text/css">
         .bg-prods {
             background: #180405 url(assets/images/Elite-bg1.jpg) bottom repeat-x;
             min-height: 400px;
             border-bottom: #f7e1e6 solid 1px;
         }

         .prod-ops {
             padding: 20px;
             text-align: center;
             border-radius: 50px 0px;
             box-shadow: #180408 1px 1px 6px;
             /*background-image: linear-gradient(to top, #49082a 0%, #170104 100%);*/
             margin-bottom: 10px;
             border: solid 1px rgba(255, 255, 255, 0.13);
             background: #0b0b0b url(assets/images/back.jpg) no-repeat center top;
         }

         .total-single-service-area .single-services-area {
             background: url(assets/images/bg-box.png) no-repeat;
             padding: 20px 0;
             transition: all 0.5s ease 0s;
             background-size: cover;
             background-position: 0 0;

         }

         .total-single-service-area .single-services-area:hover {
             background: url(assets/images/bg-box-hover.png) no-repeat;
             padding: 30px 0;
             transition: all 0.5s ease 0s;
             background-size: cover;
             background-position: 0 0;

         }

         .total-single-service-area .single-services-area h3 {
             font-family: 'Open Sans', Arial;
             font-size: 18px;
             color: #fff;
             font-weight: 600;
             position: relative;
             margin: 20px 0px 15px 0px;
             line-height: 35px;
             transition: all 0.5s ease 0s;
         }

         .total-single-service-area .single-services-area h3 strong {
             color: #cd3162;
         }

         .total-single-service-area .single-services-area h3 span {
             font-weight: 700;
             color: #e9b52e;
             font-style: italic;
             text-transform: uppercase;
         }

         .read-more {
             display: inline-block;
         }

         .read-more a {
             display: block;
             padding: 10px 30px;
             font-weight: 600;
             border: 1px solid;
             transition: all 0.5s ease 0s;
             -webkit-border-radius: 40px;
             -moz-border-radius: 40px;
             border-radius: 40px;
             color: #fff;
             border-color: #4f46ff;
         }

         .read-more a:hover {
             background: #4f46ff;
             color: #ffffff;
         }
     </style>

     <!--    Elite Package Section ends     -->
     <!--bg video starts-->
     
     <?php include_once 'new_theme/home/video.php'; ?>
     <!--bg video starts-->

     <div class="section-space40 lv-fotter-text ptrn-bg4">
         <div class="container">
             <div class="col-md-10 col-md-offset-1 LV-content">
                 <h2>About HM WEDDINGS</h2>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
