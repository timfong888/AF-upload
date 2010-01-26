<?php require_once(__TEMPLATES__ . "/header5.tpl.php") ?>
  <?php $this->RenderBegin(); ?>
    <div class="ctarget">
    	<br />
      <div class="notice">
      	<p>Make sure you invite sales reps you know and trust
		who sell to similar companies in your territory to join.</p>
      </div> 
      <form action="" method="post" id="fallies">
	    <table align="left" cellpadding="5" cellspacing="0" class="tinvite" width="100%">
			<tr>
            	<td colspan="3">
                	<strong>&nbsp;&nbsp;&nbsp; Invite other Sales People to Join</strong> 
                    &nbsp;&nbsp;&nbsp;
                	<a href="#" style="color:#FFFFFF"><strong>I can't put a personal message?</strong></a>
             		<img border="0" align="absbottom" style="cursor: pointer; margin-top: 8px;" onmouseout="document.getElementById('tooltip1').style.display='none';" onmouseover="document.getElementById('tooltip1').style.display='block'" alt="Ask" src="images/ask.png"/>
                    <span id="tooltip1">
                                        <strong>Allies Who Offer</strong>
                                        <br/><br/>
                                        "Allies" are other sales reps whom you have invited to become your "Ally".
                                        <br/><br/>
                                        This is the <strong>number</strong> who have indicated that <strong>they</strong> have <strong>contacts</strong> at this Target account or yours.
                   </span>
                </td>
            </tr>
            <tr><td colspan="3"><?php $this->lblMessage->Render()?></td>
            <tr>
                <td><!-- <input type="text" name="workemail" /> -->
                &nbsp;&nbsp;&nbsp; <?php $this->txtEmail->RenderWithError(); ?>
                </td> 
               
                <td><!-- <input type="text" name="FirstName" /> -->
                 <?php $this->txtFullName->RenderWithError(); ?>
                </td>               
                <td width="32%"><!-- <input type="submit" name="invite" class="alliesInvite" value="Invite"/>  -->
                <?php $this->btnInvite->Render(); ?>
                </td>  
              </tr> 
              <tr>
                <td valign="top">
                	&nbsp;&nbsp;&nbsp; <strong>Work Email </strong><span style="font-size:10px">(no gmail, yahoo or hotmail)</span>
                </td>
                <td valign="top">
                	<strong>First Name</strong>
                </td>
                 <td>                	
                </td>
              </tr>                  
        </table>        
      </form>
      <table align="left" cellpadding="7" cellspacing="0" border="0" width="100%" class="callies">
		 <tr>
        	<td colspan="5" style="border:none"><strong style="font-size:14px">Current Allies</strong></td>
         </tr> 
      </table>   
      <div style="clear:both"><?php $this->dtgAllies->Render(); ?></div>
     </div><!-- /ctarget-->
    <?php $this->RenderEnd(); ?>     
   </div><!-- /container-->
   <?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 
</body>
</html>
