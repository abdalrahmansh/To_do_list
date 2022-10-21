<?php

  if(isset($_POST['save'])){
    $taskName = $_POST['taskName'];
    $description = $_POST['description'];
    $t_date = $_POST['t_date'];
    $t_priority = $_POST['t_priority'];
    $sql = "INSERT INTO task (t_name,t_description,t_date,t_priority)
    VALUES('$taskName','$description','$t_date','$t_priority')";
    if(mysqli_query($conn, $sql)){
      echo 'Succes';
      header('location','index.php');    
    }else
      echo 'ERROR : ' . mysqli_error($conn);
  }
?>