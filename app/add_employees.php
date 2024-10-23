<?php

require_once "../inc/header.php";
require_once '../config/config.php';?>


<div class="custom-container d-flex">
<?php require_once "../inc/sidebar.php";

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
    color: white;
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

.form-group input.invalid {
        border: 1px solid red;
    }
    .error-custom{
      position: relative;

    }
    .form-group .error-message {
        color: red;
        font-size: 12px;
        position: absolute;
        top: 100%;  /* Below the input field */
        left: 0;
        display: none; /* Hidden by default */
    }
</style>


<div class="custom-main-content">


            
<form class="forma-custom" id="employeeForm" action="dodaj_radnika.php" method="POST" enctype="multipart/form-data">
<h2>Dodaj novog radnika</h2>
<div class="employee-form">
  <div class="form-group error-custom">
    <label for="ime"> Ime</label>
    <input type="text"  id="ime" placeholder="Ime" name="first_name" >
    <span id="first_nameError" class="error-message">Password must be at least 5 characters long.</span>

  </div>

  <div class="form-group">
  <label for="prezime"> Prezime</label>
    <input type="text" id="prezime" placeholder="Prezime" name="last_name" >
    <span id="last_nameError" class="error-message">Password must be at least 5 characters long.</span>

  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input type="email" id="email" placeholder="Email" name="email" >
    <span id="emailError" class="error-message">Password must be at least 5 characters long.</span>

  </div>

  <div class="form-group">
  <label for="phone-number"> Broj telefona</label>
    <input type="tel" id="phone-number" placeholder="Phone Number" name="phone_number" >
    <span id="phone_numberError" class="error-message">Password must be at least 5 characters long.</span>

  </div>

  <div class="form-group error-custom">
  <label for="sifra"> Sifra</label>
    <input type="password" class="" id="sifra" placeholder="Šifra" name="password" >
    <span id="passwordError" class="error-message">Password must be at least 5 characters long.</span>
  </div>

  <div class="form-group">
  <label for="file"> Slika</label>
    <input type="file" id="file" name="photo_path" >
  </div>

  <div class="form-group">
  <label for="mjesto-rodjenja"> Mjesto rođenja</label>
    <input type="text" id="mjesto-rodjenja" placeholder="Mjesto rođenja" name="mjesto_rodjenja" >
  </div>

  <div class="form-group">
  <label for="adresa-boravista"> Adresa boravišta</label>
    <input type="text" id="adresa-boravista" placeholder="Adresa boravišta" name="adresa_boravista" >
  </div>

  <div class="form-group">
  <label for="date-of-birth"> Date of Birth</label>
    <input type="date" id="date-of-birth" placeholder="Date of Birth" name="date_of_birth" >
  </div>

  <div class="form-group">
  <label for="jmbg"> JMBG</label>
    <input type="text" id="jmbg" placeholder="JMBG" name="jmbg" >
  </div>

  <div class="form-group">
  <label for="position"> Pozicija</label>
    <input type="text" id="position" placeholder="Pozicija" name="position" >
  </div>

  <div class="form-group">
  <label for="employment-status"> Status</label>
    <select id="employment-status" name="employment_status" >
      <option value="stalno-zaposlen">Stalno zaposlen</option>
      <option value="privremeno">Privremeno</option>
    </select>
  </div>

  <div class="form-group">
  <label for="start-date"> Datum zaposlenja</label>
    <input type="date" id="start-date" placeholder="Start Date" name="start_date" >
  </div>

  <div class="form-group">
  <label for="plata"> Plata</label>
    <input type="text" id="plata" placeholder="Plata" name="plata" >
  </div>

  <div class="form-group">
  <label for="gender"> Spol</label>
    <select id="gender" name="gender" >
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
    <?php
    
    require_once "../inc/footer.php";

    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
document.getElementById('employeeForm').addEventListener('submit', function (event) {
    var password = document.getElementById('sifra').value;
    var passwordInput = document.getElementById('sifra');
    var errorMessage = document.getElementById('passwordError');

    var name = document.getElementById('ime').value;
    var nameInput = document.getElementById('ime');
    var first_nameError = document.getElementById('first_nameError');
    

    var hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    var hasNumber = /\d/;
    var hasUppercase = /[A-Z]/;

    if(name.length <3){
      event.preventDefault();
      nameInput.classList.add('invalid');
      first_nameError.style.display = 'inline';
      first_nameError.textContent = 'name must have 3 character.';
    }
    else{
      nameInput.classList.remove('invalid');
      first_nameError.style.display = 'none';
    }
    
    // Check if password length is less than 5
    if (password.length < 5) {
        event.preventDefault();  // Prevent form submission
        //alert("Please enter a valid password with at least 5 characters."); // Show the error
        passwordInput.classList.add('invalid');
        errorMessage.style.display = 'inline';
        errorMessage.textContent = 'password must have 5 character.';

    } else if(!hasSpecialChar.test(password) || !hasNumber.test(password) || !hasUppercase.test(password)) {
      event.preventDefault();
      passwordInput.classList.add('invalid');
        errorMessage.style.display = 'inline';
        errorMessage.textContent = 'Passwords must contain:  a minimum of 1 upper case letter [A-Z]; special character and;  numeric character [0-9].';
    }
    else{
      passwordInput.classList.remove('invalid');
      errorMessage.style.display = 'none';
    }
});
</script>