<link rel="stylesheet" href="<?=base_url()?>template/assets/css/faq.css">

<!--    faq part stars-->
<div class="container">
        <div class="row cover_title">
            <div class="col-md-12 col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h1 class="heading">Frequently Asked Questions</h1>
                    <span></span>
                    <p>Our Frequently Asked Questions here.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php
                        $faqs = json_decode($this->db->get_where('general_settings', array('type' => 'faqs'))->row()->value, true);
                        if (!empty($faqs)) {
                            $i = 1;
                            foreach ($faqs as $faq) {
                            ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" class='<?php if($i>1){?>collapsed<?php }?>' data-parent="#accordion" href="#collapseOne-<?=$i?>" aria-expanded="true" aria-controls="collapseOne-<?=$i?>">
                                        <?=$faq['question']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-<?=$i?>" class="panel-collapse collapse <?php if($i==1){?>in<?php }?>" role="tabpanel-<?=$i?>" aria-labelledby="headingOne-<?=$i?>">
                                <div class="panel-body">
                                    <p>
                                    <?=$faq['answer']?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php
                                $i++;
                            }
                        } else {
                        ?>
                            <div class='text-center pt-5 pb-5'><i class='fa fa-exclamation-triangle fa-5x'></i><h5><?=translate('no_FAQ_posted_yet!')?></h5></div>
                        <?php
                        }
                    ?>
                </div>
            </div>
            <!--- END COL -->
        </div>
        <!--- END ROW -->
    </div>
    <!--    faq part ends-->