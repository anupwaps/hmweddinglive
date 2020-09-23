
<?php include_once 'footer_link.php'; ?>

<footer class="tiny-footer"><span><?=translate('copyright')?> &copy; <?=date("Y")?>, <?=$this->system_name;?>. All Rights Reserved</span></footer>

     <!--   js  -->
<script type="text/javascript" src="<?=base_url()?>template/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->
<script type="text/javascript" src="<?=base_url()?>template/assets/js/more.js"></script>
<script src="<?=base_url()?>template/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>template/assets/app/HomeApp7893.js?v=24"></script>
<!-- <script type="text/javascript" src="<?=base_url()?>template/assets/js/countdown/countdown.js"></script> -->
<script src="<?=base_url()?>template/assets/js/jquery.counterup.min.js"></script>
<!-- <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=2fb3a8e7372ac27c840eece197622aa4537838cf'></script> -->


<?php include_once 'modal.php'; ?>


     <style type="text/css">
         .hiring {
             animation: MoveUpDown 1s linear infinite;
             position: fixed;
             right: 10px;
             bottom: 0;
             z-index: 1000;
         }

         .counselling {
             animation: MoveUpDown 1s linear infinite;
             position: fixed;
             left: 10px;
             bottom: 30px;
         }

         @media (max-width: 767px) {
             .hiring {
                 margin-bottom: 10px;
                 display: none;
             }

             .counselling {
                 display: none;
             }
         }

         @keyframes MoveUpDown {

             0%,
             100% {
                 bottom: 0;
             }

             50% {
                 bottom: 20px;
             }
         }
     </style>
     
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script>
    $(window).load(function() {

  $(".glry img").click(function() {
    $(".lightbox").fadeIn(300);
    $(".lightbox").append("<img src='" + $(this).attr("src") + "' alt='" + $(this).attr("alt") + "' />");
    $(".filter").css("background-image", "url(" + $(this).attr("src") + ")");
    /*$(".title").append("<h1>" + $(this).attr("alt") + "</h1>");*/
    $("html").css("overflow", "hidden");
    if ($(this).is(":last-child")) {
      $(".arrowr").css("display", "none");
      $(".arrowl").css("display", "block");
    } else if ($(this).is(":first-child")) {
      $(".arrowr").css("display", "block");
      $(".arrowl").css("display", "none");
    } else {
      $(".arrowr").css("display", "block");
      $(".arrowl").css("display", "block");
    }
  });

  $(".close").click(function() {
    $(".lightbox").fadeOut(300);
    $("h1").remove();
    $(".lightbox img").remove();
    $("html").css("overflow", "auto");
  });

  $(document).keyup(function(e) {
    if (e.keyCode == 27) {
      $(".lightbox").fadeOut(300);
      $(".lightbox img").remove();
      $("html").css("overflow", "auto");
    }
  });

  $(".arrowr").click(function() {
    var imgSrc = $(".lightbox img").attr("src");
    var search = $(".glry").find("img[src$='" + imgSrc + "']");
    var newImage = search.next().attr("src");
    /*$(".lightbox img").attr("src", search.next());*/
    $(".lightbox img").attr("src", newImage);
    $(".filter").css("background-image", "url(" + newImage + ")");

    if (!search.next().is(":last-child")) {
      $(".arrowl").css("display", "block");
    } else {
      $(".arrowr").css("display", "none");
    }
  });

  $(".arrowl").click(function() {
    var imgSrc = $(".lightbox img").attr("src");
    var search = $(".glry").find("img[src$='" + imgSrc + "']");
    var newImage = search.prev().attr("src");
    /*$(".lightbox img").attr("src", search.next());*/
    $(".lightbox img").attr("src", newImage);
    $(".filter").css("background-image", "url(" + newImage + ")");

    if (!search.prev().is(":first-child")) {
      $(".arrowr").css("display", "block");
    } else {
      $(".arrowl").css("display", "none");
    }
  });

});
</script>

     <script>
         //Slider js 
         /*-------------------------------------
            Home page Slider
            -------------------------------------*/
         // Declare Carousel jquery object
         var owl = $('#home-slider');

         // Carousel initialization
         owl.owlCarousel({
             loop: true,
             margin: 0,
             navSpeed: 1200,
             nav: true,
             navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
             items: 1,
             autoplay: true,
             autoplayTimeout: 5000,
             transitionStyle: "fade",
         });


         /*-------------------------------------
            image slider
            -------------------------------------*/
         var owl = $('.image_slider');

         // Carousel initialization
         owl.owlCarousel({
             loop: true,
             margin: 0,
             responsive: true,
             navSpeed: 2000,
             items: 3,
             autoplay: true,

         });
     </script>
<script type="text/javascript">
	$(document).ready(function(){
        $('.ch_top_bar2').load('<?php echo base_url(); ?>home/top_bar_right2');
        $('.side_top_bar').load('<?php echo base_url(); ?>home/side_top_bar');
    });
</script>
<!-- Bootstrap Modal -->

<script>
    var isloggedin = "<?=$this->session->userdata('member_id')?>";

    var right_click ="<?=$this->db->get_where('general_settings',array('type'=>'right_click_option'))->row()->value?>"
    if(right_click == "on"){
            $('body').on('contextmenu', function(e) {
            return false;
        });
    }


    function confirm_accept(id) {
        if (isloggedin == "") {
            $("#active_modal").modal("toggle");
            $("#modal_header").html("Please Login");
            $("#modal_body").html("<p class='text-center'><?php echo translate('please_log_in_to_accept_this_request')?></p>");
            $("#modal_buttons").html("<button type='button' class='btn btn-danger btn-sm btn-shadow' data-dismiss='modal' style='width:25%'>Close</button> <a href='<?=base_url()?>home/login' class='btn btn-sm btn-base-1 btn-shadow' style='width:25%'>Log In</a>");
        }
        else {
            $("#active_modal").modal("toggle");
            $("#modal_header").html("Confirm Accept Request");
            $("#modal_body").html("<p class='text-center'><?php echo translate('are_you_sure_that_you_want_to_accept_this_request')?>?</p>");
            $("#modal_buttons").html("<button type='button' class='btn btn-danger btn-sm btn-shadow' data-dismiss='modal' style='width:25%'>Close</button> <a href='#' id='confirm_accept' class='btn btn-sm btn-base-1 btn-shadow' onclick='return do_accept("+id+")' style='width:25%'>Confirm</a>");
        }
    }
    function do_accept(id) {
        $("#confirm_accept").removeAttr("onclick");
        $("#confirm_accept").html("<i class='fa fa-refresh fa-spin'></i> <?php echo translate('processing')?>..");
        setTimeout(function() {
            $.ajax({
                type: "POST",
                url: "<?=base_url()?>home/accept_interest/"+id,
                cache: false,
                success: function(response) {
                    $("#active_modal .close").click();
                    $(".text_"+id).html("<small class='sml_txt'><i class='fa fa-check-circle'></i> <?php echo translate('you_have_accepted_the_interest')?></small>");
                    $(".text_"+id).attr('class', 'text-center text-success text_'+id);
                    $("#success_alert").show();
                    $(".alert-success").html("<?php echo translate('you_have_accepted_the_request')?>!");
                    $('#danger_alert').fadeOut('fast');
                    setTimeout(function() {
                        $('#success_alert').fadeOut('fast');
                    }, 5000); // <-- time in milliseconds
                },
                fail: function (error) {
                    alert(error);
                }
            });
        }, 500); // <-- time in milliseconds
    }

    function confirm_reject(id) {
        if (isloggedin == "") {
            $("#active_modal").modal("toggle");
            $("#modal_header").html("<?php echo translate('please_log_in')?>");
            $("#modal_body").html("<p class='text-center'><?php echo translate('please_log_in_to_reject_this_request')?></p>");
            $("#modal_buttons").html("<button type='button' class='btn btn-danger btn-sm btn-shadow' data-dismiss='modal' style='width:25%'><?php echo translate('close')?></button> <a href='<?=base_url()?>home/login' class='btn btn-sm btn-base-1 btn-shadow' style='width:25%'><?php echo translate('log_in')?></a>");
        }
        else {
            $("#active_modal").modal("toggle");
            $("#modal_header").html("<?php echo translate('confirm_reject_request')?>");
            $("#modal_body").html("<p class='text-center'<?php echo translate('are_you_sure_that_you_want_to_reject_this_request?')?>>");
            $("#modal_buttons").html("<button type='button' class='btn btn-danger btn-sm btn-shadow' data-dismiss='modal' style='width:25%'><?php echo translate('close')?></button> <a href='#' id='confirm_reject' class='btn btn-sm btn-base-1 btn-shadow' onclick='return do_reject("+id+")' style='width:25%'><?php echo translate('confirm')?></a>");
        }
    }
    function do_reject(id) {
        $("#confirm_reject").removeAttr("onclick");
        $("#confirm_reject").html("<i class='fa fa-refresh fa-spin'></i> <?php echo translate('processing')?>..");
        setTimeout(function() {
            $.ajax({
                type: "POST",
                url: "<?=base_url()?>home/reject_interest/"+id,
                cache: false,
                success: function(response) {
                    $("#active_modal .close").click();
                    $(".text_"+id).html("<small class='sml_txt'><i class='fa fa-times-circle'></i><?php echo translate('you_have_rejected_the_interest')?></small>");
                    $(".text_"+id).attr('class', 'text-center text-danger text_'+id);
                    $("#danger_alert").show();
                    $(".alert-danger").html("<?php echo translate('you_have_rejected_this_request!')?>");
                    $('#success_alert').fadeOut('fast');
                    setTimeout(function() {
                        $('#danger_alert').fadeOut('fast');
                    }, 5000); // <-- time in milliseconds
                },
                fail: function (error) {
                    alert(error);
                }
            });
        }, 500); // <-- time in milliseconds
    }
</script>

 </body>

 </html>