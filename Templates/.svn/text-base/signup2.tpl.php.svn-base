<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');
	require_once(__INCLUDES__ . "/stylesheets.inc.php");
		
?>
<?php $this->RenderBegin(); ?> 
	<style type="text/css">
	
		
		.output {
			font-weight: normal;
			color: #444444;
		}
		
		#reg_forms {
			float: left;
			margin-top: 30px;
			margin-left: 50px;
			width: 300px;
		}
		
		#reg_forms label {
			display:block;
			margin-bottom: 10px;
			
		}
		
		#reg_forms textarea {
			width: 350px;
		}
		
		#reg_forms label span {
			display: block;
			width: 150px;
			padding-right: 6px;
			font-size: 14px;
			color: #111111;
			font-family: Arial, Helvetica, sans-serif;
			float:left;	
			
		}
		
		input:focus {
			background-color: #FFFFCC;
		}
		
		textarea:focus {
			background-color: #FFFFCC;
		}
		
		#reg_input {
			display:block;
			font-family:Arial, Helvetica, sans-serif;
			font-weight: normal;
			color: #777777;
			font-size: 14px;
			width: 500px;
		}
		
		#bt_reg_next {
			background-color: #00B700;
			color: white;
			border-color: #00B700;
			margin-left: 550px;
		}
		
		table {
			margin-left: -25px;
		}
				
	</style>
<div class="container">
	<div class="span-20 borange" id="reg_header">
		This is a very short profile.  You can use the default information if you want, but we wouldn't recommend it. <br><br> 
		You can always come back later and hit the "Profile" link to change it.<br>
	</div>
	
    <hr class="space" />
	
	<div class="span-11" id="reg_left">
	 <div class="prepend-2 span-9">
		
 		<label>Name:</label>&nbsp; &nbsp;<span class="output"><?php  $this->lblFullName->Render();?>
		</span><br><br>
		<label>Email:</label> &nbsp; &nbsp;<span class="output"><?php  $this->lblEmail->Render();?> </span> 
		
	 </div>
	 <div class="span-11" id="reg_forms">
		<label><span>Company Name</span></label>
		<br/>
		<table> <!-- table to align the ajax loader gif -->
			<tr>
				<td width="20">
					<span id="loader_ctl" style="display: none;"><img src="images/ajax-loader.gif" id="loader"></span>
				</td>
				<td>	
					<?php $this->txtCompany->Render(); ?>
				</td>
			</tr>
		</table>
		<br>
		<label><span>Territory</span></label>
		<br/>
		<?php $this->areaTerritory->Render(); ?>
		<br/>
		<br/>
		<label><span>Sales Pitch</span></label>
		<br/>
		<?php $this->areaPitch->Render(); ?>
		<br/>
		<?php	$this->btnNext->Render();	?>

	 </div>
	</div>
	<div class="span-11 last">
		<h3 class="blue">Enter Your Company Name</h3>
		<p>This is the name of the sales organization you work for.</p><br />
		<h3 class="blue">Define your territory</h3>
		<p>Concisely describe the geography and ideal customer.</p><br />
		<h3 class="blue">In three sentences, describe your solution</h3>
		<p>Make it really easy for your network to uncove opportunities for you.
		Explain in with SIMPLE terms, not multi-paragraph marketing drivel.</p><br />
	</div>
      
<?php $this->RenderEnd(); ?>

<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
</div> <!--container--> 