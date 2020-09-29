<section id="bg_map">
    <div class="container section-title text-center">
        <div class="row">
            <h2>Our Location</h2>
        </div>

    </div>
    <div class="container">
        <div class="map">
        <div>
            <?php $location = $this->db->get_where('general_settings', array('type' => 'location_map'))->row()->value; ?>
            <iframe src="<?= $location; ?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    </div>


</section>