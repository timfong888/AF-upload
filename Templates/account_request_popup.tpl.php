<div id="account_request_popup">
	<div id="account">
		<h2 class="bottom"><a href="account_detail.php?accountId=<?= $_CONTROL->accountId ?>">
		    <?= $_CONTROL->accountName ?>
		 </a>
		</h2>
		<a href="account_detail.php?accountId=
            <?= $_CONTROL->accountId ?>">
            (Click to See Details)
            </a>
		<h3 class="bottom"></h3>
		
	</div>
	
	<div class="buttons">

		    <? $_CONTROL->btnRemoveTarget->Render()?>

		    <? $_CONTROL->btnAddToTargets->Render()?>

		    <? $_CONTROL->btnRequestContact->Render()?>

	</div> <!--buttons-->
        <? 
           $_CONTROL->btnClose->Render(); 
        ?>
</div>

