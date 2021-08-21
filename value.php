<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
   
    $sql="insert into player(name,score) values('{$name}','0')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Congrats!!! Player Added');
                               window.location='index.php';
                     </script>";

    }
  }
?>