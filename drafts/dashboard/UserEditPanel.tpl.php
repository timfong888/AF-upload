<?php
	// This is the HTML template include file (.tpl.php) for userEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->txtUsername->RenderWithName(); ?>

		<?php $_CONTROL->txtPassword->RenderWithName(); ?>

		<?php $_CONTROL->txtFullName->RenderWithName(); ?>

		<?php $_CONTROL->chkActive->RenderWithName(); ?>

		<?php $_CONTROL->lstAccountIdObject->RenderWithName(); ?>

		<?php $_CONTROL->lstUserDetail->RenderWithName(); ?>

		<?php $_CONTROL->lstManagerIdObject->RenderWithName(); ?>

		<?php $_CONTROL->txtCode->RenderWithName(); ?>

		<?php $_CONTROL->lstParentUsersAsAllies->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstUsersAsAllies->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstGroupCodes->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
