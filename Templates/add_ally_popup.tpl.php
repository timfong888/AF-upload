<? require_once('includes/stylesheets.inc.php'); ?>
	<div>
			<h2>
			    Add 
			    <?= $_CONTROL->allyName ?>
			    as an Ally?
			</h3>
			
			<p class='quiet'>In order to <strong>Request a Contact</strong>, you need to add 
			<?= $_CONTROL->allyName ?> as an Ally by
			<strong>pressing</strong> the "Invite Ally" button below.</p>
			
			<p><?= $_CONTROL->allyName ?> will need to accept your invitation.</p
			
			<p>If he does, you'll be able to share contacts and account information
			easily and securely.  <strong>And you'll make quota faster!</strong></p>
			
			<div>
                <? 
                   $_CONTROL->btnInvite->Render(); 
                ?>
			</div>		
			<div>
                <? 
                   $_CONTROL->btnClose->Render(); 
                ?>
			</div>
		
		</div>
		<!--</form>--> 
		  

