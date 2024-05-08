<?php
$Conn= mysqli_connect("localhost","root","","connection");
if($Conn)
{
echo "successfully connected";
//$query="insert into data values('Mayank',22,'dun','Rajput')";
//mysqli_query($Conn,$query);
  $query1="create database phpCodeSql";
  $query2= "use phpCodeSql";
  $query3="create table students(name varchar(20),age int)";
  mysqli_query($Conn,$query1);
  mysqli_query($Conn,$query2);
  mysqli_query($Conn,$query3);

}
else{
echo "faied";
}
?>

