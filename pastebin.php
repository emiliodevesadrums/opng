
<?php/*
	pastebin.php
	Part of the Open Pastebin project - version 0.2-development
	10/8/2004
	Ville Särkkälä - villeveikko@users.sourceforge.net
	
	Changes made by
	04/28/2009
	Joshua T - http://digitalundernet.com

	This is the main/index page. It allows the user to enter
	the text, and then goes to submit.php.

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
        <h1>Open Pastebin NG<h1>
        <h2>Paste it =) !!</h2>
        <?php
            require ( "highlight.php" );
            require ( "xmlparser.php" );
            $xml_parser = new CXmlParser ();
            $document = $xml_parser->parse ( "rules.xml" );
        ?>
        <form method="post" action="submit.php">
            Topic:<input type="text" name="input_topic"><br />
            Select language:<br>
            <select name="input_language">
            <?php
                var_dump ( $document );
                for ( $i = 0; $i < count ( $document ['RULE'] ); $i++ ) {
                    print ( "<option value=\"" . $i . "\">" );
                    print ( $document ['RULE'][$i]['attributes']['NAME'] );
                    print ( "</option>" );
                }
            ?>
            </select><br>
            Enter text here:<br>
            <textarea name="input_text" rows="25" cols="80"></textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <a href="http://www.sourceforge.net/projects/openpastebin/">Based on Open Pastebin</a><br>
        <a href="http://emiliodevesa.wordpress.com/opng">Powered by Open Pastebin NG</a>
    </body>
</html>
