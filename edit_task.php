<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_task'])){

    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];

    $update = "UPDATE tasks
               SET task_name='$task_name',
               task_description='$task_description'
               WHERE id=$id";

    mysqli_query($conn, $update);

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Task</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4">

<h2 class="text-center mb-4">
Edit Task
</h2>

<form method="POST">

<input type="text"
name="task_name"
value="<?php echo $row['task_name']; ?>"
class="form-control">

<br>

<textarea name="task_description"
class="form-control"><?php echo $row['task_description']; ?></textarea>

<br>

<button type="submit"
name="update_task"
class="btn btn-warning w-100">
Update Task
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