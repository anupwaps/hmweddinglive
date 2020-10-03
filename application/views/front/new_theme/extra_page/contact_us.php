
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/contact.css">


<!--Header End--> 
<div class="main page-bg">
<!--       contact us page -->
       <div class="about-heading">
           <div class="hover">
              <div class="container">
                  <div class="text-center cover_title">
                   <h1>Contact Us</h1>
                   <p>hmweddings.com is an online portal which is striving to bring likeminded individuals from all over the world to know each other well enough, to mutually decide and embark upon this beautiful journey of life called “Marriage.” hmweddings.com are very passionate to make it very simple for you to go through the procedure of finding your life partner. </p>
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

                        <p>We always love to hear from our customers! We are happy to answer your questions and assist you</p>
                        
                        <div class="row">
                           
                           
<!-- Form part starts-->
                            <form name="contact" method="POST" action="<?=base_url()?>home/contact_us2/send" enctype="multipart/form-data">
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
                    <div class="officeadd-section">
                        <h4>Our Office Locations </h4>
                        <div class="padd-30" style="padding-top:20px;">
                            <div class="gurgaonadd">
                                <h5>Dhaka Office - Head Office</h5>
                                <ul>
                                    <li><strong>Address</strong> : <?=$this->db->get_where('general_settings', array('general_settings_id' => 4))->row()->value?></li>
                                    <li><strong>Email</strong> : <?=$this->db->get_where('general_settings', array('general_settings_id' => 2))->row()->value?> </li>
                                    <li><strong>Tel</strong> : <?=$this->db->get_where('general_settings', array('general_settings_id' => 5))->row()->value?></li>
                                </ul>
                            </div>
                            <!-- <div class="gurgaonadd">
                                <h5>Dhaka Office</h5>
                                <ul>
                                    <li><strong>Address </strong>: level -2 Flat B2 Baridhara ,vatara Gulshan -2 Dhaka 1212</li>
                                    <li><strong>Email</strong> : hmweddings@gmail.com</li>


                                </ul>
                            </div> -->




                            <div class="office-hours">
                                <h5>Our Office Working Hours</h5>
                                <ul>
                                    <li>
                                        <?=$this->db->get_where('general_settings', array('general_settings_id' => 87))->row()->value?> : 
                                        <?=$this->db->get_where('general_settings', array('general_settings_id' => 88))->row()->value?>
                                    </li>

                                </ul>
                            </div>

                        </div>
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