<?php

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project_pkl");



$query="Select * from player";
$result=mysqli_query($con,$query);
?>

<html>
<head>
</head>
<body style="background:url(up.jpg);background-repeat:no-repeat ;background-size:100%,100%">
<center>
<br><br>
<font color="Aqua"><h1>PLAYER DETAILS</h1></font>
<table width="600" bgcolor="Aqua" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Player_Id</th>
<th>Player_Name</th>
<th>Date_Of_Birth</th>
<th>Nationality</th>
<th>Skill</th>
<tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";

	echo "<td>".$row['Player_Id']."</td>";
	
	echo "<td>".$row['Player_Name']."</td>";
	
	echo "<td>".$row['Date_Of_Birth']."</td>";

	echo "<td>".$row['Nationality']."</td>";

	echo "<td>".$row['Skill']."</td>";

	echo "</tr>";
}

?>
</table>
<?php
echo "<form action=\"http://localhost/project/menu1.html\">";
echo "<input type=\"submit\" style=\"color:Aqua;background-color:black;border-radius:10px;\" name=\"button\" value=\"back\">";
echo "</form>";
?>
</body>
</html>