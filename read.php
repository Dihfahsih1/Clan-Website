<html>
<body>
	<div style=" float left; margin-left: -44%; text-align: left; width: 50%; background: #ecdede;" >
<?php 
require('include/dbconnection.php');
$sql="SELECT id, name, commenting, tim FROM comment";
$result = mysqli_query($conn, $sql);
	echo "<h6>What Other People said when they visited</h6>";
	while($row = mysqli_fetch_assoc($result)) {
		echo   "<b>". $row["name"]."</b>" . " said, " . '   " '.$row["commenting"] .'  "' . " On "."<i>" . $row["tim"] . "</i>" . " <br>" ;
}?>
  </div>
</body>
</html>

