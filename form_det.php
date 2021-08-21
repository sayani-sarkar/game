<?php
include 'config.php';
$sl=$_REQUEST['sl'];
$data= mysqli_query($conn,"SELECT * FROM player where sl='$sl'");
while ($row = mysqli_fetch_array($data))
		{
		$name=$row['name'];
		$score=$row['score'];
		}
sleep(1);
?>
<html>
<input type="hidden" name="updt" id="updt" value="<?php echo $score;?>">
<br><br>
<table border="0" width="90%" bgcolor="red" align="center" valign="center">
<tr>
<td align="right" colspan="4"><a href="#" onclick="clr()" title="Close"><img src="close.png" width="25"/></a></td>
</tr>
<tr class="odd">
    <td align="right" width="20%"><font color="red">*</font>name :</td>
    <td align="left" width="30%">
	<input type="text" size="10" name="name" id="name" value="<?php echo $name;?>">
	</td>
	<td align="right" width="20%">score :</td>
    <td align="left" width="30%">
      <input type="text" size="10" name="score" id="score" value="<?php echo $score;?>" >
	</td>   
  </tr>

<tr>

<td colspan="4" align="right"><input type="submit" value=" UPDATE "></td>
</tr>
</table>
<br><br>
</html>