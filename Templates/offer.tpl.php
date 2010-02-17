<?php require_once('includes/header.inc.php'); ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
<?php $this->RenderBegin(); ?>

    <div class="container" id="offers">  
  	<?php $select_home = "0" ;?>
	<?php $select_allies = "here" ;?>
	<?php $select_threads = "0" ;?>
	<?php $select_targets = "0" ;?>
	<?php require_once(__TEMPLATES__ . "/header_new.tpl.php") ?>
		  
		<div id="add_offers">
            <h2>Add Offered Account</h2>
				<!-- pop-up help icon -->
				<span id="loader_ctl" style="display: none;"><img src="images/ajax-loader-offers.gif" id="loader"></span>
				<?php $this->pnlAddOffer->Render(); ?>			
		</div>      
        
		<div id="offer_explain">
			<h2>Why Add Offered Accounts?</h2>
			
			<p>An <span>Offered Account</span> is the name of an account where you have
			information that would be valuable to another rep.  You provide that information
			in exchange for information on your <span>Target Accounts</span></p>
			
			<p>The more you have to Offer, the more like you'll get your Targets in return!</p>
		</div>
		
		<div id="offer_list">
       		<?php $this->pnlOfferDisplay->Render();?>           
		</div>
				
	<?php $this->RenderEnd(); ?>     
   </div><!-- /container-->
   <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
