
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/contact.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/report_abouse.css">



<!--Header End--> 
<div class="main page-bg">
<!--       contact us page -->
       <div class="about-heading">
           <div class="hover">
              <div class="container">
                  <div class="text-center cover_title">
                   <h1><?= $general->page_title; ?></h1>
                   
               </div>
              </div>
               
           </div>
               
         
          
<!--            <div class="">-->
            
            </div>
        </div>
        <div class="row content">
            <div class="col-md-10 col-md-offset-1">

            <?php if($this->session->flashdata('success')){?>
                <div class="alert alert-success" role='alert'>
                <?php echo translate("your_message_has_been_successfully_sent!"); ?>
                </div>
            <?php }?>
                <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12 margin-bottom-20">
                    <div class="contactus-section" style="box-shadow: 0px 0px 13px rgba(68, 68, 68, 0.15);">

                        <p>Write to us</p>
                        
                        <div class="row">
                           
                           
<!-- Form part starts-->
                            <form name="contact" method="POST" action="<?=base_url()?>home/contact_us2/send_abuse" enctype="multipart/form-data">
                                <div class="form-groups row contact_us_form">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label class="roboto-regular"> Your Name<span>*</span></label></div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="name" id="name" maxlength="100" class="form-control" required="" value="<?php if(!empty($form_contents)){echo $form_contents['name'];}?>" />

                                    </div>

                                </div>
                                <div class="form-groups row contact_us_form ">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label class="roboto-regular">Email Address<span>*</span></label></div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="email" id="email" maxlength="100" class="form-control" required="" value="<?php if(!empty($form_contents)){echo $form_contents['email'];}?>" />
                                    </div>
                                </div>
                                <div class="form-groups row contact_us_form">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label class="roboto-regular">Subject<span>*</span></label></div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="subject" id="confirmcaptcha" required="" value="<?php if(!empty($form_contents)){echo $form_contents['subject'];}?>">
                                        <div class="error-message-server"></div>
                                    </div>
                                </div>
                                <div class="form-groups row contact_us_form">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label class="roboto-regular">Message<span>*</span></label></div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <textarea type="textarea" class="form-control" name="message" id="desc" rows="6" required maxlength="300">
                                            <?php if(!empty($form_contents)){echo $form_contents['message'];}?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="button-holder">
                                        <button  type="submit" class="btn ripplelink padd-10 border-r2 float-right button">Send<i style="padding-left: 5px;" class="fa fa-send-o"></i></button>
                                    </div>
                                </div>
                            </form>
                            
                            <!-- Form part end-->
                        </div>
                    </div>
                </div>
                
                
<!--                form ends-->
               
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="abuse_paragraph">
                        <h2>TYPE OF ISSUE CONTENT </h2>
                            <?= $general->page_description;?>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                setTimeout(function() {
                    $('.alert-success').fadeOut('fast');
                }, 5000); // <-- time in milliseconds
            });
        </script>