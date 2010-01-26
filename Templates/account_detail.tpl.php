<?php require_once(__TEMPLATES__ . "/header10.tpl.php") ?>
<?php $this->RenderBegin(); ?>

<div id="account-header" class="span-20">
	<div class="span-4">
		<h2 class="red">Gymboree</h2>
	</div>
	<div class="span-10 last">
		<a href="#" class="button">Remove from Target</a>
		<a href="#" class="button">Add as Offered</a> 
	</div>	
</div>

<hr class="space" />
<h3>Allies</h3>
<table class="account-allies span-22 prepend-1">
	<th>Ally</th>
	<th>Sales Org.</th>
	<th>Target?</th>
	<th>Offered?</th>
	<th>Message Threads</th>

	<tr><td><a href="#">David H.</a></td>
	<td>A10 Networks</td>
	<td>Y</td>
	<td>N</td>
	<td><a href="#" class="button">Start Exchange</a></td>
	
	<tr><td><a href="#">Chris C.</a></td>
	<td>HP</td>
	<td>Y</td>
	<td>N</td>
	<td><a href="#">5/08/09</a></td></tr>
</table>
<hr class="space" />
<h3>Contacts You Received</h3>
<table class="account-contacts prepend-1 class-22">
	<th>Full Name</th>
	<th>Title</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Ally</th>
	<th>Date Received</th>
	<tr>
	<td>Giancomo Guilizzoni</td>
	<td>Dir of IT</td>
	<td>415-555-1212</td>
	<td>giancomo@adbirte</td>
	<td><a href="#">Emmy C.</a></td>
	<td>9/1/08</td>
	</tr>
	
	<tr>
	<td>Mariah Maclachlan</td>
	<td>CIO</td>
	<td>415-545-5555</td>
	<td>mariah@adbirte</td>
	<td><a href="#">Chris W.</a></td>
	<td>10/5/08</td>
	</tr>
</table>
<hr class="space" />
<h3>Contacts You Have</h3>
<table class="account-contacts prepend-1 span-22">
	<th>Full Name</th>
	<th>Title</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Ally</th>
	<th>Date Given</th>
	<tr>
	<td>Daryl Neely</td>
	<td>Dir of IT</td>
	<td>415-555-1212</td>
	<td>daryl@adbrite.com</td>
	<td><a href="#">Carl B.</a></td>
	<td>5/08/09</td>
	</tr>
	
	<tr>
	<td>Denzel Washington</td>
	<td>CIO</td>
	<td>415-545-5555</td>
	<td>denzel@adbirte</td>
	<td>Chris W.</td>
	<td><a href="#" class="ss_sprite ss_email"></a></td>
	</tr>
</table>
</div>
<?php $this->RenderEnd(); ?> 

