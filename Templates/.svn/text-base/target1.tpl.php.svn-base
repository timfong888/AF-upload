<?php require_once(__TEMPLATES__ . "/header6.tpl.php") ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
 <?php $this->RenderBegin(); ?>
	    
	<div class="span-18" id="targets">
		<div class="span-9">
		<h3 class="white">Add Target Accounts
			<!-- pop-up help icon -->
			<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
				<span class="tooltips_style">
				Enter the name of companies that you are Targeting.<br><br>
				Allyforce will start to auto-complete if it already has the name
				in its database.  <br><br>
				Otherwise, type the name of the company.	
				</span>	
			</a></h3>
		  
			<span id="loader_ctl" style="display: none;"><img src="images/loader.gif" id="loader"></span>
		  
			<?php $this->pnlAddTarget->Render(); ?>			
		  </div>
		  
		  <div class="span-9 last">  
						<a href="javascript:void(0)" onclick="window.open('target_popup.php','targets',
						'width=500, height=500, screenX=600')" class="button positive">
			 				<span class="ss_sprite ss_cut_red">&nbsp;</span> Cut and Paste More Targets
							(Pop-Up)
						</a>
		   </div>
     </div> <!-- targets -->	
	
	<div class="span-18" id="target_list">		

       	<?php $this->dtgTargets->Render(); ?>
        
     </div><!-- /target-list-->
   </div><!-- /container-->
   <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
<?php $this->RenderEnd(); ?> 
</body>
</html>
