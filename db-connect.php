<?php
   // define database related variables
   $database    = 'suez';
   $host        = 'localhost';
   $user        = 'Developer';
   $pass        = 'developer';

   // try to connet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
   
?>