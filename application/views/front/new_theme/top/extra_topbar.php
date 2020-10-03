<div class="container">
        <div class="row">
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid top-nav">
                    <span class="top-trust pull-left">
                        <label class="label label-warning">OFFER</label> Build 70% or above Trust Score &amp; Get FLAT 30% off*</span>
                    
                </div>

                
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#alignment_example" aria-controls="alignment_example" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                            <a href="<?=base_url()?>home/">
                                <?php
                                    $header_logo_info = $this->db->get_where('frontend_settings', array('type' => 'header_logo'))->row()->value;
                                    $header_logo = json_decode($header_logo_info, true);
                                    if (file_exists('uploads/header_logo/'.$header_logo[0]['image'])) {
                                    ?>
                                        <img src="<?=base_url()?>uploads/header_logo/<?=$header_logo[0]['image']?>" class="img-responsive" height="100%" style='border-radius: 50%;'>
                                    <?php
                                    }
                                    else {
                                    ?>
                                        <img src="<?=base_url()?>template/assets/images/unnamed.jpg" alt="LoveVivah" class="img-responsive" height="100%" style='border-radius: 50%;'>
                                    <?php
                                    }
                                ?>
                            </a>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="alignment_example">

                            <ul class="nav navbar-nav">
                                <li class="non-log-dropdown"><a href="<?= base_url();?>">HOME</a></li>

                                        <li class="am-dropdown"><a href="<?= base_url();?>home/listing">ACTIVE MEMBERS</a>
                                            
                                                <ul class="dropdown-content">
                                                    <li><a href="Active-member.html">Active Member</a></li>
                                                    <li><a href="premium-member.html">Premium Member</a></li>
                                                    <li><a href="free-member.html">Free Member</a></li>
                                                </ul>
                                            
                                        </li>

                                        <li><a href="<?= base_url();?>home/plans">PREMIUM PlANS</a></li>
                                        <li><a href="<?= base_url();?>home/stories">HAPPY STORIES</a></li>
                                        <li><a href="<?= base_url();?>home/contact_us">CONTACT US</a></li>
                                        <li><a href="<?= base_url();?>home/about_us">ABOUT US</a></li>
                            </ul>

                            
                            <span class="login_button">
                                <a href="" data-toggle="modal" data-target="#loginModal">Login</a>
                                <a href="#">Register</a>
                            </span>


                        </div>

                    </div>

            </nav>

        </div>
    </div>
    <style>
        .navbar-toggle {
            padding: 18px 10px;
            background: #c97a70;
        }
        .navbar-toggle .icon-bar {
            background: white;
        }
        .navbar-toggle:hover {
            padding: 18px 10px;
            background: pink;
        }
    </style>