<?php
	// This is the HTML template include file (.tpl.php) for messageEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lstFromUser->RenderWithName(); ?>

		<?php $_CONTROL->lstToUser->RenderWithName(); ?>

		<?php $_CONTROL->txtBody->RenderWithName(); ?>

		<?php $_CONTROL->lstMessageType->RenderWithName(); ?>

		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->txtSubject->RenderWithName(); ?>

		<?php $_CONTROL->lstOffer->RenderWithName(); ?>

		<?php $_CONTROL->calDateTime->RenderWithName(); ?>

		<?php $_CONTROL->lstContact->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
