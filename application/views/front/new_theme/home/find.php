        <!-- /.Find search section-->
        <div class="find-section">
            <!-- Find search section-->
            <div class="container container-sm">
                <div class="row">
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs finder-block">
                        <div class="finder-caption">
                            <h2 class="tagline-desktop">Dream it. Believe it. Make it happen! </h2>
                        </div>
                        <div class="finder-form-transparent text-left search_bar">
                            <h2 class="tagline-mobile">Dream it. Believe it. Make it happen! </h2>
                            <form name="login" action="<?=base_url()?>home/listing/home_search" method="POST">
                                <div class="row row-no-gutters">
                                    <div class="search-section">

                                        <div class="form-group col-lg-2 col-md-2 col-sm-3 col-xs-3 no-padding land-lookingfor">
                                        <?php if (!empty($this->session->userdata['member_id'])) { ?>
                                            <select name="gender" id="Looking" class="custom-select sources" placeholder="Looking for a">
                                            <?php $member_gender = $this->db->get_where('member',array('member_id'=>$this->session->userdata['member_id']))->row()->gender; ?>
                                                <?php if($member_gender == '2') { ?>
                                                    <option value="1" >Groom</option>
                                                <?php } elseif ($member_gender == '1') { ?>
                                                    <option value="2" >Bride</option>
                                                <?php } ?>
                                            </select>
                                            <?php } else {?>
                                            <select name="gender" id="Looking" class="custom-select sources" placeholder="Looking for a">
                                                    <option value="1" >Groom</option>
                                                    <option value="2" >Bride</option>
                                            </select>
                                        <?php }?>
                                        </div>

                                        <div style="display: flex" class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3 no-padding land-agefrom agefromto_mob-w">
                                            <select name="age_from" id="agefrom" class="custom-select sources coll">

                                            <?php $i = 17; while($i <= 80){ $i++;?>
                                                <option value="<?= $i;?>"   title="<?= $i;?> yrs"><?= $i; ?> yrs </option>
                                            <?php }?>

                                            </select>

                                            <select name="age_to" id="ageto" class="custom-select sources colr">
                                            <?php $i = 17; while($i <= 80){ $i++;?>
                                                <option value="<?= $i;?>"   title="<?= $i;?> yrs"><?= $i; ?> yrs </option>
                                            <?php }?>

                                            </select>
                                        </div>




                                        <div style="display: flex" class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-4 no-padding land-agefrom agefromto_mob-w">
                                            <select name="min_height" id="height" class="custom-select sources coll">

                                                <option value="" selected title="Height From"></option>

                                                <option value="4.0" title="4.0">4.0"</option>
                                                <option value="4.1" title="4.1">4.1"</option>
                                                <option value="4.2" title="4.2">4.2"</option>
                                                <option value="4.3" title="4.3">4.3"</option>
                                                <option value="4.4" title="4.4">4.4"</option>
                                                <option value="4.5" title="4.5">4.5"</option>
                                                <option value="4.6" title="4.6">4.6"</option>
                                                <option value="4.7" title="4.7">4.7"</option>
                                                <option value="4.8" title="4.8">4.8"</option>
                                                <option value="4.9" title="4.9">4.9"</option>
                                                <option value="5.0" title="5.0">5.0"</option>
                                                <option value="5.1" title="5.1">5.1"</option>
                                                <option value="5.2" title="5.2">5.2"</option>
                                                <option value="5.3" title="5.3">5.3"</option>
                                                <option value="5.4" title="5.4">5.4"</option>
                                                <option value="5.5" title="5.5">5.5"</option>
                                                <option value="5.6" title="5.6">5.6"</option>
                                                <option value="5.7" title="5.7">5.7"</option>
                                                <option value="5.8" title="5.8">5.8"</option>
                                                <option value="5.9" title="5.9">5.9"</option>
                                                <option value="6.0" title="6.0">6.0"</option>




                                            </select>

                                            <select name="max_height" id="height" class="custom-select sources colr">

                                                    <option value="" selected title="Height To"></option>

                                                    <option value="4.0" title="4.0">4.0"</option>
                                                    <option value="4.1" title="4.1">4.1"</option>
                                                    <option value="4.2" title="4.2">4.2"</option>
                                                    <option value="4.3" title="4.3">4.3"</option>
                                                    <option value="4.4" title="4.4">4.4"</option>
                                                    <option value="4.5" title="4.5">4.5"</option>
                                                    <option value="4.6" title="4.6">4.6"</option>
                                                    <option value="4.7" title="4.7">4.7"</option>
                                                    <option value="4.8" title="4.8">4.8"</option>
                                                    <option value="4.9" title="4.9">4.9"</option>
                                                    <option value="5.0" title="5.0">5.0"</option>
                                                    <option value="5.1" title="5.1">5.1"</option>
                                                    <option value="5.2" title="5.2">5.2"</option>
                                                    <option value="5.3" title="5.3">5.3"</option>
                                                    <option value="5.4" title="5.4">5.4"</option>
                                                    <option value="5.5" title="5.5">5.5"</option>
                                                    <option value="5.6" title="5.6">5.6"</option>
                                                    <option value="5.7" title="5.7">5.7"</option>
                                                    <option value="5.8" title="5.8">5.8"</option>
                                                    <option value="5.9" title="5.9">5.9"</option>
                                                    <option value="6.0" title="6.0">6.0"</option>
                                                </select>

                                        </div>

                                        <!--
                                        <div class="form-group col-lg-1 col-md-1 col-sm-3 col-xs-3 no-padding land-agefrom agefromto_mob-w">

                                        </div>
-->


                                        <div class="form-group col-lg-2 col-md-2 col-sm-3 col-xs-3 no-padding land-religion">



                                            <select name="religion" id="Religion" class="custom-select sources" placeholder="Select Religion">
                                            <?php 
                                                $religions = $this->Rest_model->SelectDataOrder('religion', '*', '','religion_id','desc');
                                                    foreach($religions as $r){
                                                ?>
                                                <option class="list" value='<?= $r->religion_id?>' title=""><?= $r->name?></option>
                                            <?php }?>	

                                            </select>
                                        </div>

                                        <div class="form-group col-lg-1 col-md-2 col-sm-3 col-xs-3 no-padding">


                                            <select name="Country[]" id="Country" class="custom-select sources arrow-down" placeholder="Country">

                                            <?php 
                                                $religions = $this->Rest_model->SelectDataOrder('country', '*', '','name ','asc');
                                                    foreach($religions as $r){
                                                ?>
                                                <option class="list" value='<?= $r->country_id?>' title=""><?= $r->name?></option>
                                            <?php }?>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-1 col-md-1 col-sm-12 col-xs-12 no-padding land-search">
                                           <button type="submit" class="btn btn-primary bor-rmd btn-lgg btn-block ripplelink" id="HP_Search_Now"><i class="fa fa-search" id="HP_Search_Now"></i></button>
                                           <!-- <a href="#">
                                               <i class="fa fa-search" id="HP_Search_Now"></i>
                                           </a> -->
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.Find search section-->
    </div>
    <!-- slider end-->