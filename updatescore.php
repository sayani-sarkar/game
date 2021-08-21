<?php
include 'all_process.php';
if (isset($_GET['edit'])) {
    $sl = $_GET['edit'];
    $edit_state = true;
    
    $record = mysqli_query($conn, "SELECT * FROM player WHERE sl=$sl");
$data = mysqli_fetch_array($record);
      $name = $data['name'];
      $score = $data['score'];
      
    
  }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <title>Crud Operation In PHP</title>
  <style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("h9.jpg");
  background-repeat: no-repeat;
  background-size:cover;
 
  
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
</head>
<body>
<div class="topnav">
  

  <a class="active" href="updatescore.php">Update Score</a>
  <a href="check.php">Check Score</a>
  <a  href="addplayer.php">Add Player</a>
  <a  href="index.php">Home</a>
</div>
<center>
  <?php if (isset($_SESSION['message'])):?>
    <div class="message">
      <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']); 
      ?>
    </div>
  <?php endif ?>
  <h1><font color="#A952EE">Score board</h1>
   <form class="form-inline" method="POST" action="all_process.php">
     <input type="hidden" name="sl" value="<?php echo $sl; ?>">
     <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
     <input type="text" name="score" placeholder="score" value="<?php echo $score; ?>">
     
  <?php if ($edit_state == false): ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php else: ?>
  <button class="btn" type="submit" name="update" >Update</button>
<?php endif ?>
     
   </form>
<table>
  <tr>
    <th>Sr No</th>
    <th>Name</th>
    <th>Score</th>
    
    <th>Action</th>
  </tr>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM player");
$i = 1;
while ($row = mysqli_fetch_assoc($result)) {
  ?>
  <tr>
  <td><?php echo $i; ?></td>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["score"]; ?></td>
  
  <td><a href="updatescore.php?edit=<?php echo $row["sl"]; ?>" class="edit_btn">Edit</a></td>
  <td><a href="all_process.php?delete=<?php echo $row["sl"]; ?>" class="del_btn">Delete</a></td>
  </tr>
  <?php
  $i++;
}
  ?>
</table>
</center>
</body>
</html>