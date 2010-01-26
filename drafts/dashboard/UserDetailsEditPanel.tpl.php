<?php
	// This is the HTML template include file (.tpl.php) for user_detailsEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->txtCodeName->RenderWithName(); ?>

		<?php $_CONTROL->txtFName->RenderWithName(); ?>

		<?php $_CONTROL->txtLName->RenderWithName(); ?>

		<?php $_CONTROL->txtTitle->RenderWithName(); ?>

		<?php $_CONTROL->txtCity->RenderWithName(); ?>

		<?php $_CONTROL->txtRegion->RenderWithName(); ?>

		<?php $_CONTROL->txtZipCode->RenderWithName(); ?>

		<?php $_CONTROL->txtSolutions->RenderWithName(); ?>

		<?php $_CONTROL->txtTerritory->RenderWithName(); ?>

		<?php $_CONTROL->txtPicture->RenderWithName(); ?>

		<?php $_CONTROL->txtBackupEmail->RenderWithName(); ?>

		<?php $_CONTROL->txtReseller->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
