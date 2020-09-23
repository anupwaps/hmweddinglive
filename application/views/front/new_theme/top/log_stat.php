<?php
if (!empty($this->session->userdata['member_id'])) {

?>
    <a href="<?=base_url()?>home/profile" data-toggle="modal"><button type="submit"  class="btn btn-primary ripplelink" id="HP_Banner_Register_CTA">
    <?php
        $profile_image = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'profile_image');
        $images = json_decode($profile_image, true);
        if (file_exists('uploads/profile_image/'.$images[0]['thumb'])) {
        ?>
            <div class="top_nav_img" style="background-image: url(<?=base_url()?>uploads/profile_image/<?=$images[0]['thumb']?>)"></div>
        <?php
        }
        else {
        ?>
            <div class="top_nav_img" style="background-image: url(<?=base_url()?>uploads/profile_image/default_image.png"></div>
        <?php
        }
    ?>
    <?=$this->session->userdata['member_name']?>
    </button></a>
    <a href="<?=base_url()?>home/logout">
    <button type="submit" class="btn btn-primary ripplelink" data-toggle="modal" id="HP_Login_CTA">Logout</button>
    </a>
<?php	
}
else{
?>	
    <a href="#" data-toggle="modal" data-target="#Register"><button type="submit"  class="btn btn-primary ripplelink" id="HP_Banner_Register_CTA">Register Free!</button></a>
    <a href="#" data-toggle="modal" data-target="#loginModal"><button type="submit" class="btn btn-primary ripplelink"  id="HP_Login_CTA">Login</button></a>
<?php }?>