<?php

include '../wp-config.php';

$dbuser = DB_USER;
$dbpass = DB_PASSWORD;
$dbhost = DB_HOST;
$dbname = DB_NAME;

//$outputPath = "G:\\xampp\\htdocs\\www\\-dbbackups\\";   local use
$outputPath = "/kunden/homepages/0/d75935738/htdocs/-dbbackups/";

//$path_to_mysqldump = "G:\\xampp\\mysql\\bin\\mysqldump.exe"; local use
$path_to_mysqldump = "/usr/bin/mysqldump"; 

$backupFile = $dbname .'-' .date("Y-m-d") .'.sql';
$outputFile =  $outputPath.$backupFile;

$date = date("Y/m/d - H:i");

exec("$path_to_mysqldump --no-create-db=true -h $dbhost -u $dbuser --password=$dbpass $dbname >  $outputFile");

echo("export of " .$backupFile . " to " .$outputPath ." completed at " .$date);

?>