<?php require_once(__INCLUDES__ . "/stylesheets.inc.php"); ?>
<?php require( __TEMPLATES__  . '/top.tpl.php'); ?>
	
<?php $this->RenderBegin(); ?>

<div class="container">
	<hr class = "space" />
	
	<div class="prepend-1 span-15" id="step3-add-targets-desc">
		<H3><strong>You're almost done!</strong></H3>
		<p>On this page, add <strong>TWO companies</strong> you are trying to Target.<br /><br />
		You can later cut and paste your list.</p>
	</div>
	<hr class="space" />
	
	<div class="span-11" id="addtargets-left">

		<div class="prepend-1 span-7">
			<?php $this->txtOffered->Render(); ?><br /><br />
			<?php $this->btnAdd->Render(); ?> 
		</div>
		<div class="span-1 last">
			<span id="loader_ctl" style="display: none;"><img src="images/ajax-loader.gif" id="loader"></span>
		</div>
	</div>
	
	<div class="span-11" id="addtargets-right">
		<?php $this->lstListbox->Render(); ?><br />
		<?php $this->btnFinish->Render(); ?>
	</div>
</div> <!--container-->

<?php $this->RenderEnd(); ?>
