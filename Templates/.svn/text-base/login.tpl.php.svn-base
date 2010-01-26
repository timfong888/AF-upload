<?php
    require('prepend.inc.php');
	
	$blnShowHide=false;
	$blnMap=false;
	
	require( __TEMPLATES__  . '/top.tpl.php');
?>

<div class="container">
<hr class="space" /r>

<div class="span-11" id"howworks">
	<h3>How It Works</h3>
	<h4>Allyforce lets you <span class="blue">securely</span> and <span class="blue">selectively</span> 
	exchange contacts with partners</h4>
	<img src="../images/howitworks.gif">
</div>

<div class="span-9 push-1 last" id="login">

  <?php $this->RenderBegin(); ?>
  <fieldset>
  <legend><?php _t("Sign In") ?></legend>
  <div class="row"> Work email address!</div>
  <div class="row">
   <?php $this->txtUsername->RenderWithError(); ?>
  </div>
  <div class="row">
  	Password
  </div>	 
  <div class="row"> 
   	<?php $this->txtPassword->RenderWithError(); ?>
  </div> 	
   <div class="check">
		<?php $this->chkRememberMe->RenderWithError();?> Keep me sign on this computer
  </div> 
   <div class="row"> 
  <div class="submit"> 
    <?php $this->btnLogin->Render() ?>
  </div>  
  
  <?php $this->RenderEnd(); ?>
  <!--<div class="submit">
  	<a href="/forgot/"><?php _t("Forgot password?"); ?></a>
  </div> -->
  <!--<div class="submit">
  	<a href="/forgot/"><?php _t("Change work email"); ?></a>
  </div>  -->  
  <div class="submit">
  	Not part of allyforce, yet? <a href="main_signup.php?referral=29"><?php _t("Sign up Now!") ?></a>
  </div>    		
  </fieldset>
</div>
<!-- added the line below to add a footer template -->
<?php 
	require( __TEMPLATES__  . '/footer.global.tpl.php');
?>
</div> <!--container-->