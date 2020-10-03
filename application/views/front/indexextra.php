<?php include_once 'new_theme/home.php'; ?>




     <script type="text/javascript" language="javascript">
         function openregisterModal() {
             $('#loginModal').modal('hide');
             $('#Register').modal('show');
         }
     </script>

     <!-- Sidebar Holder -->
     <?php include_once 'new_theme/top/sidebar.php'; ?>
     <!--  -->

     <!-- Aadhaar Holder right-->

     <div class="overlay"></div>

     <?php include_once 'new_theme/top/topbar.php'; ?>

     <style>
         .lv-alert {
             display: none;
         }

         .display-block {
             display: block;
         }
     </style>
     <!--Header End-->
     <style type="text/css">
         body.modal-open {
             position: static !important;
             overflow: visible;
             padding: 0 !important;
         }
     </style>
 <?php include_once 'new_theme/'.$page;?>



<?php include_once 'new_theme/bottom/footer.php'; ?>
