<?php
	// This is the HTML template include file (.tpl.php) for the user_details_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('UserDetails') . ' - ' . $this->mctUserDetails->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctUserDetails->TitleVerb); ?></h2>
		<h1><?php _t('UserDetails')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->txtCodeName->RenderWithName(); ?>

		<?php $this->txtFName->RenderWithName(); ?>

		<?php $this->txtLName->RenderWithName(); ?>

		<?php $this->txtTitle->RenderWithName(); ?>

		<?php $this->txtCity->RenderWithName(); ?>

		<?php $this->txtRegion->RenderWithName(); ?>

		<?php $this->txtZipCode->RenderWithName(); ?>

		<?php $this->txtSolutions->RenderWithName(); ?>

		<?php $this->txtTerritory->RenderWithName(); ?>

		<?php $this->txtPicture->RenderWithName(); ?>

		<?php $this->txtBackupEmail->RenderWithName(); ?>

		<?php $this->txtReseller->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>