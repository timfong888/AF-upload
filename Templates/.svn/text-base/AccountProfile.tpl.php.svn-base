<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');
		
?>
<head>
	<link href="../css/public_style.css" rel="stylesheet" type="text/css"/>
</head>

<style type="text/css">
/*table.public_table {
		border: solid;
		border-width: 1px;
		border-color: #6495ED;
		padding: 10px;
		width: 350px;
		font-family:Arial, Helvetica, sans-serif;		
	}*/
	
	div#public_accounts {
		width: 400px;
		float:left;
	}
	
	div#public_accounts h1 {
		font-size: 36px;
		background-color: #f5f5f5;
	}
	div#public_accounts h2 {
		font-size: 20px;
		font-family: Arial, Helvetica, sans-serif;
	}
	
	div#public_description {
		padding: 20px;
		font-family: Arial, Helvetica, sans-serif;
		margin-left: 450px;
		border-style: dotted;
		border-width: 2px;
	}
	
	div#public_description h2 {
		background-color: #F0F8FF;
		padding: 15px;
		text-align: center;
	}
	
	div.public_container {
		width: 850px;
	}
	
	div.public_container {
		width: 850px;
	}
	
</style>
<?php $this->RenderBegin();?>
<div class="public_container">

<div id="public_accounts">
	<h1><?php $account = $this->lblAccountName->Render();?></h1>
	<br>
	<h2>HAVES </h2>
	<h3>Sales Reps who can Offer this Account</h3>
	<p>The sales reps below <strong>know</strong> someone at this account.<br><br>
	They would like an introduction at the Target account to the right of their username. <br><br>
	To see which other accounts they'd like information at to provide something in return,
	just <strong>click</strong> on their username.</p>
	<?php $this->dtgOffers->Render();?>
	<h2>WANTS</h2>
	<h3>Sales Reps who Target (and can Offer Something in Return</h3>
	<p>These reps <strong>want</strong> to get a contact at this account.<br><br>
	Listed to the <strong>right</strong> is one of the accounts where <strong>they know people</strong> at and they'll exchange
	for an introduction to this account.</p>
	<?php $this->dtgTargets->Render();?>
	
</div> <!--public_accounts_container-->

<div id="public_description">
	<h2>What is this Page?</h2>
	<p>This page helps you  find sales reps who may have contact and account information you may want to share with</p>
	<h3>Who are the sales reps?</h3>
	<p>These are reps who use Allyforce to exhange contact and account information with other sales reps they know and trust</p>
	<h3>What happens if I click on one of these links?</h3>
	<p>Clicking on one of the links will take you to either an account profile or a sales rep profile.</p>
	<h3>How do I find out who is the sales rep?</h3>
	<p>You should see a description of their offering in the profile
	Once you submit your request, the receiving sales rep can accept or decline.
	Once he accepts, you'll know who is on the other end</p>
	<h3>Do I have to give up any contact information at these accounts?</h3>
	<p>No, you never have to give any contact information until you choose to.</p>
</div> <!--public_description-->
</div> <!--container-->
<?php $this->RenderEnd();?>
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
