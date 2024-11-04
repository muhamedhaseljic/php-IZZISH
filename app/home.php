<?php



$target_dir = "../images/";

if($_SERVER['REQUEST_METHOD']== "POST"){
    $radnik_temp = new Radnik();

    $employee_id = $employee_data['employee_id'];
    $first_name= $_POST['ime'];
    $last_name = $_POST['prezime'];
    $email = $_POST['email'];
    $phone_number = $_POST['telefon'];
    $password = $_POST['password'];
    $employment_status = $_POST['radni_status'];
    $mjesto_rodjenja = $_POST['mjesto_rodjenja'];
    $adresa_boravista = $_POST['adresa_boravista'];
    $date_of_birth = $_POST['datum_rodjenja'];
    $jmbg = $_POST['jmbg'];
    $position = $_POST['pozicija'];
    $start_date = $_POST['datum_zaposlenja'];
    $plata = $_POST['plata'];
    $gender = $_POST['spol'];
    $notes = "";
    
    
    

    if (empty($_FILES['photo_path']['name'])){
        $photo_path = $employee_data['photo_path'];
    }
    else{
    $photo_path = basename($_FILES['photo_path']['name']);
        $target_file = $target_dir . $photo_path;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file);
    }
        $radnik_temp->update($employee_id, $first_name, $last_name, $email, $phone_number,$date_of_birth, $mjesto_rodjenja,$gender, $jmbg, $photo_path, $adresa_boravista, $start_date, $employment_status, $plata, $position, $notes);
        $_SESSION['message']['type'] = "success";
        $_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Vaša informacije na profilu su uspješno uređene";
        echo "<script>window.location.href = '" . $_SERVER['PHP_SELF'] . "?page=home';</script>";
        exit;


}


?>
<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    
    background-color: #ebeef5;
    min-height: 100vh;
    padding-bottom:0px;
    display: flex;
    justify-content: center;  /* Center horizontally */
    align-items: center;
    
}/*
.custom-main-content {
    padding: 20px;
    background-color: #f4f4f4;
    min-height: 100vh;
    font-family: Arial, sans-serif;
}*/

.profile-container {
    display: flex;
    max-width: 1600px; /* Adjust for a compact layout */
    margin: 40px auto;
    background-color: #ebeef5;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 0px;
    gap: 0px;
    height:600px;
    border-radius:8px;
}

.left-section {
    flex: 0 0 400px; /* Fixed width for picture section */
    background-color: white;
    padding:20px;
    padding-top: 20px;
    border-radius:15px;
    text-align: left;
    border: 1px solid black;
}

.profile-picture img {
    width: 200px;
    height: 200px;
    margin-bottom:20px;
}

.border-divider {
    width: 20px;
    background-color: #ebeef5; /* Visible border between sections */
    margin-left: ;
    height:650px;
    margin-top:-50px;
}

.right-section {
    border-radius:15px;
    padding:20px;
    padding-top: 20px;
    border: 1px solid black;
    background-color: white;

}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns layout */
    
    grid-row-gap: 0px;

    grid-column-gap: 60px;


}

.form-group {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
    
}

.form-group input, .form-group select, .form-group textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid white;
  background-color: white;
  border: 1px solid black;
  color: black;
  font-family: FontAwesome, sans-serif;
  font-weight: normal;
  font-size: 14px;
}

.form-group input:focus{
    border: 1px solid #008cba;
    outline: none;
}

label {
    width: 150px; /* Fixed width for the labels */
    font-weight: bold;
    text-align: left;
    color:black;
}

input {
    flex: 1;
    padding: 5px; /* Smaller padding for compact inputs */
    border-radius: 5px;
    border: 1px solid grey;
    background-color: #0d1017;
    color:white;
}

input::placeholder {
    color: black;
}
.left-section h1{
    color:#132650;
    text-align: left;
    font-size:22px;
    margin-bottom:20px;
}
.left-section p{
    color:black;
    text-align: left;
    font-size:18px;
    margin: 10px 0;
    
}
.profile-label {
    display: inline-block;
    width: 50px; /* Adjust this value to your desired space */
    
    font-size:18px;
  }

.detalji-profil{
    color:grey;
    text-align: left;
    font-size:16px;
    margin-left:40px;
    font-family:ui-sans-serif, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol";
    weight:400;
}
.right-section h1{
    color:#8EC1FF;
    text-align: left;
    font-size:22px;
    margin-right:70px;
    margin-left:0px;
}

.form-group button{
    border: none;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
    color: white;
    margin-top: 60px;
    background-color: #262c78;
    text-align: center;
    
}
.form-group button:hover{
    background-color: #484b8f;
    color:white;
    
}

.alert-success {
    background-color: #4cb050;
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
    transition: width linear; /* Smooth transition */
}

/* Content Styles */


@keyframes progress {
    from { width: 100%; }
    to { width: 0%; }
}

    </style>
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

    <div class="custom-main-content content">
        
    <form id="myForm" action="" method="POST" enctype="multipart/form-data">
        <div class="profile-container">
        
        <!-- Left Section (Profile Picture) -->
        <div class="left-section">
        <h1 ><b>PROFIL DETALJI</b></h1>
            <div class="profile-picture">
                <img src="<?php echo "../images/" . $employee_data['photo_path'] ?>" alt="Profile Picture" />
            </div>
            <p><span class="profile-label">Ime:</span> <span class="detalji-profil"><?=$employee_data['first_name'] . " " . $employee_data['last_name'] ?></span></p>
            <p><span class="profile-label">Email:</span> <span class="detalji-profil"><?=$employee_data['email']?></span></p>
            <p><span class="profile-label">Godine:</span> <span class="detalji-profil">
                <?php
                    $date_of_birth = $employee_data['date_of_birth'];
                    $dob = new DateTime($date_of_birth);
                    $now = new DateTime();
                    $age = $now->diff($dob)->y;
                    echo $age;
                ?>
            </span></p>
            <p><span class="profile-label">Lokacija:</span> <span class="detalji-profil"><?=$employee_data['adress']?></span></p>
            <p><span class="profile-label">Staž:</span> <span class="detalji-profil">
            <?php
                    $date_of_employment = $employee_data['date_of_employment'];
                    $pocetak = new DateTime($date_of_employment);
                    
                    $staz_dan = $now->diff($pocetak)->d;
                    $staz_mjesec = $now->diff($pocetak)->m;
                    $staz_godine = $now->diff($pocetak)->y;
                    echo $staz_godine . " god. ". $staz_mjesec . " mje. " . $staz_dan . " dana";
                ?>
            </span></p>
            <p><span class="profile-label">Status:</span> <span class="detalji-profil"><?=$employee_data['status']?></span></p>
            <p><span class="profile-label">Pozicija:</span> <span class="detalji-profil"><?=$employee_data['position']?></span></p>
            <p><span class="profile-label">Plata:</span> <span class="detalji-profil"><?=$employee_data['salary']?></span></p>
        </div>

        <!-- Divider with Border -->
        <div class="border-divider"></div> 

        <!-- Right Section (Editable Fields) -->
         
        <div class="right-section">
        <h1 ><b>O MENI</b></h1>
            <div class="form-grid">
                <!--
                <div class="form-group">
                    <label for="radnikid">RadnikID:</label>
                    <input type="number" value="<?=$employee_data['employee_id']?>" id="radnikid" name="radnikid" placeholder="Enter RadnikID" />
                </div>-->
                <div class="form-group">
                    <label for="ime">Ime:</label>
                    <input type="text" value="<?=$employee_data['first_name']?>" id="ime" name="ime" placeholder="Enter Ime" maxlength="255" />
                </div>
                <div class="form-group">
                    <label for="prezime">Prezime:</label>
                    <input type="text" value="<?=$employee_data['last_name']?>" id="prezime" name="prezime" placeholder="Enter Prezime" maxlength="255" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" value="<?=$employee_data['email']?>" name="email" placeholder="Enter Email" />
                </div>
                
                <div class="form-group">
                    <label for="password">Šifra:</label>
                    <input type="password" id="password"  name="password" placeholder="*****" />
                </div>

                <div class="form-group">
                    <label for="telefon">Telefon:</label>
                    <input type="number" id="telefon" value="<?=$employee_data['phone_number']?>" name="telefon" placeholder="Enter Telefon" />
                </div>
                <div class="form-group">
                    <label for="mjesto_rodjenja">Mjesto rođenja:</label>
                    <input type="text" id="mjesto_rodjenja" value="<?=$employee_data['place_of_birth']?>" name="mjesto_rodjenja" placeholder="Enter Mjesto rođenja" />
                </div>
                <div class="form-group">
                    <label for="adresa_boravista">Adresa boravišta:</label>
                    <input type="text" id="adresa_boravista" value="<?=$employee_data['adress']?>" name="adresa_boravista" placeholder="Enter Adresa boravišta" />
                </div>
                <div class="form-group">
                    <label for="datum_rodjenja">Datum rođenja:</label>
                    <input type="date" id="datum_rodjenja" value="<?=$employee_data['date_of_birth']?>" name="datum_rodjenja" />
                </div>
                <div class="form-group">
                    <label for="spol">Spol:</label>
                    <input type="text" id="spol" value="<?=$employee_data['gender']?>" name="spol" placeholder="Enter Spol" maxlength="11" />
                </div>
                <div class="form-group">
                    <label for="datum_zaposlenja">Datum Zaposlenja:</label>
                    <input type="date" id="datum_zaposlenja" value="<?=$employee_data['date_of_employment']?>" name="datum_zaposlenja" />
                </div>
                <div class="form-group">
                    <label for="radni_status">Radni Status:</label>
                    <input type="text" id="radni_status" value="<?=$employee_data['status']?>" name="radni_status" placeholder="Enter Radni Status" />
                </div>
                <div class="form-group">
                    <label for="jmbg">JMBG:</label>
                    <input type="number" id="jmbg" value="<?=$employee_data['jmbg']?>" name="jmbg" placeholder="Enter JMBG" />
                </div>

                <div class="form-group">
                <label for="files"> Slika</label>
                    <input type="file"  id="file" name="photo_path" >
                </div>

                <div class="form-group">
                    <label for="plata">Plata:</label>
                    <input type="number" id="plata" value="<?=$employee_data['salary']?>" name="plata" placeholder="Enter Plata" />
                </div>
                
                <div class="form-group">
                    <label for="pozicija">Pozicija:</label>
                    <input type="text" id="pozicija" value="<?=$employee_data['position']?>" name="pozicija" placeholder="Enter Pozicija" />
                </div>

                <div class="form-group">
                    <button class="custom-add-btn">SPREMI</button>
                </div>
                </form>
            </div>
            
        </div>
    </div>
        </div>

        <script>
let timeout;
let totalDuration = 5000; // Total time in milliseconds (5 seconds)
let remainingTime = totalDuration; // Time remaining on countdown
let startTime;
let elapsedTime = 0; // Tracks how much time has passed
let isHovered = false; // Tracks hover state
let progressBar, popup;

document.addEventListener("DOMContentLoaded", function() {
    popup = document.getElementById("success-popup");
    progressBar = document.getElementById("progress-bar");

    if (popup) {
        popup.style.display = 'block'; // Show the popup
        progressBar.style.width = '100%'; // Set it to full width immediately
        setTimeout(() => {
            startTimer(remainingTime); // Start the timer and progress bar
        }, 50); // A slight delay for the initial width to take effect.

        popup.addEventListener("mouseenter", pauseTimer);
        popup.addEventListener("mouseleave", resumeTimer);
    }
});

function startTimer(duration) {
    // Start the progress bar and countdown
    startTime = Date.now();
    timeout = setTimeout(hidePopup, duration);
    
    progressBar.style.transitionDuration = duration + 'ms';
    progressBar.style.width = '0%'; // Animate to 0% over the duration
}

function hidePopup() {
    popup.style.display = 'none';
}

function pauseTimer() {
    if (!isHovered) {
        clearTimeout(timeout); // Pause the countdown timer
        elapsedTime += Date.now() - startTime; // Add the time that has passed
        remainingTime = totalDuration - elapsedTime; // Calculate remaining time

        // Freeze the progress bar
        let percentageElapsed = (elapsedTime / totalDuration) * 100;
        progressBar.style.width = (100 - percentageElapsed) + '%';
        progressBar.style.transitionDuration = '0ms'; // Stop bar transition
        isHovered = true;
    }
}

function resumeTimer() {
    if (isHovered) {
        startTimer(remainingTime); // Resume the countdown
        progressBar.style.transitionDuration = remainingTime + 'ms'; // Continue bar
        progressBar.style.width = '0%'; // Animate to 0% over remaining time
        isHovered = false;
    }
}
        </script>