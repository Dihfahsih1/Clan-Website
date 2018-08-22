<?php 
require('include/dbconnection.php');


if (isset($_POST["submit"])) {
$firstname = ($_POST["first_name"]);
$lastname = ($_POST["last_name"]);
$email =     ($_POST["email"]);
$image = ($_POST["image"]);
$telephone = ($_POST["phone_number"]);
$location = ($_POST["location"]);
$lineage = ($_POST["lineage"]);
$gender = ($_POST["gender"]);
$sql = "INSERT INTO member_signup(fname,lname, email, image, telephone, lineage, location, gender) VALUES ('$firstname','$lastname','$email','$image','$telephone','$lineage','$location','$gender')";
if( mysqli_query($conn , $sql) ){
header("location:index.php");

}
}
else{
	echo"you failed to register";
}

?>