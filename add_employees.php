<?php

require_once "header.php";
require_once 'config/config.php';?>


<div class="custom-container d-flex">
<?php require_once "sidebar.php";

?>

<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    
    
    background-color: #0d1017;
    
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
  background-color: #171c22;
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
  border: 1px solid white;
  background-color: #0d1017;
  color: #fff;
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
    color:white;
    margin:0;
    
}
.forma-custom h2 {
    text-align: left;
    color: #fff;
    margin-bottom: 20px;
    
    
}
.custom-add-btn{
    padding: 10px 20px;
    color: #fff;
    
    background-color: #262c78;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    color: white;
}
.custom-add-btn:hover{
    background-color: #484b8f;
    color: #fff;
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


<div class="custom-main-content">
            
<form class="forma-custom" action="dodaj_radnika.php" method="POST" enctype="multipart/form-data">
<h2>Dodaj novog radnika</h2>
<div class="employee-form">
  <div class="form-group">
    <label for="ime"> Ime</label>
    <input type="text" id="ime" placeholder="Ime" name="first_name">
  </div>

  <div class="form-group">
  <label for="prezime"> Prezime</label>
    <input type="text" id="prezime" placeholder="Prezime" name="last_name">
  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input type="email" id="email" placeholder="Email" name="email">
  </div>

  <div class="form-group">
  <label for="phone-number"> Broj telefona</label>
    <input type="tel" id="phone-number" placeholder="Phone Number" name="phone_number">
  </div>

  <div class="form-group">
  <label for="sifra"> Sifra</label>
    <input type="password" id="sifra" placeholder="Šifra" name="password">
  </div>

  <div class="form-group">
  <label for="file"> Slika</label>
    <input type="file" id="file" name="photo_path">
  </div>

  <div class="form-group">
  <label for="mjesto-rodjenja"> Mjesto rođenja</label>
    <input type="text" id="mjesto-rodjenja" placeholder="Mjesto rođenja" name="mjesto_rodjenja">
  </div>

  <div class="form-group">
  <label for="adresa-boravista"> Adresa boravišta</label>
    <input type="text" id="adresa-boravista" placeholder="Adresa boravišta" name="adresa_boravista">
  </div>

  <div class="form-group">
  <label for="date-of-birth"> Date of Birth</label>
    <input type="date" id="date-of-birth" placeholder="Date of Birth" name="date_of_birth">
  </div>

  <div class="form-group">
  <label for="jmbg"> JMBG</label>
    <input type="text" id="jmbg" placeholder="JMBG" name="jmbg">
  </div>

  <div class="form-group">
  <label for="position"> Pozicija</label>
    <input type="text" id="position" placeholder="Pozicija" name="position">
  </div>

  <div class="form-group">
  <label for="employment-status"> Status</label>
    <select id="employment-status" name="employment_status">
      <option value="stalno-zaposlen">Stalno zaposlen</option>
      <option value="privremeno">Privremeno</option>
    </select>
  </div>

  <div class="form-group">
  <label for="start-date"> Datum zaposlenja</label>
    <input type="date" id="start-date" placeholder="Start Date" name="start_date">
  </div>

  <div class="form-group">
  <label for="plata"> Plata</label>
    <input type="text" id="plata" placeholder="Plata" name="plata">
  </div>

  <div class="form-group">
  <label for="gender"> Spol</label>
    <select id="gender" name="gender">
      <option value="musko">Muško</option>
      <option value="zensko">Žensko</option>
    </select>
  </div>

  <div class="form-group full-width">
  <label for="notes"> Bilješke</label>
    <textarea id="notes" name="notes" placeholder="Bilješke radnika..."></textarea>
  </div>

  <div class="form-buttons">
    <button type="reset" id="clearButton" class="custom-clear-btn">Clear</button>
    <button type="submit" class="custom-add-btn">Save</button>
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