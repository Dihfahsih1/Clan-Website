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
	echo "<html><body>message sent succcessfully</body></html>";
 //time lag goes here.
 header("Location: http://bamugoya.000webhostapp.com/index.php?");
 echo ' you will be redirected in 2secs, if not then click<a href="http://bamugoya.000webhostapp.com/contact.php"><h4> here</h4></a>';
}
}
 else {
	 echo "appointment could not be made..";
    header("Location: index.php?status=failed");
}

mysqli_close($conn);


 


?>