<?php 
require('include/dbconnection.php');
if (isset($_POST["submit"])) {
$comment = ($_POST["comment"]) ;
$name = ($_POST["name"]) ;
if($name && $comment){
$sql = "INSERT INTO comment( name, commenting) VALUES ('$name','$comment')";
if( mysqli_query($conn , $sql) ){
flush();
header("https://bamugoya.000webhostapp.com/index.php/");
echo"you will be redirected in 5s, if not click <a href='https://bamugoya.000webhostapp.com/index.php'/><b>here to go back</b></a>";
}
}
}
else{
	echo"Please fill all the fields";
}


?>