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
    <form action="modal.php" method="POST" id="form">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
  
  </body>
</html>

<!--
  
   Button trigger modal 
   <div class="launch">
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Launch static backdrop modal
    </button>
  </div>

Modal 
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">New Task!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="POST">
            <div class="mb-3">
              <div class="form-floating mb-3 mt-4">
                <input type="text" name="taskName" class="form-control" id="taskName" placeholder="name@example.com">
                <label for="taskName" class="form-label">The Task Name</label>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> 
              </div>
              <div class="form-floating mb-3 mt-4">
                <textarea name="description" class="form-control" placeholder="name@example.com" id="description" style="height: 100px"></textarea>
                <label for="description" class="form-label">Enter description</label>
              </div> 
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" name="save" value="Save" class="btn btn-primary" id="save">
        </div>
      </div>
    </div>
  </div>
  