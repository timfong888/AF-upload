<?php require_once(__TEMPLATES__ . "/header1.tpl.php") ?>
<?php $this->RenderBegin(); ?>
	<br />

	<br />
	<div class="span-18" id="threads">
		<?php $this->dtgThreads->Render(); ?>
		<?php $this->RenderEnd(); ?>
	</div>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
</body>
</html>