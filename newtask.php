<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <title>New task</title>
</head>
<body>
<div class="form container">
    <form action="index.php" method="POST">

    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="task_name" id="taskName" placeholder="Task Name">
      <label for="taskName">Task Name</label>
    </div>

    <!-- <div class="input-group mb-3">
      <span class="input-group-text">#</span>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
        <label for="floatingInputGroup1">Tags</label>
      </div>
    </div> -->

    <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Leave a comment here" name="task_description" id="taskDescription" style="height: 100px"></textarea>
      <label for="taskDescription">Description</label>
    </div>

    <button type="submit" name="saving" class="btn btn-primary">Submit</button>


    </form>
  </div>
</body>
</html>