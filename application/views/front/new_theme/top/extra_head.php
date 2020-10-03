<?php include_once 'meta.php'; ?>
<title><?=$this->db->get_where('general_settings', array('general_settings_id' => 1))->row()->value?> </title>
<?php
    $favicon = $this->db->get_where('frontend_settings', array('type' => 'favicon'))->row()->value;
    $favicon = json_decode($favicon, true);
    if (!empty($favicon) && file_exists('uploads/favicon/'.$favicon[0]['image'])) {
?>
        <link href="<?=base_url()?>uploads/favicon/<?=$favicon[0]['image']?>" rel="icon" type="image/png">
<?php
    }
    else {
?>
        <link href="<?=base_url()?>template/assets/images/icons/favicon_medium.png" rel="icon" type="image/png">
<?php
    }
?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>template/assets/fontawesome/css/font-awesome.min.css" media="screen" type="text/css" /> 
<script src="<?=base_url()?>template/assets/js/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/bootstrap/css/bootstrap.min7b30.css?v=4" media="screen" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/bootstrap/css/bootstrap-select.min7b30.css?v=4" media="screen" type="text/css" />	
<link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:300,400,400i,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Squada+One" rel="stylesheet"> 

<!--about us css linkup-->
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/common.css">
<!--about us css linkup-->
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/overridef15d.css?v=47" media="screen" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/custom2c06.css?v=116" media="screen" type="text/css" />	


<link rel="stylesheet" href="<?=base_url()?>template/assets/css/reg-style65e3.css?v=100" media="screen" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/owl-carousel/owl.carousel.min8d0c.css?v=26" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/owl-carousel/owl.theme.default.min8d0c.css?v=26" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/animate2.min.css" media="screen" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/style4c33.css?v=32" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/style.css" type="text/css" />


<link rel="stylesheet" href="<?=base_url()?>template/assets/css/responsive.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/counselling/responsive.css" type="text/css" />

<script src="<?=base_url()?>template/assets/js/jquery/1.9.1/jquery.min.js"></script>
<script src="<?=base_url()?>template/assets/js/more.js"></script>

<!-- owl.carousel js -->
<script src="<?=base_url()?>template/assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>template/assets/js/angular.min.js"></script>
<!--  slick slider   -->
<script src="<?=base_url()?>template/assets/js/slick.min.js"></script>

<script src="<?=base_url()?>template/assets/js/angular-sanitize.js"></script>
</head>

<body>  