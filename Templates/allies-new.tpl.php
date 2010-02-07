<?php require_once('includes/header.inc.php'); ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div class="container" id="allies">
  	<?php $select_home = "0" ;?>
	<?php $select_allies = "here" ;?>
	<?php $select_threads = "0" ;?>
	<?php require_once(__TEMPLATES__ . "/header_new.tpl.php") ?>
	<div id="invite_allies">
		<h3>Invite Sales Reps</h3>
		<div id="message">
			<?php $this->lblMessage->Render()?>
		</div>
			
		<form action="" method="post" id="fallies">
			<div class="row">
				<span class="label">Email:</span>
				<span class="formfield"><?php $this->txtEmail->RenderWithError(); ?></span>
			</div>
			
			<div class="row">
				<span class="label">Name:</span>
				<span class="formfield"><?php $this->txtFullName->RenderWithError(); ?>	</span>		
			</div>
			
			<?php $this->btnInvite->Render(); ?>
			
		</form>
	</div> <!--invite_allies-->

<div class="allies_list">	
	<?php $this->dtgAllies->Render(); ?>
</div>
<?php $this->RenderEnd(); ?>  
</div>
