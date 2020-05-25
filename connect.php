<?php
  
    $user='root';
    $server='localhost';
    $pass='';
    $noconnect='did not connect';
    $dbname='bus';
  $con= new mysqli($server,$user,$pass,$dbname);
		
    if(!mysqli_connect($server,$user,$pass)||!mysqli_select_db($con,$dbname))
        die($noconnect);
?>