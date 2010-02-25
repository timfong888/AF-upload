<?php require_once('includes/header.inc.php'); ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div class="container" id="profile">
  	<?php $select_home = "0" ;?>
	<?php $select_allies = "0" ;?>
	<?php $select_threads = "0" ;?>
	<?php $select_targets = "0" ;?>
	<?php require_once(__TEMPLATES__ . "/header_new.tpl.php") ?>
	
	<div id="profile_edit">
		<h3>Edit Profile</h3>
		<div id="message">
			<?php $this->lblMessage->Render()?>
		</div>
		<div class="row">
			<span class="label">Full Name:</span>
			<span class="formfield"><?php $this->txtFullName->RenderWithError(); ?></span>
		</div>
	
		<div class="row">
			<span class="label">Username:</span>
			<span class="formfield">  <?php $this->txtCodeName->RenderWithError(); ?></span>
		</div>
	
		<div class="row">
			<span class="label">Company:</span>
			<span class="formfield"><?php $this->txtCompany->RenderWithError(); ?></span>
		</div>

		<div class="row">
			<span class="label">Title:</span>
			<span class="formfield"><?php $this->txtTitle->RenderWithError(); ?></span>
		</div>
				
		<div class="row">
			<span class="label">Company Email:</span>
			<span class="formfield"><?php $this->txtEmail->RenderWithError(); ?></span>
		</div>
	
		<div class="row">
			<span class="label">Backup Email:</span>
			<span class="formfield"><?php $this->txtBackupEmail->RenderWithError(); ?></span>
		</div>
	
		<div class="row">
			<span class="label">Click to Change:</span>
			<span class="formfield"><a href="http://www.gravatar.com/"><img src="http://www.gravatar.com/avatar?s=45&d=monsterid&gravatar_id=<?php echo $gravatarid3;?>"></a></span>
		</div>
		
		<fieldset>
			<legend>Change Password</legend>
			<div class="span-4">New Password: </div>
			<?php $this->txtNewPassword->RenderWithError(); ?><br />
	
			<div class="span-4">Retype Password:</div> 
			<?php $this->txtRetypePassword->RenderWithError(); ?>
		</fieldset>
		
		<div id="button"><?php $this->btnSave->Render(); ?></div>
	</div>

<div id="profile_edit">

	<label>Territory</label><br />
	<?php $this->txtTerritory->RenderWithError(); ?>

	<label>Solution Pitch</label><br />
	<?php $this->txtSolutions->RenderWithError(); ?>
</div>	
	
<?php $this->RenderEnd(); ?>
</div><!-- /container-->
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
</body>
</html>

