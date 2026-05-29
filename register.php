<?php
include 'db.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, email, password)
            VALUES('$username', '$email', '$hashedPassword')";

    if(mysqli_query($conn, $sql)){
        echo "Registration Successful";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow p-4">

<h2 class="text-center mb-4">
User Registration
</h2>

<form method="POST">

<input type="text"
name="username"
class="form-control"
placeholder="Enter Username"
required>

<br>

<input type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

<br>

<input type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

<br>

<button type="submit"
name="register"
class="btn btn-success w-100">
Register
</button>

</form>

<br>

<a href="login.php" class="text-center">
Already Have Account?
</a>

</div>

</div>

</div>

</div>

</body>
</html>