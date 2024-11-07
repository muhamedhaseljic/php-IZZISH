<?php
require_once "config/config.php";
require_once "radnik/Radnik.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];

    $radnik = new Radnik();
    $result = $radnik->login($email, $password);

    if(!$result){
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Netacan email ili sifra";
        header('Location: http://localhost/retro/index.php?page=deductions');
        exit;
    }

    header('Location: http://localhost/retro/app/dashboard.php?page=home');
    exit;
}

$users = [
    'admin@example.com' => ['password' => 'adminpass', 'role' => 'admin'],
    'employee@example.com' => ['password' => 'employeepass', 'role' => 'employee']
];

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        $_SESSION['role'] = $users[$email]['role'];

        if ($users[$email]['role'] === 'admin') {
            header('Location: http://localhost/retro/app/dashboard.php?page=home');
        } elseif ($users[$email]['role'] === 'employee') {
            header('Location: http://localhost/retro/radnik/index.php?page=home');
        }
        exit();
    } else {
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
    flex-direction: column;
    align-items: center;
    background: #0d1017;
    font-family: Arial, sans-serif;

    text-align: justify;
    text-justify: inter-word;

    position: relative; 
    margin: 0;
    min-height: 100vh; 

  
}
body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('images/pozadina.jpg'); 
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
    opacity: 0.30; 
    z-index: -1; 
}
.login-box {
    width: 450px;
    padding: 20px;
    background: #11131f;
    
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    
}


.login-box h2 {
    color: white;
    margin-bottom: 50px;
    font-size: 20px;
    text-align: left;
    font-weight:200;
}
.login-box a {
    
    text-align: left;
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
    overflow: hidden;
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
    font-size: 14px;
    text-decoration: none;
    overflow: hidden;
    letter-spacing: 2px;
    margin-top: 50px;
    border: none;
    cursor: pointer;
    width: 100%;
    height:50px;
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
  height:50px;
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
h1{
    color:white;
}
.naslov-razmak{
    margin-bottom:70px;
}

.alert-danger {
    background-color: #b81f1f;
    color: white;
    padding: 15px;
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    border-radius: 7px;
    display: none;
    width: 450px;
    text-align: center;
    overflow: hidden;
    border:none;
}

.progress-bar {
    height: 5px;
    background-color: #c9e8c6;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    transition: width linear; 
}

@keyframes progress {
    from { width: 100%; }
    to { width: 0%; }
}
</style>

</head>
<body>
    <?php
if(isset($_SESSION['message'])) :?>
<div class="alert alert-<?= $_SESSION['message']['type'];?> alert-dismissible fade show" role="alert" id="success-popup">

    <?php
    
      echo $_SESSION['message']['text'];
      unset($_SESSION['message']);
    
    ?>
     <div class="progress-bar" id="progress-bar"></div>
</div>

<?php endif; ?>
    <h1>INSTITUT ZA ZDRAVLJE</h1>
    <h1 class="naslov-razmak">I SIGURNOST HRANE</h1>
    <div class="login-box">
        <h2>Prijava</h2>    
        <form action="" id="loginForm"  method="POST">
        
        <div class="form-group">
            <label for="password">Nova šifra</label>
            <input type="password" id="password" name="password" placeholder="Unesi novu šifru" required>
        </div>
        
        <div class="form-group">
            <label for="newpassword"> Potvrdi novu šifru</label>
            <input type="password" id="newpassword" name="newpassword" placeholder="Ponovi šifru" required>
        </div>
            <button type="submit" name="login">Prijavi se</button>
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

let timeout;
let totalDuration = 5000; 
let remainingTime = totalDuration; 
let startTime;
let elapsedTime = 0;
let isHovered = false; 
let progressBar, popup;

document.addEventListener("DOMContentLoaded", function() {
    popup = document.getElementById("success-popup");
    progressBar = document.getElementById("progress-bar");

    if (popup) {
        popup.style.display = 'block'; 
        progressBar.style.width = '100%'; 
        setTimeout(() => {
            startTimer(remainingTime); 
        }, 50); 

        popup.addEventListener("mouseenter", pauseTimer);
        popup.addEventListener("mouseleave", resumeTimer);
    }
});

function startTimer(duration) {
    startTime = Date.now();
    timeout = setTimeout(hidePopup, duration);
    
    progressBar.style.transitionDuration = duration + 'ms';
    progressBar.style.width = '0%'; 
}

function hidePopup() {
    popup.style.display = 'none';
}

function pauseTimer() {
    if (!isHovered) {
        clearTimeout(timeout); 
        elapsedTime += Date.now() - startTime; 
        remainingTime = totalDuration - elapsedTime; 

        let percentageElapsed = (elapsedTime / totalDuration) * 100;
        progressBar.style.width = (100 - percentageElapsed) + '%';
        progressBar.style.transitionDuration = '0ms'; 
        isHovered = true;
    }
}

function resumeTimer() {
    if (isHovered) {
        startTimer(remainingTime); 
        progressBar.style.transitionDuration = remainingTime + 'ms'; 
        progressBar.style.width = '0%'; 
        isHovered = false;
    }
}
</script>
</html>