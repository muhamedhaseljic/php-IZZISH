<?php

require_once "../inc/header.php";
require_once '../config/config.php';
require_once "../inc/header.php";?>


<div class="custom-container d-flex">
<?php require_once "../inc/sidebar.php";

?>

<style>
.custom-main-content {
    margin-left: 0px;
    width: 100%;
    
    
    background-color: #ebeef5;
    
    padding-bottom:0px;
    display: flex;
    justify-content: center;
    align-items: center;
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
  padding: 20px;
  border-radius: 10px;
  border: 1px solid #132650;
}

.form-group {
  width: 30%;
  position: relative;
}

.form-group.full-width {
  width: 100%;
  
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
    text-align: center;
    border: 1px solid #132650;
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

.form-group input.invalid {
        border: 1px solid #d13517;
    }
    .error-custom{
      position: relative;

    }
    .form-group .error-message {
        color: #d13517;
        font-size: 12px;
        position: absolute;
        top: 100%;
        left: 0;
        font-weight: 800;
        display: none;
    }
</style>


<div class="custom-main-content content">


            
<form id="validationForm" class="forma-custom" action="dodaj_radnika.php" method="POST" enctype="multipart/form-data">
<h2>Dodaj novog radnika</h2>
<div class="employee-form">
  <div class="form-group error-custom">
    <label for="ime"> Ime</label>
    <input data-parsley-length="[2, 20]" data-parsley-pattern="^[A-Z].*" data-parsley-required="true" type="text"  id="ime" placeholder="Ime" name="first_name" >
    <span class="error-message">Ime mora počinjati velikim slovom i ne smije biti duže od 20 karaktera</span>
  </div>


  <div class="form-group">
  <label for="prezime"> Prezime</label>
    <input data-parsley-length="[2, 20]" data-parsley-pattern="^[A-Z].*" data-parsley-required="true" type="text" id="prezime" placeholder="Prezime" name="last_name" >
    <span id="surname" class="error-message">Prezime mora počinjati velikim slovom i ne smije biti duže od 20 karaktera</span>
  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input type="email" id="email" placeholder="Email" name="email" 
    data-parsley-type="email" 
           data-parsley-required="true" 
           data-parsley-error-message="Please enter a valid email address.">
           <span  class="error-message">Email nije pravilno unsesen</span>

  </div>

  <div class="form-group">
  <label for="phone-number"> Broj telefona</label>
    <input type="tel" id="phone-number" placeholder="Phone Number" name="phone_number" 
    data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" 
           data-parsley-length="[3, 15]"
           data-parsley-required="true">
           <span id="emailError" class="error-message">Limit za dužinu broja je 15</span>

  </div>

  <div class="form-group error-custom">
  <label for="sifra"> Šifra</label>
    <input type="password" class="" id="sifra" placeholder="Šifra" name="password" 
    data-parsley-required="true" 
      data-parsley-pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{5,}$" 
      data-parsley-error-message="Lozinka mora imati najmanje 5 karaktera, jednu veliko slovo, jedan broj i jedan specijalni karakter.">
      <span class="error-message">Lozinka mora imati najmanje 5 karaktera, jedno veliko slovo, jedan broj i jedan specijalni karakter.</span>
  </div>

  <div class="form-group">
  <label for="file"> Slika</label>
    <input data-parsley-required="true" type="file" id="file" name="photo_path" >
    <span class="error-message">Sliku je obavezno dodati.</span>

  </div>

  <div class="form-group">
  <label for="mjesto-rodjenja"> Mjesto rođenja</label>
    <input data-parsley-length="[2, 20]" data-parsley-pattern="^[A-Z].*" data-parsley-required="true" type="text" id="mjesto-rodjenja" placeholder="Mjesto rođenja" name="mjesto_rodjenja" >
    <span  class="error-message">Mjesto mora počinjati velikim slovom i ne smije biti duže od 20 karaktera</span>

  </div>

  <div class="form-group">
  <label for="adresa-boravista"> Adresa boravišta</label>
    <input data-parsley-length="[2, 20]" data-parsley-pattern="^[A-Z].*" data-parsley-required="true" type="text" id="adresa-boravista" placeholder="Adresa boravišta" name="adresa_boravista" >
    <span  class="error-message">Adresa mora počinjati velikim slovom i ne smije biti duža od 20 karaktera</span>
  </div>

  <div class="form-group">
  <label for="date-of-birth"> Datum rođenja</label>
    <input data-parsley-required="true" data-parsley-birthdate type="date" id="date-of-birth" placeholder="Date of Birth" name="date_of_birth" >
    <span class="error-message">Morate imati 18 godina.</span>

  </div>

  <div class="form-group">
  <label for="jmbg"> JMBG</label>
    <input data-parsley-length="[12, 15]" data-parsley-required="true" type="text" id="jmbg" placeholder="JMBG" name="jmbg" >
    <span  class="error-message">JMBG mora biti u razmaku od 13 do 15 karaktera</span>

  </div>

  <div class="form-group">
  <label for="position"> Pozicija</label>
    <input data-parsley-length="[5, 50]" data-parsley-pattern="^[A-Z].*" data-parsley-required="true" type="text" id="position" placeholder="Pozicija" name="position" >
    <span  class="error-message">Morate unijeti poziciju radnika</span>
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
    <input data-parsley-required="true" type="date" id="start-date" placeholder="Start Date" name="start_date" >
    <span  class="error-message">Datum zaposlenja je obavezan</span>

  </div>

  <div class="form-group">
  <label for="plata"> Plata</label>
    <input data-parsley-required="true" type="text" id="plata" placeholder="Plata" name="plata" >
    <span  class="error-message">Plata je obavezna</span>

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
    <button type="reset" id="clearButton" class="custom-clear-btn">Izbriši</button>
    <button type="submit" class="custom-add-btn">Spremi</button>
  </div>
  </div>
</form>

   
    
    </div>
    <?php
    
    require_once "../inc/footer.php";

    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    
    <script>/*
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
    
    if (password.length < 5) {
        event.preventDefault();
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
*/
//poruke za nepravilan unos
$('#validationForm').parsley({
  errorsContainer: function (ParsleyField) {
    return ParsleyField.$element.siblings('.error-message'); 
  },
  errorsWrapper: '', 
  errorTemplate: ''
});

$('#validationForm').parsley({
    errorsContainer: function (ParsleyField) {
        return ParsleyField.$element.siblings('.error-message');
    }
});

$('#validationForm').parsley().on('field:validated', function(field) {
      var $field = $(field.$element);
      var $errorMessage = $field.siblings('.error-message');
      
      if (field.isValid()) {
          $errorMessage.hide();
          $field.removeClass('invalid');
      } else {
          $errorMessage.show();
          $field.addClass('invalid');
      }
  });

  Parsley.addValidator('birthdate', {
  validateString: function(value) {
    const today = new Date(); // Get today's date
    const birthDate = new Date(value); // Convert input value to date
    const age = today.getFullYear() - birthDate.getFullYear(); // Calculate age
    const monthDifference = today.getMonth() - birthDate.getMonth();
    const dayDifference = today.getDate() - birthDate.getDate();

    // Adjust age calculation based on the current month and day
    if (monthDifference < 0 || (monthDifference === 0 && dayDifference < 0)) {
      return age - 1 >= 18;
    }

    return age >= 18; // Ensure age is 18 or more
  }
});
</script>