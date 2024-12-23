<?php
require_once "config/config.php";
require_once "radnik/Radnik.php";
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $userEmail = $_POST['email'];

    $stmt = $conn->prepare("SELECT email FROM radnici WHERE email = ?");
    $stmt->bind_param("s", $userEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $mail = new PHPMailer(true);

        try {
            // POSTAVKE SERVERA
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'muhamed.haseljic.20@size.ba';
            $mail->Password   = 'ssgoixhlivmucwjb';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';

            // PRIMAOC
            $mail->setFrom('your_email@example.com', 'ISINZ');
            $mail->addAddress($userEmail);

            //SADRŽAJ
            $mail->isHTML(true);
            $mail->Subject = '[Institut za zdravlje i sigurnost hrane] Molimo unesite novu lozinku';

            $resetLink = "http://localhost/retro/password_change.php?email=" . urlencode($userEmail);

            $mail->Body = '
                <html>
                <head>
                    <style>
                        .container {
                            font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif ;
                            width: 100%;
                            padding:20px 0;
                            background-color: white;
                            text-align: center;
                            
                        }
                        .email-content {
                            max-width: 500px;
                            margin: 0 auto;
                            background-color: #fff;
                            border-radius: 10px;
                            padding: 20px;
                            border:1px solid grey;
                        }
                        .email-header {
                            font-size: 22px;
                            color: black;
                            margin-bottom: 20px;
                            font-weight:600;
                        }
                        .email-body {
                            font-size: 16px;
                            color: #24292e;
                            
                        }
                            .email-body p{
                                    text-align: left;
                                }
                        .btn-reset {
                            display: inline-block;
                            padding: 10px 20px;
                            color: #fff;
                            background-color: #90c643;
                            text-decoration: none;
                            border-radius: 5px;
                            font-size: 16px;
                        }
                        .email-footer {
                            margin-top: 30px;
                            font-size: 14px;
                            color: #888;
                            text-align: left;
                        }
                            .email-footer-bottom{
                            margin-top: 30px;
                            font-size: 14px;
                            color: #888;
                            
                                }
                        .custom-img {
                            width: 200px;
                            height: 60px;
                            
                        }
                        h1{
                            font-size:24px;
                            color:black;
                            font-weight:400;
                        }
                            a{
                                color:white;
                            }
                                
                    </style>
                </head>
                <body>
                    <div class="container">
                            <img src="https://inz.ba/wp-content/uploads/2018/12/footer-inz-logo-300x80.png" alt="img" class="custom-img">
                            <h1>Poništite vašu šifru na ISINZ sistemu</h1>
                        <div class="email-content">
                            
                            <div class="email-header">
                                Ponovno postavljanje lozinke
                            </div>
                            <div class="email-body">
                                <p>Primili smo zahtjev za poništavanje vaše lozinke. Pritisnite donje dugme da biste ga poništili:</p>
                                
                                    <a href="' . $resetLink . '" style="color:#fff; font-weight:600;" class="btn-reset">Poništi svoju lozinku</a>
                                
                                <p>Ako niste zatražili ponovno postavljanje lozinke, možete zanemariti ovu e-poštu.</p>
                            </div>
                            <div class="email-footer">
                                <p>Hvala,<br>Muhamed Haseljić</p>
                                
                            </div>
                        </div>
                        <div class="email-footer-bottom">
                                <p style="color:#888;">Primili ste ovaj email jer je traženo poništavanje lozinke za vaš račun</p>
                                <p>ISINZ sistem・Fakultetska 1・Zenica 72000</p>
                            </div>
                    </div>
                </body>
                </html>
            ';

            $mail->send();
            $_SESSION['message']['type'] = "success";
            $_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Poruka je poslana na mejl";
            header('Location: http://localhost/retro/password_reset.php');
            exit;
            //echo 'An email has been sent with instructions to reset your password.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
    } else {
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "<i class='fas fa-times-circle'>&nbsp; &nbsp;</i>Email ne postoji u bazi podataka";
        header('Location: http://localhost/retro/password_reset.php');
        exit;
        //echo 'The email you entered is not registered in our system.';
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
        <h2>Unesite verifikovanu adresu e-pošte vašeg korisničkog naloga i mi ćemo vam poslati link za poništavanje lozinke.</h2>    
        <form action="" id="loginForm"  method="POST">
        
        <div class="form-group">
            <label for="email"> Email</label>
            <input type="email" id="email" name="email" placeholder="Unesite vašu email adresu" required>
        </div>
        
        
            <button type="submit" name="login">Pošalji email za poništavanje lozinke</button>
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