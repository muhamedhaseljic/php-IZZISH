<?php
// Start the session
session_start();

// Example hardcoded users (you can replace this with a database query)
$users = [
    'admin@example.com' => ['password' => 'adminpass', 'role' => 'admin'],
    'employee@example.com' => ['password' => 'employeepass', 'role' => 'employee']
];

// Check if the form was submitted
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists and the password is correct
    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        // Store the user role in the session
        $_SESSION['role'] = $users[$email]['role'];

        // Redirect based on user role
        if ($users[$email]['role'] === 'admin') {
            header('Location: http://localhost/retro/dashboard.php?page=home');
        } elseif ($users[$email]['role'] === 'employee') {
            header('Location: http://localhost/retro/index.php?page=home');
        }
        exit();
    } else {
        // If login fails, display an error message
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #0d1017;
    font-family: Arial, sans-serif;
}

.login-box {
    /*position: relative;*/
    width: 300px;
    padding: 40px;
    background: #171c22;
    
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
}

.login-box h2 {
    color: white;
    margin-bottom: 30px;
    font-size: 24px;
}

.user-box {
    position: relative;
}

.user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #8f8f8f;
    pointer-events: none;
    transition: 0.5s;
}

.user-box input:focus ~ label,
.user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
}

a {
    position: relative;
    display: inline-block;
    padding: 10px 65px;
    color: #008cba;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    letter-spacing: 4px;
    margin-top: 40px;
    border: none;
    cursor: pointer;
    
}

a:hover {
    background: #008cba;
    color: #fff;
    border-radius: 5px;
}

button{
    background: #008cba;
    color: #fff;
    border-radius: 5px;
}

button{
    position: relative;
    display: inline-block;
    padding: 10px 65px;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    letter-spacing: 4px;
    margin-top: 40px;
    border: none;
    cursor: pointer;
}

a span {
    position: absolute;
    display: block;
}

a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
}

a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: 0.25s;
}

a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: 0.5s;
}

a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: 0.75s;
}



.forgot-password {
    display: block;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 14px;
    color: white;
    text-decoration: none;
    /*transition: color 0.2s ease;*/
    padding: 0px 2px;
    margin:0;
    
}

.forgot-password:hover {
    
    text-decoration: underline;
    background: none;
    color: white;
    border-radius: 5px;
}
.form-group input, .form-group select, .form-group textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid white;
  background-color: #0d1017;
  color: #fff;
  font-family: FontAwesome, sans-serif;
  font-weight: normal;
  font-size: 14px;
  margin-bottom:20px;
}
.form-group input:focus{
    border: 1px solid #008cba;
    outline: none;
}
.form-group label{
    color:white;
    margin:0px;
    
    
}
.login-box .forgot-password{
    background-color:none;
}
</style>

</head>
<body>
    <div class="login-box">
        <h2>Login</h2>    
        <form id="loginForm"  method="POST">
        <div class="form-group">
            <label for="email"> Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        
        <div class="form-group">
            <label for="password"> Sifra</label>
            <input type="password" id="password" name="password" placeholder="Šifra" required>
        </div>
            <a href="#" class="forgot-password">Forgot Password?</a> <!-- Forgot Password Link -->
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    
</body>
<script>
    function togglePassword() {
    const password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}
</script>
</html>