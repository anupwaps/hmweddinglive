    <title><?=$this->db->get_where('general_settings', array('general_settings_id' => 1))->row()->value?> </title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,900;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">
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
     <link rel="stylesheet" href="<?=base_url()?>template/assets/css/bootstrap/css/bootstrap.min7b30.css?v=4" media="screen" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/owl.carousel.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/fonts/stylesheet.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/style4c33.css?v=32" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/slick.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/style.css" type="text/css" />
     <link rel="stylesheet" href="<?=base_url()?>template/assets/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url()?>template/assets/css/counselling/responsive.css" type="text/css" />
     <link rel="stylesheet" href="<?=base_url()?>template/assets/maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?=base_url()?>template/assets/css/jquery.mCustomScrollbar.min.css" type="text/css" />
     <!--      Fotorama from CDNJS, 19 KB    -->
     <link rel="stylesheet" href="<?=base_url()?>template/assets/css/fotorama/fotorama.css" type="text/css" />
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
<style>
    .lv-alert {
        display: none;
    }

    .display-block {
        display: block;
    }
    body.modal-open {
            position: static !important;
            overflow: visible;
            padding: 0 !important;
        }
    .bg-prods {
            background: #180405 url(assets/images/Elite-bg1.jpg) bottom repeat-x;
            min-height: 400px;
            border-bottom: #f7e1e6 solid 1px;
        }

        .prod-ops {
            padding: 20px;
            text-align: center;
            border-radius: 50px 0px;
            box-shadow: #180408 1px 1px 6px;
            /*background-image: linear-gradient(to top, #49082a 0%, #170104 100%);*/
            margin-bottom: 10px;
            border: solid 1px rgba(255, 255, 255, 0.13);
            background: #0b0b0b url(assets/images/back.jpg) no-repeat center top;
        }

        .total-single-service-area .single-services-area {
            background: url(assets/images/bg-box.png) no-repeat;
            padding: 20px 0;
            transition: all 0.5s ease 0s;
            background-size: cover;
            background-position: 0 0;
        }

        .total-single-service-area .single-services-area:hover {
            background: url(assets/images/bg-box-hover.png) no-repeat;
            padding: 30px 0;
            transition: all 0.5s ease 0s;
            background-size: cover;
            background-position: 0 0;
        }

        .total-single-service-area .single-services-area h3 {
            font-family: 'Open Sans', Arial;
            font-size: 18px;
            color: #fff;
            font-weight: 600;
            position: relative;
            margin: 20px 0px 15px 0px;
            line-height: 35px;
            transition: all 0.5s ease 0s;
        }

        .total-single-service-area .single-services-area h3 strong {
            color: #cd3162;
        }

        .total-single-service-area .single-services-area h3 span {
            font-weight: 700;
            color: #e9b52e;
            font-style: italic;
            text-transform: uppercase;
        }

        .read-more {
            display: inline-block;
        }

        .read-more a {
            display: block;
            padding: 10px 30px;
            font-weight: 600;
            border: 1px solid;
            transition: all 0.5s ease 0s;
            -webkit-border-radius: 40px;
            -moz-border-radius: 40px;
            border-radius: 40px;
            color: #fff;
            border-color: #4f46ff;
        }

        .read-more a:hover {
            background: #4f46ff;
            color: #ffffff;
        }
</style>

 </head>

 <body>