<!-- This needs to have a require statement on any page where a billing notice will be placed --->
<?php 

$paid = 0;

switch ($paid){
	case 1:
		$billing_wrap = "billing_link_wrap_1.inc.php";
		break;
	
	case 0:
		$billing_wrap = "billing_link_wrap_0.inc.php";
		break;	
}

?>

<div id="light" class="white_content">This feature needs a <b>paid subscription</b> to activate.<br><br>
  The good thing is, you can start using it right now by entering your credit card.<br><br>
  It is only <b>$20 a month</b>, and you can cancel anytime! <br><br>
  	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
</div> 