<?php require_once('includes/header.inc.php'); ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
	<?php $select_home = "0" ;?>
	<?php $select_allies = "0" ;?>
	<?php $select_threads = "0" ;?>
	<?php $select_targets = "here" ;?>
<?php $this->RenderBegin(); ?>
	    
<div class="container" id="targets">
	<?php require_once(__TEMPLATES__ . "/header_new.tpl.php") ?>
	
	<div id="add_target">
		<h2>Add Target Accounts</h2>
		  
			<span id="loader_ctl" style="display: none;"><img src="images/loader.gif" id="loader"></span>
		  
			<?php $this->pnlAddTarget->Render(); ?>			
	</div> <!--add_target-->
		  
	<div class="span-9 last">  
						<a href="javascript:void(0)" onclick="window.open('target_popup.php','targets',
						'width=500, height=500, screenX=600')" class="button positive">
			 				<span class="ss_sprite ss_cut_red">&nbsp;</span> Cut and Paste More Targets
							(Pop-Up)
						</a>
	</div>

	
	 <div id="target_list">		

       	<?php $this->dtgTargets->Render(); ?>
        
     </div><!-- /target-list-->

   	<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
	<?php $this->RenderEnd(); ?> 
</div><!-- container-->
</body>
</html>
