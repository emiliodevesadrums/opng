<?php require_once('login.php'); ?>
<?php/*
	admin.php
	This is the admin page for ALL secure items in OpenPastebin. These include Drop.php, empty.php, and admin.php
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Pastebin</title>
	<style type="text/css" media="all">@import "main.css";</style>
</head>
<body>
	<div id="Content">
		<a href="empty.php" title="Empty">Empty</a> - Empty the database. <br />
		<a href="drop.php" title="Drop">Drop</a> - Drop an entry based on ID number. <br /><br />
	</div>
</body>       