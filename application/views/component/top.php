<?php
$site_name = ' - Abubakar Usman';
if (empty($metadata_seo->seo_title)) {
	$title = $metadata_site->site_title;
	$description = $metadata_site->site_desc;
	$keywords = $metadata_site->site_keyword;
}

else {
	$title = $metadata_seo->seo_title.$site_name;
	$keywords = $metadata_seo->seo_keyword;
	$description = $metadata_seo->seo_desc;
	if (!empty($seo_serpis)) {
		$field_kat = 'services_name';
		$field_desc = 'services_desc';
		$title = $seo_serpis->$field_kat.$site_name;
		$description = $seo_serpis->$field_desc.$site_name;
	}
	elseif(!empty($seo_news)) {
		$field_title = 'news_title';
		$field_desc = 'news_desc';
		$title = $seo_news->$field_title.$site_name;
		$description = $seo_news->$field_desc;
	}
	elseif(!empty($seo_event)) {
		$field_title = 'news_title';
		$field_desc = 'news_desc';
		$title = $seo_event->$field_title.$site_name;
		$description = $seo_event->$field_desc;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?=$description?>">
		<meta name="keywords" content="<?=$keywords?>">
		<title><?=$title?></title>
		<!-- Bootstrap -->
		<link href="<?php echo base_url();?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Fonts Awesome -->
		<link href="<?php echo base_url();?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- bxSlider Javascript file -->
		<link href="<?php echo base_url();?>plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />
		<!-- Owl Carousel Javascript file -->
		<link href="<?php echo base_url();?>plugins/owl-carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" />
		<!-- Fancybox file -->
		<link href="<?php echo base_url();?>plugins/fancybox/dist/jquery.fancybox.min.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="<?php echo base_url();?>plugins/fancyapp/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" rel="stylesheet" />
		<!--javascript zebra-datepicker -->
		<link href="<?php echo base_url();?>plugins/zebra-datepicker/public/css/default.css" type="text/css" rel="stylesheet">
		<!-- LWD Style -->
		<link href="<?php echo base_url();?>dist/css/animate.css" rel="stylesheet">
		<link href="<?php echo base_url();?>dist/css/lwd.style.css" rel="stylesheet">
		<link href="<?php echo site_url('dist/img/assets/fav.png');?>" rel="shortcut icon" type="image/ico">
	</head>
<body>
