<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A unique online portal which sells latest gadgets created by hobiests.">

        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>LuckyBuy</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/resources/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/resources/favicon/favicon-16x16.png">
		<link rel="manifest" href="/resources/favicon/site.webmanifest">
		<link rel="mask-icon" href="/resources/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/resources/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-config" content="/resources/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <header>
            <div class="shopbox">
                <h1>Welcome to LuckyBuy!</h1>
                <h3>The best place to get undiscovered gadgets.</h3>
                <a class="btn createbutton" href="saleday.php" target="_blank">Sale Day</a>
                <a class="btn createbutton" href="bau.php" target="_blank">Normal Day</a>
            </div>

        </header>

		    <footer>
            <p class="footerline01"> You are being served from the <?php
            $url = "http://169.254.169.254/latest/meta-data/instance-id";
            $instance_id = file_get_contents($url);
            echo "Instance ID: " . $instance_id . "<br/>";
            ?>
            Hosted in the Availability <?php
            $url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
            $zone = file_get_contents($url);
            echo "Zone: " . $zone . "<br/>";
            ?>
            As of now the <?php
            echo "CPU load is ";
  	        include 'currentload.php';
  	        echo "";
            ?>
        </p>
        <p class="footerline02">
          Thank you for your patronage!
        </p>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

    </body>

</html>
