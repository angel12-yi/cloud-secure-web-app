<?php
session_start();
include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

if(isset($_POST['add_task'])){

    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];

    $sql = "INSERT INTO tasks(task_name, task_description)
            VALUES('$task_name', '$task_description')";

    if(mysqli_query($conn, $sql)){
        echo "Task Added Successfully";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Task</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4">

<h2 class="text-center mb-4">
Add New Task
</h2>

<form method="POST">

<input type="text"
name="task_name"
class="form-control"
placeholder="Task Name"
required>

<br>

<textarea name="task_description"
class="form-control"
placeholder="Task Description"></textarea>

<br>

<button type="submit"
name="add_task"
class="btn btn-success w-100">
Add Task
</button>

</form>

<br>

<a href="dashboard.php" class="btn btn-primary">
Back To Dashboard
</a>

</div>

</div>

</div>

</div>

</body>
</html>