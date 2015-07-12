<html>
<head></head>
<body>
<?php
$host_name="10.0.0.11";
$user_name="mounika";
$password="tecnics";
// echo 'Connected successfully';
$conn=mysql_connect($host_name,$user_name,$password)or die("unable to connect");
if(!$conn)
{
 die('Could not connect: ' . mysql_error());
}
$sel=mysql_select_db('mounikadb',$conn);
if(!$sel)
{
	die("connection error");
}
$rollno=$_POST['rollno'];
$password=$_POST['password'];
$sql="update details set password='$password' where rollno='$rollno'";
mysql_query($sql,$conn);
echo "Updated successfully";
?>
</body>
</html>

