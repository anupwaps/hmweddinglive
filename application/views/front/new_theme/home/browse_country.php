<?php
    $country_list = $this->db->get('country')->result();
    // print_r($country_list);
?>
     <section class="browse-matrimonial">
        <div class="wrapper mobile-view">
            <button class="myButton" onclick="$('#fotter-mobile').slideToggle('slow');"><span>Browse Matrimonial Profiles</span> <i class="fa fa-plus-circle"></i> </button>

            <div id="fotter-mobile" style="display:none">

                <ul>
                    <li class="heading">Country:</li>
                    <?php foreach($country_list as $cl){?>
                        <li><a href="<?= base_url() . 'home/listing/search_by_country/'.$cl->country_id ?>"><?= strtoupper($cl->name); ?></a></li>
                    <?php }?>

                </ul>
            </div>
        </div>
        <div class="wrapper desktop-view">
            <h2 class="text-center">Browse Matrimonial Profiles By</h2>

            <ul>
                <li class="heading">Country:</li>
                <?php foreach($country_list as $cl){?>
                    <li><a href="<?= base_url() . 'home/listing/search_by_country/'.$cl->country_id ?>"><?= strtoupper($cl->name); ?></a></li>
                <?php }?>
            </ul>
        </div>


    </section>