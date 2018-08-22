<?php
require('dbconnection.php');
if(isset($_POST['submit'])){
 $fname=($_POST['fname']);
 $lname=($_POST['lname']);
 $mail=($_POST['mail']);
 $phone=($_POST['phone']);
 $message=($_POST['message']);
   
 $sql="INSERT INTO messages (fname,lname,mail,phone,message) VALUES('$fname','$lname','$mail','$phone','$message')";
if (mysqli_query($conn, $sql)) {
	echo "<html><body>message succcessfull</body></html>";
 //time lag goes here.
 header("Location: index.php?status=success");
}
}
 else {
	 echo "appointment could not be made..";
    header("Location: index.php?status=failed");
}

mysqli_close($conn);


 


?>