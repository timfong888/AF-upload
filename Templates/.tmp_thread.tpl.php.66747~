<table class="messagethread">
<tr>
<td>
		<?php
		if($_CONTROL->objMessage->FromUser->UserDetail->Picture != '')
			echo '<img width=40 height=45 src="/Pictures/' .$_CONTROL->objMessage->FromUser->UserDetail->Picture .'">';
		else
			echo '<img width=40 height=45 src="/assets/images/file_asset_blank.png">';
		?>	
</td>
<td class="author_info">
		<?php 
			echo '<b>'. $_CONTROL->objMessage->FromUser->FullName . '</b><br/>';
			echo '<b>'. $_CONTROL->objMessage->FromUser->AccountIdObject->Name . '</b>';
			echo "<br>"; 
		?>
		<div class="date">
			<?php	
				echo $_CONTROL->objMessage->DateTime->__toString("hh:mm z MMM D YY ");
			?>
		</div>

</td>
<td class="message_body">
	<?php
		echo $_CONTROL->objMessage->Body;
	?>
</td></tr>
<tr><td></td><td colspan=2><hr></td></tr>
</table>
