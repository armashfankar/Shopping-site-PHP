<?php

session_start();
$host="localhost";
$user="root";
$pass="root";
$conn=mysql_connect("$host","$user","$pass");
mysql_select_db("eshopper",$conn);
$name=$_POST[username];
$password=$_POST[password];
$sql="insert into reg(username,password,email,mobile,address) values ('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[mobile]','$_POST[address]')";


if(!mysql_query($sql,$conn))
{
die ('error:'.mysql_error());
}
 
$mysql = "SELECT * FROM reg WHERE username='$name' and password='$password' ";

 $result = mysql_query($mysql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);

//$myname=$row['username'];
 $_SESSION['s_id'] = $row['id'];

 if($count==1)
 {
 //session_register('username');
	header("location:head2.php"); // put your home page neme here

}
else
{
header("location:login.php"); // put your home page neme here

}

?>
