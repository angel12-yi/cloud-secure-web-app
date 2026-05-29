<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){

            $_SESSION['username'] = $user['username'];

            header("Location: dashboard.php");

        } else {

            echo "Wrong Password";

        }

    } else {

        echo "User Not Found";

    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card shadow p-4">

<h2 class="text-center mb-4">User Login</h2>

<form method="POST">

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
name="login"
class="btn btn-primary w-100">
Login
</button>

</form>

<br>

<a href="register.php" class="text-center">
Create Account
</a>

</div>

</div>

</div>

</div>

</body>
</html>