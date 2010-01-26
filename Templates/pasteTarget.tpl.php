<div id="target_popup_c">
	<div id="title">
		<?php $this->lblTitle->Render();?>
	</div>	
	<div align="center">
		<form name="target_popup_form" action="target_popup.php" method="post">
			<input type="hidden" name="pop" value="2">
			<?php $this->txtStrings->Render(); ?>	
			<table><tr><td><?php $this->btnSubmit->Render(); ?></td><td>&nbsp;<a href="javascript: self.close ()">cancel</a></td></tr></table>
		</form>
	</div>	
</div>