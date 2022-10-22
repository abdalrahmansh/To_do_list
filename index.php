<?php 
    

	// connect to database
    // 
	$db = mysqli_connect("localhost", "root", "", "todoApp");

	// if input is empty, print an error
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			echo 'You have to enter a task';
		}
        else{

			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}
    
    
    // Delete a task if the delete button is clicked
    if (isset($_GET['del_task'])) {
        $id = $_GET['del_task'];
    
        mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
        header('location: index.php');
    }
    
    ?>



<!DOCTYPE html>
<html>
<head>
	<title>ToDo List Application PHP and MySQL</title>
</head>
<body>
	<div>
		<h2>To-Do List</h2>
	</div>
	<form method="post" action="index.php">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn">Add Task</button>
	</form>


     <!-- displaying the tasks in a table -->
    <table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Tasks</th>
			<th >Action</th>
		</tr>
	</thead>
   
	<tbody>
		<?php 
		// select all tasks 
		$tasks = mysqli_query($db, "SELECT * FROM tasks");

		$i = 1;
         while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td> <?php echo $row['task']; ?> </td>
				<td> 
					<a href="index.php?del_task=<?php echo $row['ID'] ?>">DELETE</a> 
				</td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>


    
	

</body>
</html>

