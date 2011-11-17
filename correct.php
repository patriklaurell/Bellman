<?php
	function db_config()
	{
		$link = mysql_connect('localhost', 'root', 'kallvik');
		if(!$link)
		{
			die('Could not connect. ' . mysql_error());
			return false; 
		}
		else
		{
			return true;
		}
		$c_db=mysql_query("CREATE DATABASE presentation");
		if(!$c_db)
		{
			die('Could not create database.');
		}
	}
	
	db_config();
	
	mysql_select_db("presentation");

	$name=$_POST["name"];
	$in1=$_POST["in1"];
	$in2=$_POST["in2"];
	$in3=$_POST["in3"];
	$in4=$_POST["in4"];
	$in5=$_POST["in5"];
	$in6=$_POST["in6"];
	$in7=$_POST["in7"];
	$in8=$_POST["in8"];
	$in9=$_POST["in9"];
	$in10=$_POST["in10"];
	$in11=$_POST["in11"];
	$in12=$_POST["in12"];
	$in13=$_POST["in13"];
	
	$code = $in1[0] . $in2[0] . $in3[0] . $in4[0] . $in5[0] . $in6[0] . $in7[0] . $in8[0] . $in9[0] . $in10[0] . $in11[0] . $in12[0] . $in13[0];
	$ans = "abccaccbaabba";
	$points = 0;
	
	for($i=0;$i<13;$i++)
	{
		if($code[$i]==$ans[$i])
			$points++;
	}
	
	$sql="INSERT INTO users(name, points) VALUES('$name', '$points')";
	
	if(!mysql_query($sql))
	{
		die('Could not insert data. ' . mysql_error());
	}
?>	

<html>
<body>			
	Du hade <?php echo $points; ?>/13 korrekta svar.
</body>
</html>
