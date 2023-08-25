<?php require_once('login.php'); ?>

<?php/*
	empty.php
	Part of the Open Pastebin project - version 0.4-development
	10/8/2004
	Ville Särkkälä - villeveikko@users.sourceforge.net
	
	Changes made by
	04/28/2009
	Joshua T - http://digitalundernet.com 

	This file removes (from the specified server) the databases
	put there by Open Pastebin.
	SECURITY WARNING: DON'T KEEP THIS WHERE IT CAN BE ACCESSED!

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
		<?php
		    
		    require ( "config.php" );
		    require ( "database.php" );
		    mysql_connect ( $mysql_server, $mysql_username, $mysql_password );
		    mysql_query ( "DROP DATABASE " . $mysql_dbname );
		    print ( "Done!" );
		    database_connect ();
		    print ("connected") or die ("shit!");
		?>

	</body>
</html>