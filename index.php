<?php 
  include "./include/form.php";
  include "./include/modal.php";

  $conn = mysqli_connect('localhost','root','','todo');
  if(!$conn)
    echo 'ERROR' . mysqli_connect_error();
  $sql = 'SELECT * FROM task';
  $res = mysqli_query($conn,$sql);
  $users = mysqli_fetch_all($res,MYSQLI_ASSOC);
  

  


  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>To do list</title>
  <link href="/CSS/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>


 

  
</body>
</html>
