<?php

  $query = $server->query("SELECT * FROM `users` ORDER BY ID");
  $memberall = $query->num_rows;

  $counter_file = "counter.txt";
  $count = file_get_contents($counter_file);
?>
<head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" type="image/png" href="favicon.ico"/>
		<!-- Page Title -->
        <title><?php echo $settings["title"]; ?></title>
		<!-- Meta Description -->
        <meta name="description" content="<?php echo $settings["description"]; ?>">
        <meta name="keywords" content="<?php echo $settings["keyword"]; ?>">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css?time=<?=time();?>">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css?time=<?=time();?>">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>