<?php require_once(__TEMPLATES__ . "/header2.tpl.php") ?>
  <?php $this->RenderBegin(); ?>
	    <table align="center" border="0" cellpadding="0" cellspacing="0" id="forms">
<tr>
            	<td height="32" colspan="4" class="headerform" style="vertical-align:top;">Edit Profile</td>
            </tr>
        	<tr class="trs">
            	<td height="24" class="text">Full Name*</td>
              <td><?php $this->txtFullName->RenderWithError(); ?>
                <td class="text">Code Name</td>
                <td>
                  <?php $this->txtCodeName->RenderWithError(); ?>
               </td>
            </tr>
            <tr>
            	<td height="40" colspan="3"></td>
           	  <td><span class="text2">(5-20 characters, single word)</span></td>
            </tr>
            <tr class="trs">
            	<td height="49" class="text">Company*</td>
              <td><?php $this->txtCompany->RenderWithError(); ?></td>
                <td class="text">Company URL</td>
                <td><?php $this->txtCompanyURL->RenderWithError(); ?></td>
            </tr>
            <tr class="trs">
            	<td height="56" class="text">Company Email</td>
              <td><?php $this->txtEmail->RenderWithError(); ?></td>
                <td class="text">Zip Code Work</td>
                <td><?php $this->txtZipCode->RenderWithError(); ?></td>
            </tr>
            <tr>
            	<td height="57" class="text">Backup Email</td>
              <td><?php $this->txtBackupEmail->RenderWithError(); ?></td>
                <td class="text">
                URL for Logo
                
                    <img border="0" align="absbottom" style="cursor: pointer;" onmouseout="document.getElementById('tooltip').style.display='none';" onmouseover="document.getElementById('tooltip').style.display='block'" alt="Ask" src="images/ask.png"/>
                    <span id="tooltip">                       
                        URL for logo<br /><br />
                        1) Go to the home page of your company's website<br /><br />
                        2) Right click on the logo<br /><br />
                        3) Go to "Copy Link Location"<br /><br />
                        4) Come back and paste!<br /><br />
                        Done!<br />
                    </span>
              
              </td>
                <td><?php $this->txtCompanyLogo->RenderWithError(); ?></td>
            </tr>
             <tr>
            	<td height="27" colspan="2" class="text1">Pitch of My Solutions <span class="text3">(50 words or less description)</span></td>
               <td colspan="2" class="text1">Description of My Territory <span class="text3">(50 words or less)</span></td>
            </tr>
            <tr>
            	<td height="114" colspan="2"><?php $this->txtSolutions->RenderWithError(); ?></td>
              <td colspan="2"><?php $this->txtTerritory->RenderWithError(); ?></td>
            </tr>
            <tr>
            	<td height="36" colspan="2" class="text1">Photo</td>
              <td colspan="2" class="text1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reset Password</td>
          </tr>
          <tr>
			  <td colspan="2"><?php $this->flaPicture->RenderWithError(); ?></td>		
              <td colspan="2" class="text1"><div id="password" align="right">
                    New Password : <?php $this->txtNewPassword->RenderWithError(); ?><br />
                    Retype Password : <?php $this->txtRetypePassword->RenderWithError(); ?></div></td>
          </tr>
        </table>
        <div class="submit" align="right"><?php $this->btnSave->Render(); ?> &nbsp;&nbsp;<a href="#">Cancel</a></div>
    <?php $this->RenderEnd(); ?>
	</div><!-- /container-->
	<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?>
	<?php require_once(__TEMPLATES__ . "/footer.profile.tpl.php") ?>
</body>
</html>
