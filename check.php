<?php
include "config.php";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="tbody.css">
<style type="text/css">
  <style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
 
  
}

.topnav {
  overflow: hidden;
  background-color: url("nav.jpg");
}

.topnav a {
  float: right;
  image: url("a1.jpg");
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-image: url("bb.jpg");
  color: black;
}

.topnav a.active {
  background-image: url("bb.jpg");
  color: white;
}</style>
</style>
<title>Check score
</title>
</head>
<body>
<div class="topnav">
  

  <a  href="updatescore.php">Update Score</a>
  <a class="active" href="check.php">Check Score</a>
  <a  href="addplayer.php">Add Player</a>
  <a  href="index.php">Home</a>
</div>
<center><h1><font color="#F3963A">Check your rank</h1></center>
<table border="1"  width='70%' align='center'>
<thead>
<tr>

<th>Sl.</th>

<th>Name</th>
<th>Score</th>


</tr><thead>
<tbody>
<?PHP
$f=0;
$getta=mysqli_query($conn,"SELECT * FROM player ORDER BY  score DESC") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	$f++;
		
		
		
		$name=$ro['name'];
		$score=$ro['score'];
		
		

?>
<?php 

?>



<tr>


<td><?php echo $f;?></td>

<td><?php echo $name;?></td>
<td><?php echo $score;?></td>




	


</tr>
<?PHP
    }
?>
</tbody>
</table>
</body>
</html>