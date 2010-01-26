<div align="center" class="<?=(($_CONTROL->CurrentItemIndex % 2) != 0) ? 'alliesright':'alliesleft';?>">
	<div>
	    <b><?php _p($_ITEM->AccountIdObject->Name); ?></b><br/>
	    <img src="<?= __SUBDIRECTORY__.'/Pictures/'.$_ITEM->UserDetail->Picture?>" border="0" alt="" width="41px" height="41px"/><br/>
<!-- if the user is paying, then allow them to click to see the other profiles, otherwise, it is not a link -->
		<?php _p($_ITEM->UserDetail->CodeName); ?>
	   	<!--
		<a href="AllyProfile.php?aid=<?= $_ITEM->Id?>"> <b><?php _p($_ITEM->UserDetail->CodeName); ?></b></a><br/>
  	    -->
	</div>  
 </div>

