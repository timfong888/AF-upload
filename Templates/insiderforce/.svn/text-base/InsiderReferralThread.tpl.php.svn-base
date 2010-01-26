<link href="../../css/screen.css" rel="stylesheet" type="text/css"  />
<link href="../../css/plugins/buttons/screen.css" rel="stylesheet" type="text/css"  />
<?php $this->RenderBegin(); ?>
<div class="container">
	<div class="container" id="header">
		<div class="span-12">
			<h2>Insider<span class="red">Force</span></h2>
			<p><span class="quiet">Where you get paid for anonymously providing referral contacts and company information
			to solution providers.</span></p>
		</div>
		
		<div class="span-5 prepend-4 bottom last">
			<a href="Login">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="About">About</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="FAQ">FAQ</a>
		</div>
	</div> <!--header-->
	
	<div class="container center" id="title">
		<h4 class="blue">Barclay's Global Investors!  Referral between you and Timothy Fong</h4>
	</div>
	<div class="container center" id="threads">
		<?php 
		if(isset($this->pnlThreadDisplay))
				$this->pnlThreadDisplay->Render();
		?> 
	</div>
	
	<div class="span-15 prepend-5" id"reply">
		<p><label for="dummy2">Reply:</label><br>
      	<!--<textarea name="dummy2" id="dummy2" rows="8" cols="70"></textarea>-->
		<?php $this->txtMessage->Render(); ?>
		</p>
	</div>

	<hr class="space">
	
	<div class="prepend-5 span-15" id="contact">
		<h4><strong>Company:</strong>  <?php
				if(isset($this->objAccount))
					echo $this->objAccount->Name;
				else
					echo $this->txtCompany->RenderWithError();?> 
		</h4>
		
		<fieldset>
			<legend>Contact Information</legend>
			<div class="span-7" id="contact_left">
				<label>Name</label><br />
				<?php $this->txtContactName->RenderWithError(); ?><br />
				<label>Title</label><br />
				<?php $this->txtContactTitle->RenderWithError(); ?><br />
				<label>Email</label><br />
				<?php $this->txtContactEmail->RenderWithError(); ?><br />
			</div>
			
			<div class="span-7 last" id="contact_right">
				<label>Work Phone</label><br />
				<input type="text" class="text span-7" id="dummy1" name="dummy1" value=""><br />
				<label>Cell Phone</label><br />
				<input type="text" class="text span-7" id="dummy1" name="dummy1" value=""><br />
			</div>
		</fieldset>
		<p><?php $this->btnGive->Render(); ?></p>
	</div>

	
</div>
<?php $this->RenderEnd(); ?>

