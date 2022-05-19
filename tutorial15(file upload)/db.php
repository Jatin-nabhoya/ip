<?php

$connection=new mysqli("localhost:3360","root","","clubuvdb");

if ($connection->connect_error) {
	echo $connection->connect_error; 
}

?>