
<?php
    $home_slider_image = $this->db->get_where('frontend_settings', array('type' => 'home_slider_image'))->row()->value;
    $home_searching_heading = $this->db->get_where('frontend_settings', array('type' => 'home_searching_heading'))->row()->value;

    $slider_image = json_decode($home_slider_image, true);

    // for slider dynamic margin
    $found = 0;
    if ($this->db->get_where('frontend_settings', array('type' => 'spiritual_and_social_background'))->row()->value != "yes") { $found++; }
    if ($this->db->get_where('frontend_settings', array('type' => 'language'))->row()->value != "yes") { $found++; };
?>


<div id="rs-slider" class="slider-overlay-2">
    <div id="home-slider">
    
    <?php foreach ($slider_image as $image): ?>
      <div class="item">
        <img src="<?=base_url()?>uploads/home_page/slider_image/<?=$image['img']?>" alt="Slide1" />
      </div>
    <?php endforeach ?> 

    </div>
</div>