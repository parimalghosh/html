<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("onward");

$a=$_POST['em'];
$b=$_POST['pass'];

$sql="select * from login_05 where email='$a' and password = '$b'";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res)){
$x=$row['email'];
$y=$row['password'];
if($x==$a && $y == $b)
echo "Login successful";

else
echo "Try again";


}

?>