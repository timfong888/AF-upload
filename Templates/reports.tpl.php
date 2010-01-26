<?php require_once(__TEMPLATES__ . "/header9.tpl.php") ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div class="span-15 push-2" id="manager_invite">
	<h3>Invite Your Reps</h3>
	<form action="" method="post" id="fmanager">
		<div class="span-6">
			<label>Email</label><br />
			<?php $this->txtEmail->RenderWithError(); ?>
		</div>
		
		<div class="span-6 last">
			<label>Name</label><br />
			<?php $this->txtFullName->RenderWithError(); ?>			
		</div>
		
		<div class="span-3 last">
			<br />
			<?php $this->btnInvite->Render(); ?><br />
		</div>
		
		<?php $this->lblMessage->Render()?><br />
	</form>
<br /><br />	

		
</div>

<div class="container prepend-2">
	   <hr class="space" />
	   <div class="span-15">
	   		<div class="span-4"><strong>Select TimeFrame:</strong> &nbsp;&nbsp;</div>
			<div class="span-3 last"><select>
				<option>Last 7 Days</option>
				<option>Last 30 Days</option>
				<option>Last 90 Days</option>
			</select></div>
		</div>
			   
<div class="span-15" id="tables"> 

<fieldset class="span-15">
	<legend>Ally Company Summary</legend>

	<p>Select a company by clicking on the row to drill down into how each of your reps is exchanging with the
	selected Ally Company.</p>
		
	<?php $this->dtgAllies->Render(); ?>
	  
<a class="button button_submit positive span-8" href="manager_invite_allies.tpl.php">
		<span class="ss_sprite ss_add">&nbsp;</span>
		Add More Allies
</a>
</fieldset>

<hr class="span-15" /r>

<fieldset class="span-15">
	<legend>Summary of Reps by Selected Ally Company</legend>
	<p>Click on one of your reps to see the details of which leads are being exchanged with your
	Ally Company.</p>
	
	<?php $this->dtgRepsSummary->Render(); ?>

<div class="span-7"><a class="button_submit positive button" href="manager_invite_reps.php">
		<span class="ss_sprite ss_add">&nbsp;</span>
		Add Reps
</a></div>
</fieldset>

<hr class="span-15"> </hr>

	<fieldset>
	
	<legend>Details for Selected Rep: Accounts FROM Ally</legend>
	<?php $this->dtgRepsDetailsReceived->Render(); ?>
	
	
	</fieldset>

	<fieldset>
		<legend>Details for Selected Rep: Accounts TO Ally</legend>
		<?php $this->dtgRepsDetailsGiven->Render(); ?>
	</fieldset>
</div>
</div> <!--container-->	
<?php $this->RenderEnd(); ?>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 