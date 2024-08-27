<?php

require_once "header.php";?>

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
 h2 {
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

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.10.2/dropzone.min.css" />

<div class="custom-main-content">
            
<form class="">
<h2>Dodaj novog radnika</h2>
<div class="employee-form">
  <div class="form-group">
    <label for="ime"> Ime</label>
    <input type="text" id="ime" placeholder="Ime">
  </div>

  <div class="form-group">
  <label for="prezime"> Prezime</label>
    <input type="text" id="prezime" placeholder="Prezime">
  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input type="email" id="email" placeholder="Email">
  </div>

  <div class="form-group">
  <label for="phone-number"> Broj telefona</label>
    <input type="tel" id="phone-number" placeholder="Phone Number">
  </div>

  <div class="form-group">
  <label for="sifra"> Sifra</label>
    <input type="password" id="sifra" placeholder="Šifra">
  </div>

  <div class="form-group">
  <label for="file"> Slika</label>
    <input type="file" id="file">
  </div>

  <div class="form-group">
  <label for="mjesto-rodjenja"> Mjesto rođenja</label>
    <input type="text" id="mjesto-rodjenja" placeholder="Mjesto rođenja">
  </div>

  <div class="form-group">
  <label for="adresa-boravista"> Adresa boravišta</label>
    <input type="text" id="adresa-boravista" placeholder="Adresa boravišta">
  </div>

  <div class="form-group">
  <label for="date-of-birth"> Date of Birth</label>
    <input type="date" id="date-of-birth" placeholder="Date of Birth">
  </div>

  <div class="form-group">
  <label for="jmbg"> JMBG</label>
    <input type="text" id="jmbg" placeholder="JMBG">
  </div>

  <div class="form-group">
  <label for="position"> Pozicija</label>
    <input type="text" id="position" placeholder="Pozicija">
  </div>

  <div class="form-group">
  <label for="employment-status"> Status</label>
    <select id="employment-status">
      <option value="stalno-zaposlen">Stalno zaposlen</option>
      <option value="privremeno">Privremeno</option>
    </select>
  </div>

  <div class="form-group">
  <label for="start-date"> Datum zaposlenja</label>
    <input type="date" id="start-date" placeholder="Start Date">
  </div>

  <div class="form-group">
  <label for="plata"> Plata</label>
    <input type="text" id="plata" placeholder="Plata">
  </div>

  <div class="form-group">
  <label for="gender"> Spol</label>
    <select id="gender">
      <option value="musko">Muško</option>
      <option value="zensko">Žensko</option>
    </select>
  </div>

  <div class="form-group full-width">
  <label for="notes"> Bilješke</label>
    <textarea id="notes" placeholder="Bilješke radnika..."></textarea>
  </div>

  <div class="form-buttons">
    <button type="reset" id="clearButton" class="custom-clear-btn">Clear</button>
    <button type="submit" class="custom-add-btn">Save</button>
  </div>
  </div>
</form>

   
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.10.2/dropzone.min.js"></script>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

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