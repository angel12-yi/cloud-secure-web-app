<?php
session_start();
include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4">

<h1 class="text-center text-primary">
Welcome <?php echo $_SESSION['username']; ?>
</h1>

<div class="text-center mt-4">

<a href="add_task.php" class="btn btn-success">
Add New Task
</a>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>

<hr>

<h2 class="mb-4">All Tasks</h2>

<table class="table table-bordered table-hover">

<tr class="table-dark">

<th>ID</th>
<th>Task Name</th>
<th>Description</th>
<th>Action</th>

</tr>

<?php

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['task_name']; ?></td>

<td><?php echo $row['task_description']; ?></td>

<td>

<a href="edit_task.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="delete_task.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm">
Delete
</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

</div>

</body>
</html>