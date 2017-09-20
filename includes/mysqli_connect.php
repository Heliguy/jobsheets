<?php

DEFINE('DB_USER','michaela_jbsheet');
DEFINE('DB_PASSWORD','Playstation3000');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','michaela_jobsheets');

$dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die ('Could not connect to my SQL:'.mysqli_connect_error());

?>

