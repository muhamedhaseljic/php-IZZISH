<?php
require_once "config/config.php";
require_once "radnik/Radnik.php";
$radnik = new Radnik();
if($radnik->is_logged())
{
    if($radnik->is_admin()){
        header('Location: http://localhost/retro/app/dashboard.php?page=home');
        exit;
    }
        header('Location: http://localhost/retro/radnik/index.php?page=home');
        exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $result = $radnik->login($email, $password);

    if(!$result){
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "<i class='fas fa-times-circle'>&nbsp; &nbsp;</i>Netacan email ili sifra";
        header('Location: http://localhost/retro/index.php?page=deductions');
        exit;
    }

    if($radnik->is_admin()){

    header('Location: http://localhost/retro/app/dashboard.php?page=home');
    } else{
        header('Location: http://localhost/retro/radnik/index.php?page=home');
    }
    exit;
}


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
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/medical-specialties-set-3/256/Emergency_Medicine-512.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap4-retro.min.css">
    <link rel="stylesheet" href="css/bootstrap4-retro.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Shrikhand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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
    background: #23355d;
    font-family: Arial, sans-serif;

    text-align: justify;
    text-justify: inter-word;

    position: relative; 
    margin: 0;
    min-height: 100vh; 

  
}

.login-box {
    width: 600px;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    
}


.login-box h2 {
    color: black;
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
    background: #23355d;
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

button:hover{
    background: #132650;
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
    color: #132650;
    text-decoration: none;
    padding: 0px 2px;
    margin:0;
    
}

.forgot-password:hover {
    
    text-decoration: underline;
    background: none;
    color: #132650;
    border-radius: 5px;
}
.form-group input, .form-group select, .form-group textarea {
  width: 100%;
  height:50px;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid #132650;
  background-color: #ebeef5;
  color: #132650;
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
    color:black;
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

.alert-success {
    background-color: #46d78a;
    color: white;
    padding: 15px;
    position: fixed;
    top: 20px;
    right:100px;
    z-index: 9999;
    border-radius: 15px;
    display: none;
    height: 60px;
    text-align: center;
    overflow: hidden;
    font-family: 'Montserrat';
    font-weight: 800;
}

.alert-success i{
    color: white;
}

.alert-danger {
    background-color: #f7481d;
    color: white;
    padding: 15px;
    position: fixed;
    top: 20px;
    right:100px;
    z-index: 9999;
    border-radius: 15px;
    display: none;
    height: 60px;
    text-align: center;
    overflow: hidden;
    font-family: 'Montserrat';
    font-weight: 800;
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

.nav-item{
    position: absolute;
      bottom: 0;  
      left: 0;   
      margin: 20px; 
      margin-bottom: 50px;
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
            <label for="email"> Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        
        <div class="form-group">
            <label for="password"> Šifra</label>
            <input type="password" id="password" name="password" placeholder="Šifra" required>
        </div>
            <a href="password_reset.php" class="forgot-password">Zaboravili ste šifru?</a> 
            <button type="submit" name="login">Prijavi se</button>
        </form>
    </div>
    <img class="nav-item" draggable="false" src="images/inz_logo_-1.png" width="400px" height="100px" alt="">

</body>
<script>
<?php

require_once 'inc/script.js'

?>
</script>
</html>