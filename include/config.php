<?php
$db = new Database("mysql", "root", "kaitoinc.com","pushadmin","");
$db->connect();
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

//$YEAR=0;
?>
