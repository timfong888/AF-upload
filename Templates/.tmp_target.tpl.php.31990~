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

      <table class="targetheader">
      	<colgroup>
      		<col id="mytargets">
			<col id="allies">
			<col id="recommended_ally">
      	</colgroup>
      	<tr>
      		<th scope="col">My Targets
				<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
						<span class="tooltips_style">
						These are the Account that you are now Targeting<br><br>
						Think of companies that you are focused on getting contacts at.<br><br>
						You list of Targets will be made visible to all of your Allies.	
						</span>	
				</a>
			</th>
			<th scope="col"># Allies who Offer</th>
			<th scope="col">Recommended Ally
				<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
						<span class="tooltips_style">
						Click on this Ally to make a Request.<br><br>
						Allyforce has determined that the recommended ally is
						one you should request a contact at this particular Target.<br><br>
						Clicking on the name of the ally will take you to the page to make
						the request.
						</span>	
				</a>
			
			</th>		
			
      	</tr>

	  </table> <!-- end of table targetheader -->
	 

       <?php 
       	$this->pnlTargetDisplay->Render();
       ?>
        
     </div><!-- /target-list-->
   </div><!-- /container-->
   <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
<?php $this->RenderEnd(); ?> 
</body>
</html>
