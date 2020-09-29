<section id="bg_video">
    <div class="container video">
        <div class="row">
            <div class="col-md-8 bg-img left">
                <div class="video-cont">
                    <iframe src="<?php echo $youtube = $this->db->get_where('general_settings', array('type' => 'youtube_link'))->row()->value; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>


            <div class="col-md-4 bg-img right">
                <div class="vid-info">
                    <p>
                        <?php echo $youtube = $this->db->get_where('general_settings', array('type' => 'youtube_text'))->row()->value; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>