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

		    <!--<? $_CONTROL->btnRequestContact->Render()?>-->
			
			<a class='button' href="message_request.php?aid=<?= $_CONTROL->allyId; ?>&acid=<?= $_CONTROL->accountId; ?>&type=<?= MessageType::Request; ?>"><h3>Request Contact</h3></a>

	</div> <!--buttons-->
        <? 
           $_CONTROL->btnClose->Render(); 
        ?>
</div>

