<?php

$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'hello';
$mysql_db ='hostel';
@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);


@mysql_select_db($mysql_db) or die($conn_error );
#echo 'Connected';

  

?>