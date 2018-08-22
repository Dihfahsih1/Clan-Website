<?php
require('include/dbconnection.php');
/* User login process, checks if user exists and password is correct */
// Escape email to protect against SQL injections
if (isset($_POST["submit"])) {
$password=($_POST['password']);
$email = ($_POST['email']);
$sql = "SELECT * FROM elder_signup WHERE email='$email' OR 1=1";
$result=mysqli_query($conn, $sql);

if( mysqli_query($conn , $sql) ){
header("location:Membership.php");

}
}
else{
    echo"you failed to log in";
}

?>