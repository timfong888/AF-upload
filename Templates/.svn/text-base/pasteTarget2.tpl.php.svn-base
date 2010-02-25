<div id="target_popup_c">
	<div id="title">
		<?php $this->lblTitle->Render();?>
	</div>	
</div>
<div id="target_list_popup">
		<form  action="target_popup.php" method="post">
			<input type="hidden" name="pop" value="3">
			These accounts were in our database of accounts (your entered name in parentheses):
			<table class="target-table">
			<tr class="selectors"><td></td><td class="selectors" align="right" nowrap><a href="javascript:void(0)" onclick="javacript:checkAll_1(true)">select all</a>&nbsp;<a href="javascript:void(0)" onclick="javacript:checkAll_1(false)">clear all</a></td></tr>
			<?php 
				foreach ($this->exst_accnt as $key=>$name) {
					echo '<tr><td width="80%">'.$key.'<span>('.$name.')</span></td><td align="center"><input type="checkbox" name="exst_accnt_chk[]" value="'.$key.'"></td></tr>';		
				}		
			?>
			
			</table>
		
			These accounts did not match our database. They will be entered exactly as you have typed them:
			<table class="target-table">
			<tr><td class="before-selectors"></td><td class="selectors" align="right" nowrap><a href="javascript:void(0)" onclick="javacript:checkAll_2(true)">select all</a>&nbsp;<a href="javascript:void(0)" onclick="javacript:checkAll_2(false)">clear all</a></td></tr>
			<?php 
				foreach ($this->new_accnt as $key=>$name) {
					echo '<tr><td width="80%">'.$name.'</td><td align="center"><input type="checkbox" name="new_accnt_chk[]" value="'.$name.'"></td></tr>';		
				}		
			?>
			
			</table>
			
			<div id="submit">
				<?php $this->btnSubmit->Render(); ?></td><td><a href="javascript: self.close ()">Cancel</a>
			</div>
		</form>
</div>	

			
