<?php
require_once '../config/config.php';
require_once '../radnik/Radnik.php';
require_once "../inc/header.php";?>

<?php 

$employee_obj = new Radnik();
$result = $employee_obj->read($_GET['id']);
$target_dir = "../images/";

if($_SERVER['REQUEST_METHOD'] == "POST"){

  $employee_id = $_GET['id'];
  $first_name= $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  //$password = $_POST['password'];
  $employment_status = $_POST['employment_status'];
  $mjesto_rodjenja = $_POST['mjesto_rodjenja'];
  $adresa_boravista = $_POST['adresa_boravista'];
  $date_of_birth = $_POST['date_of_birth'];
  $jmbg = $_POST['jmbg'];
  $position = $_POST['position'];
  $start_date = $_POST['start_date'];
  $plata = $_POST['plata'];
  $gender = $_POST['gender'];
  $notes = $_POST['notes'];

  $photo_path = basename($_FILES['photo_path']['name']);
        $target_file = $target_dir . $photo_path;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file);

        $employee_obj->update($employee_id, $first_name, $last_name, $email, $phone_number,$date_of_birth, $mjesto_rodjenja,$gender, $jmbg, $photo_path, $adresa_boravista, $start_date, $employment_status, $plata, $position, $notes);
        header('Location: ../app/dashboard.php?page=radnici');
        exit();

      }

 ?>


<div class="custom-container d-flex">
<?php require_once "../inc/sidebar.php";

?>

<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    
    
    background-color: #ebeef5;
    
    padding-bottom:0px;
    display: flex;
    justify-content: center;  /* Center horizontally */
    align-items: center;      /* Center vertically */
    height: 100vh;    
    padding: 150px;    
    padding-top:150px;
}


.employee-form {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  justify-content: space-between;
  background-color: white;
  border: 1px solid #132650;
  padding: 20px;
  border-radius: 10px;
}

.form-group {
  width: 30%;
}

.form-group.full-width {
  width: 100%;
}

.form-group input, .form-group select, .form-group textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid grey;
  background-color: white;
  color: black;
  font-family: FontAwesome, sans-serif;
  font-weight: normal;
  font-size: 14px;
}
.form-group input:focus{
    border: 1px solid #008cba;
    outline: none;
}
textarea {
  resize: none;
  min-height: 80px;
}

.form-buttons {
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.btn {
  background-color: #3a3b9a;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.clear-btn {
  background-color: #6c757d;
}

.btn:hover {
  background-color: #2a2b6a;
}
label{
    color:black;
    margin:0;
    
}
.forma-custom h2 {
    text-align: left;
    color: #132650;
    margin-bottom: 20px;
    
    
}
.custom-add-btn{
    padding: 10px 20px;
    color: #fff;
    
    background-color: #132650;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    color: white;
}
.custom-add-btn:hover{
  background-color: #23355d;
    text-decoration:none;
}

.custom-clear-btn{
    padding: 10px 20px;
    color: #fff;
    
    background-color: #807e7e;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    color: white;
}
.custom-clear-btn:hover{
    background-color: #666565;
    color: #fff;
    text-decoration:none;
}
</style>


<div class="custom-main-content content">
            
<form class="forma-custom" action="" method="POST" enctype="multipart/form-data">
<h2>Uredi profil radnika</h2>

<div class="employee-form">
  <div class="form-group">
    <label for="ime"> Ime</label>
    <input type="text" id="ime" value="<?php echo $result['first_name'] ?>" placeholder="Ime" name="first_name">
  </div>

  <div class="form-group">
  <label for="prezime"> Prezime</label>
    <input type="text" id="prezime" value="<?php echo $result['last_name'] ?>" placeholder="Prezime" name="last_name">
  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input type="email" id="email" value="<?php echo $result['email'] ?>" placeholder="Email" name="email">
  </div>

  <div class="form-group">
  <label for="phone-number"> Broj telefona</label>
    <input type="tel" id="phone-number" value="<?php echo $result['phone_number'] ?>" placeholder="Phone Number" name="phone_number">
  </div>

  <div class="form-group">
  <label for="sifra"> Sifra</label>
    <input type="password" id="sifra" value="<?php echo $result['password'] ?>" placeholder="Šifra" name="password" disabled>
  </div>

  <div class="form-group">
  <label for="file"> Slika</label>
    <input type="file" id="file" value="<?php echo $result['photo_path'] ?>" name="photo_path">
  </div>

  <div class="form-group">
  <label for="mjesto-rodjenja"> Mjesto rođenja</label>
    <input type="text" id="mjesto-rodjenja" value="<?php echo $result['place_of_birth'] ?>"  placeholder="Mjesto rođenja" name="mjesto_rodjenja">
  </div>

  <div class="form-group">
  <label for="adresa-boravista"> Adresa boravišta</label>
    <input type="text" id="adresa-boravista" value="<?php echo $result['adress'] ?>" placeholder="Adresa boravišta" name="adresa_boravista">
  </div>

  <div class="form-group">
  <label for="date-of-birth"> Date of Birth</label>
    <input type="date" id="date-of-birth" value="<?php echo $result['date_of_birth'] ?>" placeholder="Date of Birth" name="date_of_birth">
  </div>

  <div class="form-group">
  <label for="jmbg"> JMBG</label>
    <input type="text" id="jmbg" placeholder="JMBG" value="<?php echo $result['jmbg'] ?>" name="jmbg">
  </div>

  <div class="form-group">
  <label for="position"> Pozicija</label>
    <input type="text" id="position" placeholder="Pozicija" value="<?php echo $result['position'] ?>" name="position">
  </div>

  <div class="form-group">
  <label for="employment-status"> Status</label>
    <select id="employment-status"  name="employment_status">
      <option value="stalno-zaposlen" <?php echo ($result['status'] == 'Stalno zaposlen') ? 'selected' : ''; ?> >Stalno zaposlen</option>
      <option value="privremeno" <?php echo ($result['status'] == 'Privremeno') ? 'selected' : ''; ?> >Privremeno</option>
      <option value="pripravnici_rad" <?php echo ($result['status'] == 'Pripravnički rad') ? 'selected' : ''; ?> >Pripravnički rad</option>
    </select>
  </div>

  <div class="form-group">
  <label for="start-date"> Datum zaposlenja</label>
    <input type="date" id="start-date" value="<?php echo $result['date_of_employment'] ?>" placeholder="Start Date" name="start_date">
  </div>

  <div class="form-group">
  <label for="plata"> Plata</label>
    <input type="text" id="plata" value="<?php echo $result['salary'] ?>" placeholder="Plata" name="plata">
  </div>

  <div class="form-group">
  <label for="gender"> Spol</label>
    <select id="gender" name="gender">
      <option value="musko" <?php echo ($result['status'] == 'Muško') ? 'selected' : ''; ?> >Muško</option>
      <option value="zensko" <?php echo ($result['status'] == 'Žensko') ? 'selected' : ''; ?> >Žensko</option>
    </select>
  </div>

  <div class="form-group full-width">
  <label for="notes"> Bilješke</label>
    <textarea id="notes" name="notes"  placeholder="Bilješke radnika..."><?php echo $result['notes'] ?></textarea>
  </div>
  <div class="form-buttons">
    <button type="reset" id="clearButton" class="custom-clear-btn">Clear</button>
    <button type="submit"  class="custom-add-btn">Save</button>
  </div>
  </div>
</form>

   
    
    </div>

<script>
    Dropzone.options.dropzoneUpload = {
            url: "upload_photo_path.php",
            paramName: "photo",
            maxFilesize: 20,
            acceptedFiles: "image/*",
            init: function() {
                this.on("success", function(file, response) {
                    const jsonResponse = JSON.parse(response);
                    if (jsonResponse.success) {
                        document.getElementById('photoPathInput').value = jsonResponse.photo_path;
                    } else {
                        console.error(jsonResponse.error);
                    }
                });

                this.on("error", function(file, response) {
                    console.error("File upload error: ", response);
                });
            }
        };
</script>

<?php

require_once "../inc/footer.php";

?>