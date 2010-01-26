<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');	
?>
<?php $this->RenderBegin();?>
	<style type="text/css">
		
		#reg_forms	 {
			margin-top: 30px;
			width: 300px;
		}
		
		#reg_forms p {
			color: #2990FF;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
			font-weight: bold;
			width: 300px;
			
		}
		
		input:focus {
			background-color: #FFFFCC;
		}
		
		#reg_input_2 {
			display:block;
			font-family:Arial, Helvetica, sans-serif;
			font-weight: normal;
			color: #777777;
			font-size: 14px;
			width: 300px;
		}
		
		#reg_input span {
			display: inline;
		}
		
		#reg_list_offers {
			border-color: #2990FF;
			width: 300px;
			height: 200px;
			border-style: solid;
			border-width: 1px;
			margin-top: 25px;	
		}
		
		#reg_left {
			float:left;
			width: 300px;
			margin-left: 100px;
		}
		
		#bt_reg_offer_add {
			margin-left: 244px;
			background-color: #FF6600;
			color: white;
			font-weight: bold;
			padding-left: 10px;
			padding-right: 10px;
			border-color: #FF6600;
			padding-top: 3px;
			padding-bottom: 3px;
			font-size: 12px;
			margin-top:5px;
		}
		
		#bt_reg_finish {
			margin-left: 220px;
			margin-top: 5px;
			font-size: 12px;
			font-weight: bold;
			background-color: #00B700;
			color: white;
			padding-top: 3px;
			padding-bottom: 3px;
			border-color: #00B700;
		}
		
		#reg_offers_table {
			margin-left: -30px;
		}
		
	</style>
	
	<div id="reg_header">
		<?php $this->lblReferal->Render(); ?>, the one who invited you to join allyforce, can offer you contacts at <?php $this->lblOffer1->Render(); ?>,  <?php $this->lblOffer2->Render(); ?>,  <?php $this->lblOffer3->Render(); ?>, and much, much more!<br>
	</div>
	
	<div id = "reg_left">
	<br>
			<p>Add <strong>TWO</strong> of Your Offered Accounts! 
			</p>
		    <table id="reg_offers_table"> <!-- table for aligning loader-gif -->
				<tr>
					<td width="20">
						<span id="loader_ctl" style="display: none;"><img src="images/ajax-loader.gif" id="loader"></span>
					</td>
					<td>
						<?php $this->txtOffered->Render(); ?>
					</td>
				</tr>
			</table>
			
			<?php $this->btnAdd->Render(); ?>
			
	
		<div id="reg_list_offers">
			<?php $this->lstListbox->Render(); ?>
		
		</div>
		
		
		<?php $this->btnFinish->Render(); ?>
		
	</div>
	
	<div id= "reg_right">
		<h1>Your accounts names are secure</h1>
		<p>The names of these accounts where you have contacts is shared only with
		other reps in your network.  Either you invited them or they invited you and you accepted.
		</p>
		<h1>Enter a company name</h1>
		<p>If you've received an invite, that rep wants to work with you.
		You can choose not to enter anything.  It will send a notice to the invitee that you
		chose not to reciprocate their offer to share accounts at this time.</p>
		
		<h1>No contacts required now</h1>
		<p>Remember, no contact information needs to be uploaded.  Just names of companies.
		How easy is that?</p>
		
		<h1>Contact and account sharing made easy</h1>
		
		<p>Being able to work with other sales reps, formal partners or informal allies,
		is key to success.  Begin today!
		</p>
	</div>
	<?php $this->RenderEnd();?>
<?php 

	//require('bottom.inc.php');

?>

<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 