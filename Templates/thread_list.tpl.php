<?php require_once('includes/header.inc.php'); ?>

<?php $this->RenderBegin(); ?>
<div class="container" id="thread_list">
	<?php $select_home = "0" ;?>
	<?php $select_allies = "0" ;?>
	<?php $select_targets = "0" ;?>
	<?php $select_threads = "here" ;?>
	<?php require_once(__TEMPLATES__ . "/header_new.tpl.php") ?>
	<br />

	<br />
	<div id="threads">
		<?php $this->dtgThreads->Render(); ?>
		<?php $this->RenderEnd(); ?>
	</div>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>

</div> <!--container-->
</body>
</html>