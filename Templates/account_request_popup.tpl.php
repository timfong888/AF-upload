
		
		<? require_once('includes/stylesheets-no-facebox.inc.php'); ?>
		<div class="span-14">
			<div class="span-13 center last" id="account-popup">
				<h3 class="bottom"><a href="account_detail.php?accountId=
				    <?= $_CONTROL->accountId ?>">
				    <?= $_CONTROL->accountName ?>
				 </a>
				</h3>
				<a href="account_detail.php?accountId=
                    <?= $_CONTROL->accountId ?>">
                    (Click to See Details)
                    </a>
				<h3 class="bottom"></h3>
				
			</div>
			
			<div class="span-14 push-1 prepend-top">
				<div class="span-5">
        		    <? $_CONTROL->btnRemoveTarget->Render()?>
     			</div>
                <div class="span-5">
				    <? $_CONTROL->btnAddToTargets->Render()?>
				</div>
				<div class="span-5">
				    <? $_CONTROL->btnRequestContact->Render()?>
				</div>
				
				
				<br/>
				<br/>
				<div >
                <? 
                   $_CONTROL->btnClose->Render(); 
                ?>
			    </div>
			</div>
		</div>

