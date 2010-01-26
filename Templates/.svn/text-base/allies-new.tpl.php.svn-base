<?php require_once(__TEMPLATES__ . "/header5.tpl.php") ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div class="span-18" id="invite_allies">
	<h3 class="white">Invite Sales Reps</h3>
	<form action="" method="post" id="fallies">
		<div class="span-6">
			<label>Email</label><br />
			<?php $this->txtEmail->RenderWithError(); ?>
		</div>
		
		<div class="span-6 last">
			<label>Name</label><br />
			<?php $this->txtFullName->RenderWithError(); ?>			
		</div>
		
		<div class="span-6 last">
			<br />
			<?php $this->btnInvite->Render(); ?><br />
		</div>
		
		<div class="span-8"><?php $this->lblMessage->Render()?><br /></div>
	</form>
</div>

<div class="span-18">	
	<?php $this->dtgAllies->Render(); ?>
</div>
<?php $this->RenderEnd(); ?>  
</div>
