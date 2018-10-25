
<?php 
$localhost = "localhost";
$password="MugoYA23?";
$user = "id6073100_localhost";
$dbname = "id6073100_1234bamugoya";
$conn = mysqli_connect($localhost, $user,$password,$dbname);
if (!$conn){
	die(  "problem connecting to database".mysqli_error($conn) );

}

$selectdb = mysqli_select_db($conn,$dbname);
if(!$selectdb) {

	die("unable to connect to mysql:".mysqli_error($conn)) ;
}

?>

