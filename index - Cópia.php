<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>CoTI - Contrata&ccedil;&atilde;o de TI</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>

<div>
<?php
$pg = $_GET['pg'];
	//if(eregi("^[a-z0-9\-_\.]+$", $pg, $regs)) { 
	$ext = ".php"; 
		if(file_exists($pg . $ext)) { 
		include($pg . $ext); 
		}else{
		include("header.php");
		}
	//}
?>
<!-- END OF CONTENT -->
</div>
<div>
<?php
$pg = $_GET['pg'];
	//if(eregi("^[a-z0-9\-_\.]+$", $pg, $regs)) { 
	$ext = ".php"; 
		if(file_exists($pg . $ext)) { 
		include($pg . $ext); 
		}else{
		include("menu.php");
		}
	//}
?>
<!-- END OF CONTENT -->
</div>

	<div>
<!-- START OF CONTENT -->
<br />
<?php
$pg = $_GET['pg'];
	//if(eregi("^[a-z0-9\-_\.]+$", $pg, $regs)) { 
	$ext = ".php"; 
		if(file_exists($pg . $ext)) { 
		include($pg . $ext); 
		}else{
		include("home.php");
		}
	//}
?>
<!-- END OF CONTENT -->

</div>
<div>
<?php
$pg = $_GET['pg'];
	//if(eregi("^[a-z0-9\-_\.]+$", $pg, $regs)) { 
	$ext = ".php"; 
		if(file_exists($pg . $ext)) { 
		include($pg . $ext); 
		}else{
		include("footer.php");
		}
	//}
?>
<!-- END OF CONTENT -->
</div>

</body>
</html>
