<?php
    require('prepend.inc.php');	
	$blnShowHide=false;
	$blnMap=false;	
	require( __TEMPLATES__  . '/top.tpl.php');
?>
<title>Allyforce: Login</title>		
<div class="container" id="login">
<?php $this->RenderBegin();?>
	<?php require_once(__INCLUDES__ . "/banner_external.inc.php"); ?>

	<div id="login_form">
	  <h2>Login</h2>
	  <div class="row"><label>Work email address!</label> </div>
	  
	  <div class="row">
	   <?php $this->txtUsername->RenderWithError(); ?>
	  </div>
	  
	  <div class="row">
	  	<label>Password</label>
	  </div>
	  	 
	  <div class="row"> 
	   	<?php $this->txtPassword->RenderWithError(); ?>
	  </div> 
	  	
	   <div class="check">
			<?php $this->chkRememberMe->RenderWithError();?> Keep me signed on this computer
	  </div>
	   
	  <div class="row"> 
		  <div class="submit"> 
		    <?php $this->btnLogin->Render() ?>
		  </div>  
	  
	 	  <?php $this->RenderEnd(); ?>
	  </div>
	  
	  <div class="row">
		  <div class="submit">
		  	Not part of allyforce, yet? <a href="/code"><?php _t("Sign up Now!") ?></a>
		  </div>    		
	  </div>
	  
	</div>
<!-- added the line below to add a footer template -->
<?php 
	require( __TEMPLATES__  . '/footer.global.tpl.php');
?>
</div> <!--container-->