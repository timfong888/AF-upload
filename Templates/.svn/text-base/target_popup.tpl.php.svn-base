<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Targets > Cut and Paste</title>
	<?php require_once('includes/stylesheets.inc.php'); ?>
	<script language="javascript">
		function checkAll_1($action){
			for (var i=0;i<document.forms[0].elements.length;i++)
			{
				var e=document.forms[0].elements[i];
				if (e.name=='exst_accnt_chk[]')
				{
					e.checked=$action;
				}
			}
		}
		function checkAll_2($action){
			for (var i=0;i<document.forms[0].elements.length;i++)
			{
				var e=document.forms[0].elements[i];
				if (e.name=='new_accnt_chk[]')
				{
					e.checked=$action;
				}
			}
		}
	</script>
	<?php require_once(__TEMPLATES__ . "/header.global.tpl.php") ?>
</head>

<body>
<?php $this->RenderBegin(); ?>
	
	<?php $this->pnlFace->Render();?>				
		
<?php $this->RenderEnd(); ?>


</body>
</html>