<?php 
require('include/dbconnection.php');
if (isset($_POST["submit"])) {
$comment = ($_POST["comment"]) ;
$name = ($_POST["name"]) ;
if($name && $comment){
$sql = "INSERT INTO comment( name, commenting) VALUES ('$name','$comment')";
if( mysqli_query($conn , $sql) ){
	echo"added success";
header("location:index.php");
}
}
}
else{
	echo"Please fill all the fields";
}


?>