
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$baza = 'moja_strona';
	
	$link = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(!$link) echo '<b>przerwane połączenie </b>';
	if(!mysqli_select_db($link, $baza)) echo 'nie wybrano bazy';

	$login = 'sebastian.pajak@interia.pl';
	$pass = 'dekament64';
?>