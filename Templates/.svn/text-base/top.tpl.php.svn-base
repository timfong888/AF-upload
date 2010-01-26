<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php $domain = (__DOMAIN__) ; ?>
	
	<link href="http://<?php echo $domain ?>/css/style.css" rel="stylesheet" type="text/css"  />
	<link href="http://<?php echo $domain ?>/css/style2.css" rel="stylesheet" type="text/css"  />
    <?php require_once(__INCLUDES__ . "/stylesheets.inc.php"); ?>
	<?php require_once(__TEMPLATES__ . "/header.global.tpl.php"); ?>

	<?php $page_URL = $_SERVER["REQUEST_URI"]; 
		$url_path = parse_url($page_URL,PHP_URL_PATH);

		if ($url_path = '/account_profile'){
			if(isset($_GET["accountname"])){
				$account_value = $_GET["accountname"];
				$account_value = str_replace('_',' ',$account_value);
				echo "<title>Business Contacts for " . $account_value . "</title>";
			};
		} elseif($url_path = '/user'){
			if(isset($_GET));
		} else {
				echo "<title>Allyforce: Better Prospecting through Networking with Sales Reps </title>";
		}
	?> 
</head>

<style type="text/css">
		#banner_menu {
			margin-left: 500px;
		}
		
		#banner_menu a {
			color: #999999;
			border: none;

		}
		#banner_index {
			float: none;
		}
		#banner_index a {
			border: none;
		}
		#banner_index img {
			border: none;
		}
		#banner_menu span{
			font-size: 20px;
			color: #2990FF;
			font-weight: bold;
			
		}
		

</style>
<body>
	<div id="container">

		<div id="banner_index">
			<a href="/index.php" ><img alt="logo" src="http://<?php echo $domain ?>/images/logo_beta.png" /></a>
			
			<div id="banner_menu">
				<a href="/login.php"><span>login</span></a> &nbsp;  | &nbsp; <a href="/about.php">about us</a> &nbsp; 
				|&nbsp; <a href="/tour.php">tour</a> &nbsp; |&nbsp; <a href="http://blog.allyforce.com">blog</a> &nbsp; | &nbsp;<a href="/html/tos.htm">terms of service</a> &nbsp; |&nbsp; 
				<a href="/html/privacy.htm">privacy policy</a>
			</div>
							
	   </div><!-- /banner -->

