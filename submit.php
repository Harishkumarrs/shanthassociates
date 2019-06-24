<?php
$servername="localhost:3306";
$username="shanth";
$password="Wt0v?80w";
$db="shanthassociates_com";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
$user_name = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phnum']);
 
// attempt insert query execution
$sql = "INSERT INTO login (name, phno) VALUES ('$user_name', '$phone')";
if(mysqli_query($conn, $sql)){
    header('location:http://shanthassociates.com/');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>