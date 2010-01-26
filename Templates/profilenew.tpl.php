<?php require_once(__TEMPLATES__ . "/header2.tpl.php") ?>
<?php $this->RenderBegin(); ?>
<div class="container">

<div class="span-10" id="profile_edit">
	<h3 class="blue">Edit Profile</h3>
	<div class="span-3"><strong>Full Name</strong></div>
	<div class="span-5 prepend-1 last"><?php $this->txtFullName->RenderWithError(); ?></div>
	<hr class="space" />
	<div class="span-3"><strong>Username</strong></div>
	<div class="span-5 prepend-1 last">  <?php $this->txtCodeName->RenderWithError(); ?></div>
	<hr class="space" />
	<div class="span-3"><strong>Company</strong></div>
	<div class="span-5 prepend-1 last"><?php $this->txtCompany->RenderWithError(); ?></div>
	<hr class="space" />
	<div class="span-3"><strong>Company Email</strong></div>
	<div class="span-5 prepend-1 last"><?php $this->txtEmail->RenderWithError(); ?></div>
	<hr class="space" />
	<div class="span-3"><strong>Backup Email</strong></div>
	<div class="span-5 prepend-1 last"><?php $this->txtBackupEmail->RenderWithError(); ?></div>
	<hr class="space" />
	<div class="span-3"><strong>Upload Photo</strong></div>
	<div class="span-5 prepend-1 last"><?php $this->flaPicture->RenderWithError(); ?></div>
	<fieldset>
		<legend>Change Password</legend>
		<div class="span-4">New Password: </div>
		<?php $this->txtNewPassword->RenderWithError(); ?><br />
   	    <hr class="space" />
		<div class="span-4">Retype Password:</div> 
		<?php $this->txtRetypePassword->RenderWithError(); ?>
	</fieldset>

</div>

<div class="span-10" id="profile_edit">
	<hr class="space" />
	<label>Territory</label><br />
	<?php $this->txtTerritory->RenderWithError(); ?>
	<hr class="space" />
	<label>Solution Pitch</label><br />
	<?php $this->txtSolutions->RenderWithError(); ?>
	<hr class="space" />
	<span class="prepend-5"><?php $this->btnSave->Render(); ?></span>
</div>	
	
<?php $this->RenderEnd(); ?>
</div><!-- /container-->
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
</body>
</html>

