<!-- Login Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body"> <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">&times;</a>
	    <div class="login-form-section">
          <h2>Login to your account</h2>
          <p>And begin a beautiful journey</p>
		  <form method="post" name="loginfrm" id="loginfrm" action="<?=base_url()?>home/check_login">
           <div class="form-group mt-10">
            <div class="">
              <input type="email" name="email" id="loginEmail" class="common-input" placeholder="Email Address">
              <!--<small class="lv-alert alert-danger">Please enter a valid email address</small> --></div>
          </div>
          <div class="form-group">
            <div class="">
              <input type="password" name="password" id="loginPass" class="common-input" placeholder="Password">
           <!--   <small class="lv-alert alert-danger">Wrong password. Try again.</small> --></div>
          </div>
          <div class="form-group">
            <div class="">
              <button type="submit" id="LoginBTN" class="btn btn-lg btn-primary btn-block ripplelink">LOGIN</button>
            </div>
          </div>
		  </form>
          <div class="login-forgot-link">
            <ul class="list-inline">
              <li><a href="#">Forgot Password ?</a></li>
              <li><a href="#">Resend Activation Email</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
          <div class="login-or-register"><span class="_43mh">OR</span></div>
          <div class="login-register-section">
            <p>Don't have an account?</p>
            <div class="form-group">
              <div class="">
                <a href="javascript:void('0')" data-toggle="modal"  id="registerBTN" onclick="openregisterModal()" class="btn btn-lg btn-blue btn-block ripplelink"> REGISTER FREE</a>
              </div>
            </div>
          </div>
        </div>		
      </div>
    </div>
  </div>
</div><div class="modal fade modal-fullscreen  footer-to-bottom" id="myModalFullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog animated fadeInUp">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" id= 'Mobile_PopUp_Close' data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
          </div>
           
            <div class="modal-footer">
			<p class="download-line1">Download our App</p>
                 <p class="download-line2">and search your life partner </p>
                 <p class="download-line3">on the go</p>
            <div class="mobile-screen"> <img src="<?=base_url()?>template/assets/images/" class="download-mobile-img"  alt=""/></div>
            <div class="download-buttons">
             <button type="button" class="btn btn-theme border-r100 download-mobile" id=""><i class="fa fa-apple" id ="apple-link"></i> <i class="fa fa-android" id ="android-link"></i> DOWNLOAD NOW</button>
            </div>
                <span class="mobile-or">OR</span>
                <a href="#" class="skiptocon" id= 'Mobile_PopUp_Continue' class="close" data-dismiss="modal"> Continue to Mobile Site</a>
            </div>
        </div>        
    </div>   
</div>

<div id="Register" class="modal fade" role="dialog" style="display: none;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body"> <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">×</a>
        <div class="login-form-section register-pop">
          <h2>Register Free</h2>
          <p>Its really simple and highly secured</p>
		   <form name="create-account" method="POST" action="<?=base_url()?>home/registration/add_info">
		   <input  type="hidden" name="page_source" id="page_source" value="home" autocomplete="off" />
       <div class="form-group mt-10">
            <div class="src_field_box">
              <label>First Name</label>
              <input name="first_name" id="email" class="common-input" placeholder="Enter your first name" autocomplete="off" type="text" maxlength='50'  data-live-search="true" data-valid="required">
		
              <small class="lv-alert alert-danger">Please enter your first name</small> </div>
          </div>
          <div class="form-group mt-10">
            <div class="src_field_box">
              <label>Last Name</label>
              <input name="last_name" id="email" class="common-input" placeholder="Enter your last name" autocomplete="off" type="text" maxlength='50'  data-live-search="true" data-valid="required">
		
              <small class="lv-alert alert-danger">Please enter your last name</small> </div>
          </div>
			   <div class="form-group mt-10">
            <div class="src_field_box">
              <label>Email Address</label>
              <input name="email" id="email" class="common-input" placeholder="Enter your email address" autocomplete="off" type="email" maxlength='50'  data-live-search="true" data-valid="required">
		
              <small class="lv-alert alert-danger">Please enter your email address</small> </div>
          </div>
          <div class="form-group">
            <div class="src_field_box">
              <label>Create a Password</label>
              <div class="row">
                <div class="col-md-6 paddright">
                  <input name="password" id="password" class="common-input" placeholder="Enter Password" autocomplete="new-password"  maxlength='50' type="password" data-live-search="true" data-valid="required">
                  <small class="lv-alert alert-danger">Please enter a password</small> 
                </div>
                <div class="col-md-6">
                  <input name="confirm_password" id="password" class="common-input" placeholder="Confirm Password" autocomplete="new-password"  maxlength='50' type="password" data-live-search="true" data-valid="required">
                  <small class="lv-alert alert-danger">Please enter a password</small> 
                </div>
              </div>
              
          </div>
		  
          <div class="form-group">
            <div class="src_field_box">
            <div class="row">
              <div class="col-md-12"><label>Mobile Number</label> </div>
              <div class="col-md-5 paddright">
              <select class="common-input selectval" id="country" onchange="get_moblengthvalue(this);" data-valid="required">
              <?php
                $country = $this->db->get('country')->result();
                foreach($country as $c){
              ?>  
			          <option data-countryid="<?= $c->phonecode?>" value="<?= $c->phonecode?>"><?= $c->name?>(+<?= $c->phonecode?>)</option>
              <?php } ?>
                  
                                 
              </select>
			        <small class="lv-alert alert-danger">Please select Country</small> 
              </div>
              <div class="col-md-7"><input name="mobile" id="phone" class="common-input" placeholder="Enter Mobile Number" autocomplete="off" type="text" maxlength="10" data-live-search="true" data-valid="required" data-type="phone" minlength="10">
              <small class="lv-alert alert-danger">Enter valid mobile number</small> 
              </div>
              
              </div>
              </div>
          </div>
          <div class="form-group">
            <div class="src_field_box">
            <div class="row">
              <div class="col-md-6 paddright">
              <label for="">Gender</label>
              <select class="common-input selectval" id="profile_for" name="gender" data-live-search="true" data-valid="required">
                <?php
                  $gender = $this->db->get('gender')->result();
                  foreach($gender as $g){
                ?>  
                  <option value="<?= $g->gender_id?>"><?= $g->name?></option>
                <?php } ?>
              </select>
              
			        <small class="lv-alert alert-danger">Please select Country</small> 
              </div>
              <div class="col-md-6">
              <label for="">Date of Birth</label>
              <input type="date" name='date_of_birth'  id="phone" class="common-input" placeholder="Enter Mobile Number" autocomplete="off" maxlength="10" data-live-search="true" data-valid="required" data-type="phone" minlength="10">
              <small class="lv-alert alert-danger">Enter valid mobile number</small> 
              </div>
              
              </div>
              </div>
          </div>
          <?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
            if($member_approval == 'yes'){ ?>
              <input name="approval_status" value="pending" hidden="">
          <?php } else { ?>
              <input name="approval_status" value="approved" hidden="">
          <?php } ?>
          <div class="form-group">
            <div class="src_field_box">
              <label>Profile Creating for</label>
             <select class="common-input selectval" id="profile_for" name="on_behalf" data-live-search="true" data-valid="required">
                <?php
                    $on_behalf = $this->db->get('on_behalf')->result();
                    foreach($on_behalf as $ob){
                ?>  
                  <option value="<?= $ob->on_behalf_id;?>"><?= $ob->name;?> </option>
                <?php }?>
            </select>
              <small class="lv-alert alert-danger">Please select for whom you are creating profile</small></div>
          </div>
          
          <div class="form-group">
            <div class="src_field_box">
              <button type="submit" id="LoginBTNnnn" class="btn btn-lg btn-primary btn-block ripplelink">Submit</button>
            </div>
          </div>
		  </form>
          <div class="alreadymember">
            <ul>
              <li>Already a member ? <a href="javascript:void('0')" data-toggle="modal" onclick="openloginModal()">Login</a></li>
            </ul>
          </div>
                   
        </div>
      </div>
    </div>
  </div>
</div>
 