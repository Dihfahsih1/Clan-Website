<html>
<body>
	<div style=" float left; text-align: center; width: 90%; background: #ecdede;" >
<?php 
require('dbconnection.php');
$sql="SELECT id, lname, fname, location, lineage FROM elder_signup";
$result = mysqli_query($conn, $sql);
	echo "<h6>REGISTERED MEMBERS</h6>";
	echo  "<table>".
		       "<tr>"
		        ."<th>"." First Name" ."</th>"
		        ."<th>"." Second Name"."</th>" 
		        ."<th>"." lineage"."</th>"
		        ."<th>". " Location"."</th>"
		        ."</tr>"
		         ."</table>";
	while($row = mysqli_fetch_assoc($result)) {
		echo     "<table>"
		       ."<tr>".
		        "<td>". $row["fname"]." </td>" .
		        "<td>". $row["lname"]." </td>" .
		        "<td>". $row["lineage"]." </td>" .
		        "<td>". $row["location"]." </td>"
                 ."</tr>"
		        ."</table>";
}?>
  </div>
</body>
</html>