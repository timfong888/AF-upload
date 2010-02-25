<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<?php if (isset($strPageTitle)) { ?>
		<title><?php _p($strPageTitle); ?></title>
<?php } ?>
	<?php require_once('includes/stylesheets.inc.php'); ?>
    
	
</head>
<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	#require( __TEMPLATES__  . '/top.tpl.php');
	?>
<body>
   <?php $this->RenderBegin(); ?>
	<div class="container" id="code_attendees">
		<?php $select_home = "0" ;?>
		<?php $select_allies = "0" ;?>
		<?php $select_targets = "0" ;?>
	    <?php $select_threads = "0" ;?>
		<?php require_once('header_new.tpl.php'); ?>

		<div id="add_code">
			<h2>Add Another Code</h2>
			<div id="message">
				<?php $this->lblMessage->Render()?>
			</div>
			
			<div class="row">
				<span class="label">Code</span>
				<span class="formfield"><?php $this->txtNewCode->RenderWithError(); ?></span>
			</div>
			<div class='button'>
				<?php $this->btnAddCode->Render(); ?>
			</div>
					
		</div>
		<div id="code_explain">
			<h2>
			    Find an Ally from CODE: 
			    <span><?			
			        echo $this->strCode;
                ?></span>
            </h2>
			
			<p>These sales reps <b>target the same customers as you</b>.  
			So try to reach out to as many potential partners to <b>begin exchanging 
			leads</b> today!</p>
 
			<p>Just <strong>click on their name </strong>to see a profile and then *invite* 
			them to join your network! </p>
			
		</div> <!--code_explain-->
		
		<div id="code_grid"> <!-- use QDataGrid -->
			<?php $this->dtgAllies->Render(); ?>
		</div> <!--code_grid-->
	</div> <!--container-->
	<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
 	<?php $this->RenderEnd(); ?>
     
</body>
</html>
