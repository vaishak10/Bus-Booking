<?php
$username= &_POST['user'];
$password= &_POST['pass'];

$username= stripcslashes($username);
$password= stripcslashes($password);

$username= mysql_real_escape_string($username);
$password= mysql_real_escape_string($password);


mysql_connect("localhost","root","");
mysql_select_db("bus");

$res =mysql_query("select * from admin where username='$username' and Password='$password'") or ("failed to query database" .mysql_error());

$row=mysql_fetch_array($res);


if($row['username']=$username && $row['Password']=$password){
    echo" login successful".$row['username'];
else
     echo"unsuccessful";
    
    
}

?>
