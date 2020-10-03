<?php include_once 'footer_link.php'; ?>
<footer class="tiny-footer"><span><?=translate('copyright')?> &copy; <?=date("Y")?>, <?=$this->system_name;?>. All Rights Reserved</span></footer>

     <!--   js  -->
     <script type="text/javascript" src="<?=base_url()?>template/assets/js/bootstrap/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?=base_url()?>template/assets/js/more.js"></script>
     <script src="<?=base_url()?>template/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>



     <!-- Login Modal -->
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
</body>


</html>
