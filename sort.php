

<html>
<head>
	<link href="bellman.css" rel="stylesheet" type="text/css" >
</head>

<body>
	<?php
	if(!mysql_connect("localhost", "root", "kallvik"))
	{
		die("Could not connect to database." . mysql_error());
	}
	mysql_select_db("presentation");
	
	$result=mysql_query("SELECT * FROM users ORDER BY points DESC;");
	
	echo '<div class="highscore">';
	echo "<h1> Resultat </h1>";
	echo "<table>";

	while($row=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["points"] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	echo "</div>"
?>	
</body>
</html>
