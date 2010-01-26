<?php require_once(__TEMPLATES__ . "/header7.tpl.php") ?>
<?php require_once(__TEMPLATES__ . "/body.global.tpl.php") ?>
  <?php $this->RenderBegin(); ?>
    <div class="coffers">  
<!--      <form style="margin:0px; float:left; margin-bottom:20px;" action="" method="post"> -->
	  
		<div id="offers">
            <span id="addofferstext">Add Offered Account</span>
				<!-- pop-up help icon -->
				<img border="0" align="absbottom" src="images/ask.png" alt="Ask" onmouseover="document.getElementById('tooltip1').style.display='block'"; onmouseout="document.getElementById('tooltip1').style.display='none';" style="cursor: pointer; margin-top: 10px;"/>
                         	<span id="tooltip1">
                              <strong>Add an Offered Account</strong>
								<br /><br />
                                <b>What is an Offered Account?</b>
                                <br />
                                <i>It is an account where you know contacts or information.</i>
                                <br><br>
                                <b>Do I have to enter all that information now?</b>
                                <br>
                                <i>No.  Just the name of the Account!</i>
                                <br><br>
                                <b>Can everybody see my Offered contacts?</b>
                                <br>
                                <i>No.  Only the people you select to give it to can view.</i>
                            </span> 

        	<div class="ttop1">
        		<table>
        			<tr>
        				<td width="20"> <!-- the loader .gif -->
        					<span id="loader_ctl" style="display: none;"><img src="images/ajax-loader-offers.gif" id="loader"></span>
        				</td>
						<td>
							<?php $this->pnlAddOffer->Render(); ?>
						</td>
        			</tr>
        		</table>

			</div> 
		</div>      
<!--      </form> -->
	      
      <div id="offerheader">  
				 My Offers 	<a href ="#" class="tooltip"><img border="0" src="images/ask.png" alt="ask">
								<span class="tooltips_style">
									Offers are those accounts you are able to share with your Allies.	
								</span>
							</a>
           		 <h1># of Allies given to</h1>
				 <h2>Recommended Ally</h2>
	  </div>           
       <?php $this->pnlOfferDisplay->Render();
       ?>           
      </div>
      <div style="padding-top:20px; clear:both; width:100%"> 
      <strong>Hey ! How do I add a Contact that I know at my Offered Accounts?</strong>
      <br />
      Glad you asked! We tried to make it easy as thought -- the only time you really want to add a contact is when you are giving it to someone. So guess what? That's what we did. Click on <a href="#">My Allies</a> and you can Give an account listed as your ally's Target, or give him something real good (but he doesn't know yet). Give us feedback (top right corner!)</div>
     </div><!-- /ctarget-->
	<?php $this->RenderEnd(); ?>     
   </div><!-- /container-->
   <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
