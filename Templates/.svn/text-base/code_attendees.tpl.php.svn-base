<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<?php require_once('includes/stylesheets.inc.php'); ?>

<!-- tablecloth.css-->
	<link href="../css/tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="../css/tablecloth/tablecloth.js"></script>
	
<title>Display Code Attendees</title>
</head>
<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');
	?>
<body>
   <?php $this->RenderBegin(); ?>
	<div class="container prepend-top">
		<?php require_once('header_new.tpl.php'); ?>
		
		<div class="push-3 span-12 byellow box" id="welcome">
			<h3 class="red">
			    Find an Ally from CODE: 
			    <?			
			        echo $this->strCode;
                ?>
            </h3>
			
			<p>The sales reps <b>target the same customers as you</b>.  
			So try to reach out to as many potential partners to <b>begin exchanging 
			leads</b> today!</p><br />
 
			<p>Just <strong>click on their name </strong>to see a profile and then *invite* 
			them to join your network! </p>
			
		</div> <!--welcome-->
			<div class="span-13 push-3"> <!-- use QDataGrid -->
			<?php $this->dtgAllies->Render(); ?>
		</div>
	</div> <!--container-->
	<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
 	<?php $this->RenderEnd(); ?>
     
</body>
</html>
