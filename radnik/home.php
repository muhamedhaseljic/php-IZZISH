<?php
$target_dir = "../images/";

if($_SERVER['REQUEST_METHOD']== "POST"){
    $radnik_temp = new Radnik();
    $employee_id = $employee_data['employee_id'];
    $first_name= $_POST['ime'];
    $last_name = $_POST['prezime'];
    $email = $_POST['email'];
    $phone_number = $_POST['telefon'];
    //$password = password_hash($password, PASSWORD_DEFAULT);
    if(!empty($_POST['password'])){
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    else{
        $password = $employee_data['password'];
    }
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
        $radnik_temp->updateProfile($employee_id, $email,$password, $phone_number, $photo_path);
        $_SESSION['message']['type'] = "success";
        $_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Vaša informacije na profilu su uspješno uređene";
        echo "<script>window.location.href = '" . $_SERVER['PHP_SELF'] . "?page=home';</script>";
        exit;


}


?>
<style>
.custom-main-content {
    margin-left: 0px;
    width: 100%;
    
    background-color: #ebeef5;
    min-height: 100vh;
    padding-bottom:0px;
    display: flex;
    justify-content: center;
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
    max-width: 1200px; 
    margin: 40px auto;
    background-color: #ebeef5;
    
    padding: 0px;
    gap: 0px;
    height:600px;
    border-radius:8px;
}

.left-section {
    flex: 0 0 400px;
    background-color: white;
    padding:20px;
    padding-top: 20px;
    border-radius:15px;
    text-align: left;
    border: 1px solid #132650;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.profile-picture img {
    width: 200px;
    height: 200px;
    margin-bottom:20px;
    border: 1px solid #132650;
}

.border-divider {
    width: 40px;
    background-color: #ebeef5;
    margin-left: ;
    height:670px;
    margin-top:-50px;
}

.right-section {
    border-radius:15px;
    padding:20px;
    padding-top: 20px;
    border: 1px solid #132650;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: white;

}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    
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
  background-color: white;
  border: 1px solid grey;
  color: black;
  font-family: FontAwesome, sans-serif;
  font-weight: normal;
  font-size: 14px;
}

.form-group input:focus{
    border: 1px solid #008cba;
    outline: none;
}

.form-group-disable input, .form-group-disable select{
    width: 100%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  background-color: #e8ecef;
  border: 1px solid grey;
  color: black;
  font-family: FontAwesome, sans-serif;
  font-weight: normal;
  font-size: 14px;
}

label {
    width: 150px;
    font-weight: bold;
    text-align: left;
    color:black;
}

input {
    flex: 1;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid grey;
    background-color: #0d1017;
    color:white;
}

input::placeholder {
    color: grey;
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
    width: 50px;
    
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
    color:#132650;
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
    background-color: #132650;
    text-align: center;
    border: 1px solid #132650;
    display: block;
  margin-left: auto;
  margin-right: 0;
}
.form-group button:hover{
    background-color: #23355d;
    
    
}
.razmakk{
    width: 287px;
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
            <p><span class="profile-label">Plata:</span> <span class="detalji-profil"><?=$employee_data['salary']. " KM"?></span></p>
        </div>

        <div class="border-divider"></div> 
         
        <div class="right-section">
        <h1 ><b>O MENI</b></h1>
            <div class="form-grid">
                <!--
                <div class="form-group">
                    <label for="radnikid">RadnikID:</label>
                    <input type="number" value="<?=$employee_data['employee_id']?>" id="radnikid" name="radnikid" placeholder="Enter RadnikID" />
                </div>-->
                <div class="form-group form-group-disable">
                    <label for="ime">Ime:</label>
                    <input disabled type="text" value="<?=$employee_data['first_name']?>" id="ime" name="ime" placeholder="Enter Ime" maxlength="255" />
                </div>
                <div class="form-group form-group-disable">
                    <label for="prezime">Prezime:</label>
                    <input disabled type="text" value="<?=$employee_data['last_name']?>" id="prezime" name="prezime" placeholder="Enter Prezime" maxlength="255" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" value="<?=$employee_data['email']?>" name="email" placeholder="Enter Email" />
                </div>
                
                <div class="form-group ">
                    <label for="password">Šifra:</label>
                    <input type="password" id="password"  name="password" placeholder="*****" />
                </div>

                <div class="form-group">
                    <label for="telefon">Telefon:</label>
                    <input type="number" id="telefon" value="<?=$employee_data['phone_number']?>" name="telefon" placeholder="Enter Telefon" />
                </div>
                <div class="form-group form-group-disable">
                    <label for="mjesto_rodjenja">Mjesto rođenja:</label>
                    <input disabled type="text" id="mjesto_rodjenja" value="<?=$employee_data['place_of_birth']?>" name="mjesto_rodjenja" placeholder="Enter Mjesto rođenja" />
                </div>
                <div class="form-group form-group-disable">
                    <label for="adresa_boravista">Adresa boravišta:</label>
                    <input disabled type="text" id="adresa_boravista" value="<?=$employee_data['adress']?>" name="adresa_boravista" placeholder="Enter Adresa boravišta" />
                </div>
                <div class="form-group form-group-disable">
                    <label for="datum_rodjenja">Datum rođenja:</label>
                    <input disabled type="date" id="datum_rodjenja" value="<?=$employee_data['date_of_birth']?>" name="datum_rodjenja" />
                </div>
                <div class="form-group form-group-disable">
                    <label for="spol">Spol:</label>
                    <input disabled type="text" id="spol" value="<?=$employee_data['gender']?>" name="spol" placeholder="Enter Spol" maxlength="11" />
                </div>
                <div class="form-group form-group-disable">
                    <label for="datum_zaposlenja">Datum Zaposlenja:</label>
                    <input disabled type="date" id="datum_zaposlenja" value="<?=$employee_data['date_of_employment']?>" name="datum_zaposlenja" />
                </div>
                

                <div class="form-group form-group-disable">
                <label for="radni_status" class="razmakk"> Status</label>
                    <select disabled id="radni_status"  name="radni_status">
                    <option value="Stalno zaposlen" <?php echo ($employee_data['status'] == 'Stalno zaposlen') ? 'selected' : ''; ?> >Stalno zaposlen</option>
                    <option value="Privremeno" <?php echo ($employee_data['status'] == 'Privremeno') ? 'selected' : ''; ?> >Privremeno</option>
                    <option value="Pripravnički rad" <?php echo ($employee_data['status'] == 'Pripravnički rad') ? 'selected' : ''; ?> >Pripravnički rad</option>
                    </select>
                </div>

                <div class="form-group form-group-disable">
                    <label for="jmbg">JMBG:</label>
                    <input disabled type="number" id="jmbg" value="<?=$employee_data['jmbg']?>" name="jmbg" placeholder="Enter JMBG" />
                </div>

                <div class="form-group form-group-disable">
                    <label for="pozicija">Pozicija:</label>
                    <input disabled type="text" id="pozicija" value="<?=$employee_data['position']?>" name="pozicija" placeholder="Enter Pozicija" />
                </div>

                <div class="form-group form-group-disable">
                    <label for="plata">Plata:</label>
                    <input disabled type="number" id="plata" value="<?=$employee_data['salary']?>" name="plata" placeholder="Enter Plata" />
                </div>
                
                <div class="form-group">
                <label for="files"> Slika</label>
                    <input type="file"  id="file" name="photo_path">
                </div>

                

                
                </form>
            </div>
            <div class="form-group">
                    <button class="custom-add-btn">Spremi</button>
                </div>
            
        </div>
    </div>
        </div>

        <script>

        </script>