<?php require_once(__TEMPLATES__ . "/header2.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<table id="none" align="left" class="allyprofile" cellpadding="0" cellspacing="0"
	id="profile" width="100%">
	<tr>
		<td colspan="2" class="pname"><?php echo $this->objAlly->FullName; ?>'s
		Profile</td>
	</tr>
<tr>

		<td width="110px" ><?php
		
		//print_r($this->objAlly);
		
		
		if($this->objAlly->UserDetail->Picture != ''){

			echo '<img src="' . __SUBDIRECTORY__ . '/Pictures/' . $this->objAlly->UserDetail->Picture . '" border="0" alt="" width="107px" height="125px"/>';

		}

		?></td>

		<td style="border: 1px solid #999999; padding: 2px 0px 2px 10px;">

		<p style="width: 40%; float: left"><strong>Company </strong><br />

		<?php echo $this->objAlly->AccountIdObject->Name; ?> <br />

		<br />

		<strong>Title</strong> <br />
		<?php echo 'Title'; ?>
		
        
        <br /><br />
		
        <strong>Code Name</strong> <br />

		<?php echo $this->objAlly->UserDetail->CodeName; ?></p>

		<p style="width: 60%; float: right"><strong>My Territory</strong><br />

		<?php echo $this->objAlly->UserDetail->Territory; ?> <br />

		<br />

		<strong>Company Pitch</strong><br />

		<?php echo $this->objAlly->UserDetail->Solutions; ?></p>

		</td>
	</tr>
	<tr>
		<td style="font-size: 16px">
		<img src="images/private_message.gif" border="0" alt=""

			align="absmiddle" /> <a href="#"><strong>Poke!</strong></a></td>

		<td>

		<table cellpadding="0" cellspacing="0" class="tprofile">

			<tr>
				<td align="center" style="color: #005500">

				<p class="txt1">Contacts You Gave to <?php echo $this->objAlly->FullName; ?></p>

				<p class="txt2"><?php echo($this->GivenContactNumber); ?></p>

				</td>

				<td align="center" style="color: #550000">

				<p class="txt1">Contacts Received from <?php echo $this->objAlly->FullName; ?></p>

				<p class="txt2"><?php print_r($this->ReceivedContactNumber); ?></p>

				</td>

				<td><img src="images/see_mess.gif" border="0" alt=""

					align="absmiddle" style="float: left; margin-left:10px" />

				<p class="smess"><a href="threads.php?aid=<?php echo $this->objAlly->Id; ?>">See <br />

				Messages</a></p>
				</td>

			</tr>

		</table>

		</td>

	</tr>



	<tr>

		<td colspan="2" style="padding-top: 20px;">



		<table align="left" cellpadding="0" cellspacing="0" border="0"
			width="100%" class="profileuser" style="border-spacing=20px;">
			
			<tr class="thprof">

				<td class="red" width="160"  height="70">
                		<strong style="color:#f9ee2f; font-size:14px">Request Contacts</strong>
                		<br /><br />
                        <span>Click</span> to request contacts
                        <br />
                        Stars = <span>your</span> targets!
                </td>
				<td> </td>
				<td colspan="2" class="green" align="center">				              	
                    <p style="color:#F9EE2F; padding-top:3px"><span style="font-size:14px"><strong>Give Contacts</strong></span> (give more to get more)</p>			

                    <table cellpadding="0" cellspacing="7" border="0" width="90%" align="center">
                    	<tr>
                        	<td align="center" valign="top">
                   				 <span>Click</span> to request contacts
								 <br />
                                 Stars = your Ally's targets!  
							</td>
                            <td align="center" valign="top">  
								<strong>OR</strong>
                            </td>
                            <td align="center" valign="top">                
								Have an account <span>not</span> on
                                <br />
                                your Ally's list? Type bellow!
                            </td>
                       </tr>
                    </table>                         
                </td>
                <td></td>
                <td class="orange" align="center">
                	<strong style="font-size:14px">Allies</strong>
                    <br />
                    Expand your own <br />
                    network by inviting others!<br/>     
                </td>

			</tr>

			<tr class="bord">

				<td valign="top" class="requestlistclass">
					                    
                  <p style="padding-left:10px">  
                    <span class="poffer"><?php echo $this->objAlly->FullName ?>
					Can Offer</span> <br />
					<span class="psmall">(click to request)</span>
                 </p>
                   <br />
                    
					<img src="images/orange_star_big.gif" alt="" border="0" align="absbottom" width="13" height="13"/>&nbsp;&nbsp;&nbsp;On your Target list (3)
              		<br /><br />
				<?php	
					foreach($this->AllyOfferArray as $AllyOffer){
	
						$objTarget = Target::LoadByUserIdAccountId($this->objUser->Id,$AllyOffer->Account->Id);
	
						if($objTarget)	
							echo '<img src="images/orange_star_big.gif" alt="" border="0" align="absbottom"  width="10" height="11"/>';
					    else echo '<p style="width:10px; float:left">&nbsp;</p>';
						
						echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="' . __SUBDIRECTORY__ .'/message_request.php?aid=' . $this->objAlly->Id .'&acid=' . $AllyOffer->Account->Id . '&type=' . MessageType::Request .'">' . $AllyOffer->Account->Name .'</a><br /><br />';
	
				  }
				?> 

				</td>
				<td></td>
				<td valign="top" class="givelistclass">
					
                    <p style="padding-left:20px;">
                        <span class="poffer"><?php echo $this->objAlly->FullName ?>'s Targets</span>
                        <br />
                        <span class="psmall">(click to give)</span>
                    </p>
                    <br />
                    
                    <img src="images/green_star_big.gif" alt="" border="0" align="absbottom"  width="13" height="13"/>&nbsp;&nbsp;&nbsp;On <span style="text-decoration:underline">your</span> Offer list (1)
                    <br /><br />
                    
				<?php	
					foreach($this->AllyTargetArray as $AllyTarget){
	
						$objOffer = Offer::LoadByUserOwnerIdAccountId($this->objUser->Id,$AllyTarget->Account->Id);
	
						if($objOffer)	
							echo '<img src="images/green_star_big.gif" alt="" border="0" align="absbottom"  width="10" height="11"/>';
						else echo '<p style="width:10px; float:left">&nbsp;</p>';
					
						echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="' . __SUBDIRECTORY__ .'/message_send.php?aid=' . $this->objAlly->Id .'&acid=' . $AllyTarget->Account->Id . '&type=' . MessageType::Send . '">' . $AllyTarget->Account->Name . '</a><br /><br />';
						
					}
				?>

				</td>



				<td valign="top" align="left">
					
                    <p style="padding-left:20px;">
                        <span class="poffer">Unlisted Targets</span>
                        <br />
                        <span class="psmall">(just type! autofills if on your Offer list)</span>
                    </p>
                    <br />
                    
				<div style="width: 80%; margin: 0 auto"><span

					style="font-size: 10px">Account</span> <br />

					<?php $this->txtAccount->RenderWithError(); ?>

					<!-- <input type="text" name="account" />  --><br />

				<br />
				<?php $this->btnGive->Render(); ?>
				<!-- <input class="give" value="Give" type="submit" align="right" /> --></div>
				</td>
				<td></td>
				<td valign="top" class="allies">
					
                    <table cellpadding="0" cellspacing="0" border="0">
    					<tr>
    						<td colspan="2"><strong style="color:#333333"><?php echo $this->objAlly->FullName ?>'s Allies</strong></td>
                        </tr>	
                        <tr>
                        	<td colspan="2" align="center"><?php $this->dtrAllyAllies->Render();?></td>
                        </tr>
                    </table>

				</td>

			</tr>

		</table>

		</td>

	</tr>

</table>

				<?php $this->RenderEnd(); ?>

</div>

<!-- /container-->
<?php require_once(__TEMPLATES__ . "/footer.global.tpl.php") ?> 

</body>

</html>

