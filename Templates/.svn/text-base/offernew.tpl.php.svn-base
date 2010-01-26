<?php require_once(__TEMPLATES__ . "/header7.tpl.php") ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
  <?php $this->RenderBegin(); ?>
	  
	<div class="prepend-1 span-18" id="offers">
		<div class="span-9">
        	<h3 class="white">Add Offered Account</h3>
 			<!-- the loader .gif -->
        	<span id="loader_ctl" style="display: none;"><img src="images/ajax-loader-offers.gif" id="loader"></span>

			<div class="span-8">	
				<?php $this->pnlAddOffer->Render(); ?>
 			</div>
		</div> 
		
		<div class="span-9 last">
			<a href="#" class="button positive">
			 	<span class="ss_sprite ss_cut_red">&nbsp;</span> Cut and Paste More Contacts
			</a>
			<a href="#" class="button positive">
			 	<span class="ss_sprite ss_add">&nbsp;</span> Pull from Salesforce.com
			</a>
		</div>
		
	</div>
	     
	<div class="span-20" id="listoffers">                
       <?php $this->pnlOfferDisplay->Render();?>           
     </div>
	 
  <?php $this->RenderEnd(); ?>     
</div><!-- /container-->
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
