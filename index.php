
<?php 
  // include './connect/connect.php';
  // include './form/form.php';
  // include './newtask/newtask.php';
  // unset($_POST);

  $conn = mysqli_connect('localhost','root','','todo');
  //add a task
  if(isset($_POST['saving'])){ 
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];
    $sql = "INSERT INTO task (task_name,task_description) VALUES('$task_name','$task_description')";
    
    if(empty($_POST['task_name'])){
      echo '<div class="alert alert-danger" role="alert">Task name is empty!</div>';
    }else
      if(mysqli_query($conn, $sql)){
            echo '<div class=" alert alert-success" role="alert">Success!</div>';
            header('location','index.php');  
      }else
          echo 'ERROR : ' . mysqli_error($conn);
  }

  //delete a task
  if(isset($_GET['idd'])){
    $id = $_GET['idd'];

    $sql = "DELETE FROM task WHERE task_id=".$id;
    if(mysqli_query($conn, $sql)){
      echo '<div class=" alert alert-success" role="alert">Deleted!</div>';
      header('location','index.php');  
}else
    echo 'ERROR : ' . mysqli_error($conn);
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./style.css">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>ToDo</title>
</head>
<body>

<a class="btn b btn-primary " href="/codeforces.php" role="button">Code forces task</a>
<a class="btn b btn-primary" href="/newtask.php" role="button">New task</a>
  <div class="container">
    <table class="table table-striped ">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Task Name</th>
          <th scope="col">Descreption</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM TASK";
        $result = mysqli_query($conn , $sql);
          while($row = mysqli_fetch_array($result)){ 
        ?>
        <tr>
        <th scope='row'><?php echo $row["task_id"]?></th>
          <td> <?php echo $row["task_name"]?></td>
          <td><?php echo $row["task_description"]?></td>
          <!-- <a href='./index.php' type='button' class='btn btn-primary'>Edit</a> -->
          <td><a href="index.php?idd=<?php echo $row["task_id"]?>" type='button' class='btn btn-danger'>Delete</a></td>
        </tr>
        <?php
        } 
        ?>



  


      </tbody>
    </table>
  </div>

</body>
</html>