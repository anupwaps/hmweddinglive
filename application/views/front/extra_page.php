<?php include_once 'new_theme/top/extra_head.php'; ?>


<!--Header Start-->
<script type="text/javascript">
	$(document).ready(function(){
    $("#registerBTN").removeAttr('onclick');	
	 $("#registerBTN").attr('href','registration.html');
		
	});
   </script>
<style>
.mob-search-pop{
	display:none;
}

</style>
   <style type="text/css">
   
   .container-fluid{
	   position:relative;
	   
   }
   .special-offer999{	
	position:absolute; 
	top:0px; 
	left:200px; 
	z-index:10000;	
	}
.specialmodal .close{
	padding:10px 15px;
	opacity: .7;
	}
.SpecialOffer-sec{
	padding:30px;
	text-align:center;
	}
.SpecialOffer-sec h3{	
	line-height:33px;
	font-size:20px;
	margin:0px;
	padding:0px;
	}
.SpecialOffer-sec h3 strong span{
	font-size:35px;
	font-weight:600;
	color:#090;
	}
	
@media (max-width: 767px){
.specialmodal{
	width:95%;
	}
.special-offer999{	
	position:absolute; 
	top:0px; 
	left:65px; 
	z-index:10000;	
	}
}
.specialbtn{
	font-size:20px;
	border-radius:3px;
	padding:10px 0px;
	font-weight:600;
	text-transform:uppercase;
	box-shadow: 0px 0px 34px rgba(205, 49, 98, 0.53);
	}
.footer {
	background: #EAF5F9 !important;
}
</style>
   
 
 
<!--Desktop Navbar -->

	
<?php include_once 'new_theme/top/'.$top;?>
 

  
    <?php include_once 'new_theme/extra_page/'.$page;?>
<!--Header End--> 

    
    <?php include_once 'new_theme/bottom/extra_footer.php'; ?>
    