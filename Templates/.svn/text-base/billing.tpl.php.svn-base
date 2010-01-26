  <?php  require_once(__TEMPLATES__ . "/header8.tpl.php") ?>

  <?php  $this->RenderBegin(); ?> 

<!-- inline CSS for billing -->
<style type="text/css">

#plans_and_pricing th {
	border:1px solid #AAAAAA;
	width: 800px;
}

tr.row_1 {
	border: 1px solid #AAAAAA;
	background-color: #e1F3ff;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
}

tr.row_0 {
	text-align: center;
}
td.features_column {
		font-family: Arial, Helvetica, sans-serif;
		text-align: left;
		font-size: 11px;
		font-weight: bold;
		padding-left: 10px;	
}

#billing_table td.label {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #666666;
	font-weight: bold;
}

#billing_table th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	padding-bottom: 20px;
}

#billing_manage {
	position: relative;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	border-style: solid;
	border-width: 1px;
	border-color: #0099FF;
	background-color: #E1F3FF;
	padding-bottom: 15px;
	padding-left: 25px;
	padding-right: 25px;
	padding-top: 15px;
	margin-bottom: 10px;
	margin-top: 15px;
}
#billing_manage .button {
	position: absolute;
	top: 10px;
	right: 25px;
	border: 1px solid #006;
	background-color: #FF9900;
	font-weight: bold;
	padding: 3px 3px 3px 3px;
	font-size: 10px;

}
	
</style>
<div class = "ctarget">
	
  <!-- if the account is verified, then display this instead of section below -->
  <div id="billing_manage"> 
  	<strong>Click</strong> to go to your billing history, current bill, update your credit card, change your address: 
	<form action="https://www.billingcircle.com/demo/myaccount/index.php" method="post">
   		<input type="hidden" name="login" value="1">
   		<input type="hidden" name="email" size="30" value="demo@ftwinnovations.com">
   		<input type="hidden" name="password" size="15" value="123456">
   		<input type="hidden" name="custom_incorrect_login" value="http://www.mycompany.com/customers/incorrect.html">
   		<input type="hidden" name="custom_logout" value="http://dev.allyforce.com/Templates/billing.tpl.php">
   		<input type="submit" class="button" value="Billing Settings">
	</form> 

  </div>
  <!-- if the account is not verified, then show billing_table -->
  <table id="billing_table" style="width: 100%;">
  	<th colspan ="3">Billing Information</th>
  	<tr>
  		<td class="label" align="right" width="14%">First Name</td>
		<td colspan="3"><input size="25" style="width: 100%;" type="text" name "account[billing_first_name"/> </td>
		<td class="label" align="right">Card Type</td>
		<td><select id="account_billing_type" name "account[billing_type" style="width: 150px;"/>
			<option value = "Visa">Visa</option>
			<option value="MasterCard">MasterCard</option>
			<option value="American Express">American Express</option>
			<option value="Discover">Discover</option>
			</select>
		</td>
	</tr>
	<tr>
			<td class="label" align="right">Last Name:</td>
          	<td colspan="3"><input id="account_billing_last_name" name="account[billing_last_name]" size="25" style="width: 100%;" tabindex="3" type="text" value="" /></td>
          	<td class="label" align="right">Card Number:</td>
          	<td>
            	<input id="account_billing_cc_number" name="account[billing_cc_number]" size="20" tabindex="12" type="text" value="" />
          	</td>
	</tr>
	<tr>
          <td class="label" align="right">Email:</td>
          <td colspan="3"><input id="account_billing_email" name="account[billing_email]" size="25" style="width: 100%;" tabindex="4" type="text" value="" /></td>
          <td class="label" align="right">Expiration Date:</td>
          <td>
            <select id="account_billing_cc_exp_month" name="account[billing_cc_exp_month]">
				<option value="1">1 - Jan</option>
				<option value="2">2 - Feb</option>
				<option value="3">3 - Mar</option>
				<option value="4" selected="selected">4 - Apr</option>
				<option value="5">5 - May</option>
				<option value="6">6 - Jun</option>
				<option value="7">7 - Jul</option>
				<option value="8">8 - Aug</option>
				<option value="9">9 - Sep</option>
				<option value="10">10 - Oct</option>
				<option value="11">11 - Nov</option>
				<option value="12">12 - Dec</option>
			</select>

            <select id="account_billing_cc_exp_year" name="account[billing_cc_exp_year]">
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011" selected="selected">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
			</select>

          </td>
	</tr>
	
	<tr>
          <td class="label" align="right">Street 1:</td>
          <td colspan="3"><input id="account_billing_street1" name="account[billing_street1]" size="25" style="width: 100%;" tabindex="5" type="text" value="" /></td>
          <td colspan="2" rowspan="5" style="padding-left: 10px; padding-top: 0; margin-top: 0px;">
            
              <div class="error_explanation" style="padding: 0 20px; background: transparent; border: 0px; color: #900;">
			  Updates to your billing information may take up to 24 hours to take effect.  
			  If you require immediate resolution of your billing status, you may correct all information AND re-enter your entire credit card number.
			  </div>
            
          </td>
        </tr>
		
		<tr>
          <td class="label" align="right">Street 2:</td>
          <td colspan="3"><input id="account_billing_street2" name="account[billing_street2]" size="25" style="width: 100%;" tabindex="6" type="text" value="" /></td>
        </tr>
        <tr>
          <td class="label" align="right">City:</td>
          <td colspan="3"><input id="account_billing_city" name="account[billing_city]" size="25" style="width: 100%;" tabindex="7" type="text" value="" /></td>
        </tr>
        <tr>
          <td class="label" align="right">State/Province:</td>
          <td width="10%"><input id="account_billing_state" name="account[billing_state]" size="5" style="width: 100%;" tabindex="8" type="text" value="" /></td>
          <td class="label" align="right">Postal Code:</td>
          <td width="10%"><input id="account_billing_postal_code" name="account[billing_postal_code]" size="5" style="width: 100%;" tabindex="9" type="text" value="" /></td>
        </tr>
		
		<tr>
          <td class="label" align="right">Country:</td>
          <td colspan="3"><select id="account[billing_country]" name="account[billing_country]" style="width: 150px;" tabindex="10"><option value="United States" selected="selected">United States</option><option value="" disabled="disabled">-------------</option>
			<option value="Afghanistan">Afghanistan</option>
			<option value="Aland Islands">Aland Islands</option>
			<option value="Albania">Albania</option>
			<option value="Algeria">Algeria</option>
			<option value="American Samoa">American Samoa</option>
			<option value="Andorra">Andorra</option>
			<option value="Angola">Angola</option>
			<option value="Anguilla">Anguilla</option>
			<option value="Antarctica">Antarctica</option>
			<option value="Antigua And Barbuda">Antigua And Barbuda</option>
			<option value="Argentina">Argentina</option>
			<option value="Armenia">Armenia</option>
			<option value="Aruba">Aruba</option>
			<option value="Australia">Australia</option>
			<option value="Austria">Austria</option>
			<option value="Azerbaijan">Azerbaijan</option>
			<option value="Bahamas">Bahamas</option>
			<option value="Bahrain">Bahrain</option>
			<option value="Bangladesh">Bangladesh</option>
			<option value="Barbados">Barbados</option>
			<option value="Belarus">Belarus</option>
			<option value="Belgium">Belgium</option>
			<option value="Belize">Belize</option>
			<option value="Benin">Benin</option>
			<option value="Bermuda">Bermuda</option>
			<option value="Bhutan">Bhutan</option>
			<option value="Bolivia">Bolivia</option>
			<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
			<option value="Botswana">Botswana</option>
			<option value="Bouvet Island">Bouvet Island</option>
			<option value="Brazil">Brazil</option>
			<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
			<option value="Brunei Darussalam">Brunei Darussalam</option>
			<option value="Bulgaria">Bulgaria</option>
			<option value="Burkina Faso">Burkina Faso</option>
			<option value="Burundi">Burundi</option>
			<option value="Cambodia">Cambodia</option>
			<option value="Cameroon">Cameroon</option>
			<option value="Canada">Canada</option>
			<option value="Cape Verde">Cape Verde</option>
			<option value="Cayman Islands">Cayman Islands</option>
			<option value="Central African Republic">Central African Republic</option>
			<option value="Chad">Chad</option>
			<option value="Chile">Chile</option>
			<option value="China">China</option>
			<option value="Christmas Island">Christmas Island</option>
			<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
			<option value="Colombia">Colombia</option>
			<option value="Comoros">Comoros</option>
			<option value="Congo">Congo</option>
			<option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
			<option value="Cook Islands">Cook Islands</option>
			<option value="Costa Rica">Costa Rica</option>
			<option value="Cote d'Ivoire">Cote d'Ivoire</option>
			<option value="Croatia">Croatia</option>
			<option value="Cuba">Cuba</option>
			<option value="Cyprus">Cyprus</option>
			<option value="Czech Republic">Czech Republic</option>
			<option value="Denmark">Denmark</option>
			<option value="Djibouti">Djibouti</option>
			<option value="Dominica">Dominica</option>
			<option value="Dominican Republic">Dominican Republic</option>
			<option value="Ecuador">Ecuador</option>
			<option value="Egypt">Egypt</option>
			<option value="El Salvador">El Salvador</option>
			<option value="Equatorial Guinea">Equatorial Guinea</option>
			<option value="Eritrea">Eritrea</option>
			<option value="Estonia">Estonia</option>
			<option value="Ethiopia">Ethiopia</option>
			<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
			<option value="Faroe Islands">Faroe Islands</option>
			<option value="Fiji">Fiji</option>
			<option value="Finland">Finland</option>
			<option value="France">France</option>
			<option value="French Guiana">French Guiana</option>
			<option value="French Polynesia">French Polynesia</option>
			<option value="French Southern Territories">French Southern Territories</option>
			<option value="Gabon">Gabon</option>
			<option value="Gambia">Gambia</option>
			<option value="Georgia">Georgia</option>
			<option value="Germany">Germany</option>
			<option value="Ghana">Ghana</option>
			<option value="Gibraltar">Gibraltar</option>
			<option value="Greece">Greece</option>
			<option value="Greenland">Greenland</option>
			<option value="Grenada">Grenada</option>
			<option value="Guadeloupe">Guadeloupe</option>
			<option value="Guam">Guam</option>
			<option value="Guatemala">Guatemala</option>
			<option value="Guernsey">Guernsey</option>
			<option value="Guinea">Guinea</option>
			<option value="Guinea-Bissau">Guinea-Bissau</option>
			<option value="Guyana">Guyana</option>
			<option value="Haiti">Haiti</option>
			<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
			<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
			<option value="Honduras">Honduras</option>
			<option value="Hong Kong">Hong Kong</option>
			<option value="Hungary">Hungary</option>
			<option value="Iceland">Iceland</option>
			<option value="India">India</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
			<option value="Iraq">Iraq</option>
			<option value="Ireland">Ireland</option>
			<option value="Isle of Man">Isle of Man</option>
			<option value="Israel">Israel</option>
			<option value="Italy">Italy</option>
			<option value="Jamaica">Jamaica</option>
			<option value="Japan">Japan</option>
			<option value="Jersey">Jersey</option>
			<option value="Jordan">Jordan</option>
			<option value="Kazakhstan">Kazakhstan</option>
			<option value="Kenya">Kenya</option>
			<option value="Kiribati">Kiribati</option>
			<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
			<option value="Korea, Republic of">Korea, Republic of</option>
			<option value="Kuwait">Kuwait</option>
			<option value="Kyrgyzstan">Kyrgyzstan</option>
			<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
			<option value="Latvia">Latvia</option>
			<option value="Lebanon">Lebanon</option>
			<option value="Lesotho">Lesotho</option>
			<option value="Liberia">Liberia</option>
			<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
			<option value="Liechtenstein">Liechtenstein</option>
			<option value="Lithuania">Lithuania</option>
			<option value="Luxembourg">Luxembourg</option>
			<option value="Macao">Macao</option>
			<option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former Yugoslav Republic Of</option>
			<option value="Madagascar">Madagascar</option>
			<option value="Malawi">Malawi</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Maldives">Maldives</option>
			<option value="Mali">Mali</option>
			<option value="Malta">Malta</option>
			<option value="Marshall Islands">Marshall Islands</option>
			<option value="Martinique">Martinique</option>
			<option value="Mauritania">Mauritania</option>
			<option value="Mauritius">Mauritius</option>
			<option value="Mayotte">Mayotte</option>
			<option value="Mexico">Mexico</option>
			<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
			<option value="Moldova, Republic of">Moldova, Republic of</option>
			<option value="Monaco">Monaco</option>
			<option value="Mongolia">Mongolia</option>
			<option value="Montenegro">Montenegro</option>
			<option value="Montserrat">Montserrat</option>
			<option value="Morocco">Morocco</option>
			<option value="Mozambique">Mozambique</option>
			<option value="Myanmar">Myanmar</option>
			<option value="Namibia">Namibia</option>
			<option value="Nauru">Nauru</option>
			<option value="Nepal">Nepal</option>
			<option value="Netherlands">Netherlands</option>
			<option value="Netherlands Antilles">Netherlands Antilles</option>
			<option value="New Caledonia">New Caledonia</option>
			<option value="New Zealand">New Zealand</option>
			<option value="Nicaragua">Nicaragua</option>
			<option value="Niger">Niger</option>
			<option value="Nigeria">Nigeria</option>
			<option value="Niue">Niue</option>
			<option value="Norfolk Island">Norfolk Island</option>
			<option value="Northern Mariana Islands">Northern Mariana Islands</option>
			<option value="Norway">Norway</option>
			<option value="Oman">Oman</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Palau">Palau</option>
			<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
			<option value="Panama">Panama</option>
			<option value="Papua New Guinea">Papua New Guinea</option>
			<option value="Paraguay">Paraguay</option>
			<option value="Peru">Peru</option>
			<option value="Philippines">Philippines</option>
			<option value="Pitcairn">Pitcairn</option>
			<option value="Poland">Poland</option>
			<option value="Portugal">Portugal</option>
			<option value="Puerto Rico">Puerto Rico</option>
			<option value="Qatar">Qatar</option>
			<option value="Reunion">Reunion</option>
			<option value="Romania">Romania</option>
			<option value="Russian Federation">Russian Federation</option>
			<option value="Rwanda">Rwanda</option>
			<option value="Saint Barthelemy">Saint Barthelemy</option>
			<option value="Saint Helena">Saint Helena</option>
			<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
			<option value="Saint Lucia">Saint Lucia</option>
			<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
			<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
			<option value="Samoa">Samoa</option>
			<option value="San Marino">San Marino</option>
			<option value="Sao Tome and Principe">Sao Tome and Principe</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
			<option value="Senegal">Senegal</option>
			<option value="Serbia">Serbia</option>
			<option value="Seychelles">Seychelles</option>
			<option value="Sierra Leone">Sierra Leone</option>
			<option value="Singapore">Singapore</option>
			<option value="Slovakia">Slovakia</option>
			<option value="Slovenia">Slovenia</option>
			<option value="Solomon Islands">Solomon Islands</option>
			<option value="Somalia">Somalia</option>
			<option value="South Africa">South Africa</option>
			<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
			<option value="Spain">Spain</option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="Sudan">Sudan</option>
			<option value="Suriname">Suriname</option>
			<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
			<option value="Swaziland">Swaziland</option>
			<option value="Sweden">Sweden</option>
			<option value="Switzerland">Switzerland</option>
			<option value="Syrian Arab Republic">Syrian Arab Republic</option>
			<option value="Taiwan, Province of China">Taiwan, Province of China</option>
			<option value="Tajikistan">Tajikistan</option>
			<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
			<option value="Thailand">Thailand</option>
			<option value="Timor-Leste">Timor-Leste</option>
			<option value="Togo">Togo</option>
			<option value="Tokelau">Tokelau</option>
			<option value="Tonga">Tonga</option>
			<option value="Trinidad and Tobago">Trinidad and Tobago</option>
			<option value="Tunisia">Tunisia</option>
			<option value="Turkey">Turkey</option>
			<option value="Turkmenistan">Turkmenistan</option>
			<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
			<option value="Tuvalu">Tuvalu</option>
			<option value="Uganda">Uganda</option>
			<option value="Ukraine">Ukraine</option>
			<option value="United Arab Emirates">United Arab Emirates</option>
			<option value="United Kingdom">United Kingdom</option>
			<option value="United States" selected="selected">United States</option>
			<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
			<option value="Uruguay">Uruguay</option>
			<option value="Uzbekistan">Uzbekistan</option>
			<option value="Vanuatu">Vanuatu</option>
			<option value="Venezuela">Venezuela</option>
			<option value="Viet Nam">Viet Nam</option>
			<option value="Virgin Islands, British">Virgin Islands, British</option>
			<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
			<option value="Wallis and Futuna">Wallis and Futuna</option>
			<option value="Western Sahara">Western Sahara</option>
			<option value="Yemen">Yemen</option>
			<option value="Zambia">Zambia</option>
			<option value="Zimbabwe">Zimbabwe</option></select></td>
        </tr>
<div id="plans_and_pricing">
	<table style="width: 100%;">
		<tr>
			<th width="33%">&nbsp;</th>
			<th width="21%">Rookie <br><input type="radio" name="plan" align="center" value="rookie" checked></th>
			<th width="21%">Pro<br><input type="radio" name="plan" align="center" value="pro"></th>
		</tr>
		
		<tr class="row_1">
			<td class="features_column">Cost per month </td>
			<td class="check_column"> <img alt="Check" src="../images/check.png" /></td>
			<td>$19.95 per month</td>
		</tr>
		
		<tr class="row_0">
			<td class="features_column">Unlimited Allies</td>
			<td class="check_column"> <img alt="Check" src="../images/check.png" /></td>
			<td class="check_column"> <img alt="Check" src="../images/check.png" /></td>
		</tr>
		
		<tr class="row_1">
			<td class="features_column">Unlimited Offered Accounts</td>
			<td> <img alt="Check" src="../images/check.png" /></td>
			<td> <img alt="Check" src="../images/check.png" /></td>
		</tr>			

		<tr class="row_0">
			<td class="features_column">Unlimited Target Accounts</td>
			<td> <img alt="Check" src="../images/check.png" /></td>
			<td> <img alt="Check" src="../images/check.png" /></td>
		</tr>	

		<tr class="row_1">
			<td class="features_column">Send contacts to Allies</td>
			<td> <img alt="Check" src="../images/check.png" /></td>
			<td> <img alt="Check" src="../images/check.png" /></td>
		</tr>	
		
		<tr class="row_0">
			<td class="features_column">Receive contacts from Allies</td>
			<td> <img alt="Not Available" src="../images/non-check.png" /></td>
			<td> <img alt="Check" src="../images/check.png" /></td>
		</tr>
		
		<tr class="row_1">
			<td class="features_column">Receive recommendations on Allies to invite</td>
			<td> <img alt="Not Available" src="../images/non-check.png" /></td>
			<td> <img alt="Check" src="../images/check.png" /></td>
		</tr>						
	</table>
</div>
</div> <!--close ctarget -->

<?php $this->RenderEnd(); ?>
			
