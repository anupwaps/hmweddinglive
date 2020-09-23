    <title><?=$this->db->get_where('general_settings', array('general_settings_id' => 1))->row()->value?> </title>
     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
     <link rel="icon" href="<?=base_url()?>template/assets/images/icons/favicon_medium.png" type="image/png">
     <link rel="stylesheet" href="<?=base_url()?>template/assets/css/bootstrap/css/bootstrap.min7b30.css?v=4" media="screen" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/owl.carousel.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/fonts/stylesheet.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/style4c33.css?v=32" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/slick.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/style.css" type="text/css" />
     <link rel="stylesheet" href="<?=base_url()?>template/assets/maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?=base_url()?>template/assets/css/jquery.mCustomScrollbar.min.css" type="text/css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <!--      Fotorama from CDNJS, 19 KB    -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
     <!-- script link -->
     <script src="<?=base_url()?>template/assets/js/jquery/1.9.1/jquery.min.js"></script>
     <script src="<?=base_url()?>template/assets/js/more.js"></script>
     <!-- owl.carousel js -->
     <script src="<?=base_url()?>template/assets/js/owl.carousel.min.js"></script>
     <script src="<?=base_url()?>template/assets/js/angular.min.js"></script>
     <!--  slick slider   -->
     <script src="<?=base_url()?>template/assets/js/slick.min.js"></script>

     <script src="<?=base_url()?>template/assets/js/angular-sanitize.js"></script>


     <script>
    <?php $g_set = $this->db->get_where('third_party_settings',array('type'=>'google_analytics_set'))->row()->value;
        if ($g_set == "yes") {
            $g_key = $this->db->get_where('third_party_settings',array('type'=>'google_analytics_key'))->row()->value;
        }
        else {
            $g_key = " ";
        }
    ?>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', "<?php echo $g_key; ?>", 'auto');
    ga('send', 'pageview');
    </script>

 </head>

 <body>