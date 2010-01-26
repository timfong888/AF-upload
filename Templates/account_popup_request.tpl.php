<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Account Info - Gymboree</title>
		
		<?php require_once('includes/stylesheets-no-facebox.inc.php'); ?>
		
	</head>
		
	<body>
	<?php $this->RenderBegin(); ?>
		<div class="span-14">
			<div class="span-13 center last" id="account-popup">
				<h3 class="bottom"><a href="account_detail.php?accountId=<?=$this->objAccount->Id?>"><?=$this->objAccount->Name?></a></h3>
				<a href="account_detail.php?accountId=<?=$this->objAccount->Id?>">(Click to See Details)</a>
			</div>
			
			<div class="span-14 push-1 prepend-top">
				<div class="span-5">				
        		    <? $this->btnRemoveTarget->Render()?>
     			</div>

				<div class="span-5">
				    <? $this->btnRequestCotact->Render()?>
				</div>
			</div>
		</div>
		<?php $this->RenderEnd(); ?>
	</body>
</html>
