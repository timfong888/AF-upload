<?php
    require('prepend.inc.php');
	$blnShowHide=false;
	$blnMap=false;
	require( __TEMPLATES__  . '/top.tpl.php');

?>
<title>Allyforce: Signup to Exchange Contacts</title>		
<div class="container" id="signup_invite">
<?php $this->RenderBegin();?>
	<?php require_once(__INCLUDES__ . "/banner_external.inc.php"); ?>
	
	<div id='demo'>
		<h1>Exclusive Invitation to Beat Quota</h1>
		
		<object id="scPlayer" width="480" height="384"> 
		<param name="movie" value="http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/jingswfplayer.swf"></param> 
		<param name="quality" value="high"></param> <param name="bgcolor" value="#FFFFFF"></param> <param name="flashVars" value="thumb=http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/FirstFrame.jpg&containerwidth=480&containerheight=384&content=http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/allyforce-demo1.swf"></param> <param name="allowFullScreen" value="true"></param> <param name="scale" value="showall"></param> <param name="allowScriptAccess" value="always"></param> <param name="base" value="http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/"></param>  <embed src="http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/jingswfplayer.swf" quality="high" bgcolor="#FFFFFF" width="480" height="384" type="application/x-shockwave-flash" allowScriptAccess="always" flashVars="thumb=http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/FirstFrame.jpg&containerwidth=480&containerheight=384&content=http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/allyforce-demo1.swf" allowFullScreen="true" base="http://content.screencast.com/users/bigblueguy/folders/Allyforce/media/a122fef2-63f3-433d-98d5-688306993943/" scale="showall"></embed> </object>				
	</div>
	
	<div id="signup">
		<?php require_once(__INCLUDES__ . "/signup2.inc.php"); ?>
	</div> <!--signup-->
	
	<div id="explain">
		<ul class="list1">
			<li class="security">
				<h3>Exchange contacts <span>selectively and securely</span></h3>
					<p>
						Selectively and securely give and receive contact and account information to 
						other partners you choose.
						<a href="#signup">  Signup now! >></a>
					</p>
			</li>
	
			<li class="prospects">
				<h3>Up-to-date <span>contact info</span></h3>
					<p>
						Just as you know the latest contacts, so will your partners.  
						Exchange selectively to get the latest contacts.
					<a href="#signup">  Signup now! >></a>
					</p>
			</li>
	
			<li class="accounts">
				<h3>Get real <span>account</span> insights</h3>
					<p>
						Real sales reps in your territory can tell you what they know about an account, 
						from budget, to install-base, to internal politics.  Real insider-information
						you can't get anywhere else.
						<a href="#signup">  Signup now! >></a>
					</p>
			</li>
	    </ul> <!--list1-->
		
		<ul class="list2">
			<li class="partnership">
				<h3>Easily leverage <span>partnerships</span></h3>
					<p>
						Make partnerships work, whether formal or informal, by enabling
						the exchange and measurement of actionable information out in the field.
						<a href="#signup">  Signup now! >></a>
					</p>
			</li>
	
			<li class="coverage">
				<h3>Build pipeline and get meetings <span>faster</span></h3>
					<p>
						 Increase the number of feet on the street who know about your territory.
						<a href="#signup">  Signup now! >></a>
					</p>
			</li>
		</ul> <!--list2-->
		</div>	<!--explain-->	
			
	<div id="mytargets">
		<h3>My Target Accounts</h3>
		<?php $this->dtgTargets->Render();?>
	</div>


	
</div> <!--container-->
<?php $this->RenderEnd();?>	
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
