<div id="target_popup_c">
	<div id="title">
		<?php $this->lblTitle->Render();?>
	</div>	
</div>
<div>
			The following accounts were successfully added to your Target list:
			<p>
			<p>
			<table width="100%">
			<?php 
				foreach ($this->added as $name) {
					echo '<tr><td>'.$name.'</td></tr>';		
				}		
			?>
			</table>
			<table><tr><td align="center"><a href="javascript: self.close ()">close</a></td></tr></table> 
</div>	

