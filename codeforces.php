<?php
  $conn = mysqli_connect('localhost','root','','todo');

if(isset($_POST['saved'])){ 
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css"><!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Code forces</title>
</head>
<body>

  <div class="form container">
      <form action="index.php" method="POST">

      <div class="form-floating mb-3">
        <input type="text" name="task_description1" class="form-control" id="task_description1" placeholder="user Name">
        <label for="task_description1">You are :</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" name="task_name1" class="form-control"  id="task_name1" placeholder="Assignment Name">
        <label for="task_name1">Assignment Link </label>
      </div>
      <button type="submit" name="saved" class="btn btn-primary">Save</button>


      <!-- <div class="form-floating mb-3">
        <input type="text" name="Assignment3" class="form-control" name="tName" id="taskName" placeholder="Task Name">
        <label for="taskName">Assignment 3</label>
      </div> -->
  </div>




      <div class="container">
        
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="tName" id="taskName" placeholder="Task Name">
          <label for="taskName">Assignment 1</label>
        </div>
        
        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Jlilati" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>

        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Shayah" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>

        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Ayham" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>
        
      </div>


      <div class="container">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="tName" id="taskName" placeholder="Task Name">
          <label for="taskName">Assignment 2</label>
        </div>
        
        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Jlilati" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>

        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Shayah" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>

        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Ayham" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>
        
      </div>


      <div class="container">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="tName" id="taskName" placeholder="Task Name">
          <label for="taskName">Assignment 3</label>
        </div>
        
        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Jlilati" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>

        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Shayah" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>

        <div class="input-group mb-3 col-4">
          <div class="input-group">
            <div class="input-group-text">
              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
            </div>
            <input type="text" disabled value="Ayham" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
          </div>
        </div>
        
      </div>

  
</body>
</html>