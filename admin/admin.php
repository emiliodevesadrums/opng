<?php require_once('login.php'); ?>
<?php/*
	login.php
	Part of the Open Pastebin project - version 0.4-development
	04/28/2009
	Joshua T - http://digitalundernet.com

	This is the admin page for ALL secure items in OpenPastebin. These include Drop.php, empty.php, and admin.php
	

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
		<title>Open Pastebin NG</title>
		<style type="text/css" media="all">@import "main.css";</style>
	</head>
	<body>
		<h1>Open Pastebin NG</h1>
		<p> Welcome to the admin panel. Here you can delete an entry or the entire database. The power is yours! </p>
		<a href="empty.php" title="Empty">Empty</a> - Empty the database. <br />
		<a href="drop.php" title="Drop">Drop</a> - Drop an entry based on ID number. <br /><br />
	</body>
</html>