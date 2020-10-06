<link rel="stylesheet" href="<?=base_url()?>template/assets/css/plans.css">
<?php 
    $background_image = $this->db->get_where('frontend_settings', array('type' => 'premium_plans_image'))->row()->value;
    $background_image_data = json_decode($background_image, true);

?>

<div class="main page-bg" style="background:#fff;">
        <section class="container-full plans" style="background-image: url(<?=base_url()?>uploads/premium_plans_image/<?=$background_image_data[0]['image']?>); background-position: bottom bottom;">
            <div class="box">
                <div class="container">
                    <div class="row elitepack_top">
                        <h1 class="animate__animated animate__bounce">Premium Plans</h1>
                    </div>
                </div>
            </div>

        </section>


    </div>

    <div class="mobile-padding-lr main_bg_img change" style="margin-top:60px;">
        <div class="container">
            <div class="pp">
                <div class="row">
                <?php if (!empty($danger_alert)): ?>
                    <div class="col-12" id="danger_alert">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <?=$danger_alert?>
                        </div>
                    </div>
                <?php endif ?>
                <?php foreach ($all_plans as $value): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="LV_Pelite-wrap">
                            <div class="LV_Pelite-card">
                                    <div class="elitecardpad plan_1">
                                        <div class="elitecardgap"></div>
                                        <div class="elitepack_name"><?=$value->name?></div>
                                        <div class="elitepack_price"><?=currency($value->amount)?> </div>
                                        <div class="elitepack_dblbor"></div>
                                        <div class="elitepack_features ">
                                            <ul>
                                                <li><i style="Color:red" class="fa fa-check" aria-hidden="true"></i> <?=translate('express_interests:')?> <?=$value->express_interest?> <?=translate('times')?></li>
                                                <li><i style="Color:red" class="fa fa-check" aria-hidden="true"></i> <?=translate('direct_messages:')?> <?=$value->direct_messages?> <?=translate('times')?></li>
                                                <li><i style="Color:red" class="fa fa-check" aria-hidden="true"></i><?=translate('photo_gallery:')?> <?=$value->photo_gallery?> <?=translate('images')?></li>
                                            </ul>
                                        </div>
                                        <div class="elitepack_btn">
                                        <?php 
                                        if ($value->plan_id != 1) {
                                            $purchase_link = base_url()."home/plans/subscribe/".$value->plan_id;
                                        }
                                        else {
                                            $purchase_link = "#";
                                        }
                                        ?>
                                            <a href="<?=$purchase_link?>">
                                                <button type="submit" class="btn btn-elitepack btn-LV-Elite butt">Get The Package</button></a>
                                        </div>
                                    </div>
                                    <div class="goldbor"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>