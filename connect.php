<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'Developer';
$db_pass		= 'developer';
$db_database	= 'suez'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>