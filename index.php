<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>RITE Solutions Limited</title>

        <!-- core CSS -->
        <link href="assets/fornt_end/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/fornt_end/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/fornt_end/css/animate.min.css" rel="stylesheet">
        <link href="assets/fornt_end/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/fornt_end/css/main1.css" rel="stylesheet">
        <link href="assets/fornt_end/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="assets/fornt_end/images/ico/favicon1.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/fornt_end/assets/fornt_end/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/fornt_end/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/fornt_end/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/fornt_end/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->
    <body class="homepage">
        <?php include './includes/menu.php'; ?>

        <?php
        if (isset($pages)) {
            if ($pages == 'contact') {
                include './pages/contact_content.php';
            } elseif ($pages == 'download') {
                include './pages/documentation_content.php';
            } elseif ($pages == 'about') {
                include './pages/about_content.php';
            } elseif ($pages == 'UC&C') {
                include './pages/UC&C_content.php';
            } elseif ($pages == 'video_surveillance') {
                include './pages/video_surveillance_content.php';
            } elseif ($pages == 'telephony') {
                include './pages/telephony_content.php';
            } elseif ($pages == 'wlan') {
                include './pages/wlan_content.php';
            } elseif ($pages == 'servers') {
                include './pages/servers_content.php';
            } elseif ($pages == 'storage') {
                include './pages/storage_content.php';
            } elseif ($pages == 'cloud_computing&data_center') {
                include './pages/cloud_computing&data_center_content.php';
            } elseif ($pages == 'data_center') {
                include './pages/data_center_content.php';
            } elseif ($pages == 'networking') {
                include './pages/networking_content.php';
            } elseif ($pages == 'switches') {
                include './pages/switches_content.php';
            } elseif ($pages == 'access') {
                include './pages/access_content.php';
            } elseif ($pages == 'technical_support') {
                include './pages/technical_support_content.php';
            } elseif ($pages == 'on_site_project_service') {
                include './pages/on_site_project_service_content.php';
            } elseif ($pages == 'consulting_services') {
                include './pages/consulting_services_content.php';
            } elseif ($pages == 'integration_services') {
                include './pages/integration_services_content.php';
            } elseif ($pages == 'customer_support') {
                include './pages/customer_support_content.php';
            } elseif ($pages == 'firewall') {
                include './pages/firewall_content.php';
            } elseif ($pages == 'copper') {
                include './pages/copper_content.php';
            } elseif ($pages == 'fiber') {
                include './pages/fiber_content.php';
            } elseif ($pages == 'visitor') {
                include './pages/visitor_content.php';
            } elseif ($pages == 'managed_service') {
                include './pages/managed_service_content.php';
            }
        } else {
            include './pages/home_content.php';
        }
        ?>

        <?php include './includes/footer.php'; ?>
        <script src="assets/fornt_end/js/script.js"></script>
        <script src="assets/fornt_end/js/menu.js"></script>
        <script src="assets/fornt_end/js/jquery-latest.min.js"></script>
        <script src="assets/fornt_end/assets/fornt_end/js/jquery.js"></script>
        <script src="assets/fornt_end/js/bootstrap.min.js"></script>
        <script src="assets/fornt_end/js/jquery.prettyPhoto.js"></script>
        <script src="assets/fornt_end/js/jquery.isotope.min.js"></script>
        <script src="assets/fornt_end/js/main.js"></script>
        <script src="assets/fornt_end/js/wow.min.js"></script>
    </body>
</html>