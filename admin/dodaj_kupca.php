<?php
require_once '../config/config.php';
require_once '../classes/Kupac.php';
require_once "../inc/header.php";?>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $kupac = new Kupac();
  
    $name= $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $description = $_POST['description'];
    $adress = $_POST['adress'];
    $objekat = $_POST['ustanova'];
    
    $kupac->create($name, $surname, $email, $phone_number,$adress, $description, $objekat);
    $customer_id = $kupac->get_latest_id_by_name($name, $surname);

    if(!empty($_POST['persons'])){

      foreach($_POST['persons'] as $person){
        if (!empty($person['name_product']) && !empty($person['last_name_product'])) {
        $name = $person['name_product'];
        $last_name = $person['last_name_product'];
        $kupac->assign_sanitarna($name, $last_name, $customer_id);
        }
      }
    }

    if (!empty($_POST['name_product_food']) && !empty($_POST['type_product']) && !empty($_POST['description_product'])) {
        $name_product_food = $_POST['name_product_food'];
        $type_product = $_POST['type_product'];
        $description_product = $_POST['description_product'];
        $kupac->assign_deratizacija($name_product_food, $type_product, $description_product, $customer_id);
    
    }
    header('Location: ../app/dashboard.php?page=kupci');
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
.hidden {
  visibility: hidden;
  display: none;


        }
.visible {
  visibility: visible;

}
.fixed-height {
            height: 150px; /* Adjust this to your desired form height */
            position: relative; /* Ensures that the input fields are positioned relative to this container */
        }

        #persons {
            display: flex;
            overflow-x: auto;
            max-width: 1330px; /* Set a fixed width */
            min-height:185px;
            /*border: 1px solid #ccc;*/
            padding: 0px;
            
            white-space: nowrap; /* Ensure it scrolls horizontally */
            margin-bottom:0px;
            scrollbar-width: thin;
    scrollbar-color: white #16171b;
        }

        .person {
            min-width: 400px; /* Each input block size */
            padding: 0px;
            /*border: 1px solid #ddd;*/
            margin-right: 65px;
            
            /*background-color: #f9f9f9;*/
        }

        .person label {
            display: block;
        }
        .person input {
            margin-bottom:15px;
        }
        .btn-product-remove{
          display: block;
          margin-top:0px;
        }
        .btn-add-person{
          padding: 10px 20px;
    color: #fff;
    
    background-color: white;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    color: black;
    font-weight:800;
        }
        
        .person button {
            margin-top: 10px;
            background-color: white;
            color: black;
    font-weight:800;
            border: none;
            padding: 10px 10px;
            cursor: pointer;
            border: none;
    border-radius: 20px;
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
    .razmak{
      display: none; align-items: flex-start; gap: 20px;
      
    }

    .analiza{
      min-width: 400px; /* Each input block size */
            padding: 0px;
            /*border: 1px solid #ddd;*/
            margin-right: 50px;
            
            /*background-color: #f9f9f9;*/
    }

    /* Hide the default checkbox */
    .analiza-checkbox{
      min-width: 300px; /* Each input block size */
            padding: 0px;
            /*border: 1px solid #ddd;*/
            
            margin-top:20px;
    }
    input[type="checkbox"] {
    display: none;
}

/* Create a custom checkbox */
input[type="checkbox"] + label {
    position: relative;
    padding-left: 35px; /* Space for the custom checkbox */
    cursor: pointer;
    user-select: none;
    display: inline-block; /* Ensure the label and checkbox are on the same line */
    vertical-align: middle;
    margin-bottom:40px;
}
input[type="checkbox"] + label:last-child{
  margin-bottom:0px;
}

/* Custom checkbox style */
input[type="checkbox"] + label:before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    border: 1px solid white; /* Border color */
    border-radius: 4px; /* Rounded corners */
    background-color: #0d1017; /* Background color */
    transition: background-color 0.3s, border-color 0.3s;
}

/* Style for checked state */
input[type="checkbox"]:checked + label:before {
    background-color: #008cba; /* Checked background color */
    border-color: #008cba; /* Change border color when checked */
}

/* Add a check mark */
input[type="checkbox"]:checked + label:after {
    content: "\2713"; /* Unicode check mark */
    position: absolute;
    left: 3px;
    top: 50%; /* Centering the checkmark vertically */
    transform: translateY(-50%); /* Ensure it stays in the middle */
    font-size: 16px;
    color: white; /* Check mark color */
}

</style>


<div class="custom-main-content">
            
<form id="validationForm" class="forma-custom" action="" method="POST" enctype="multipart/form-data">
<h2>Dodaj novi zahtjev</h2>

<div class="employee-form">
  <div class="form-group error-custom">
    <label for="name"> Ime</label>
    <input  data-parsley-length="[2, 20]" data-parsley-pattern="^[A-Z].*" data-parsley-required="true" type="text" id="name"  placeholder="Ime" name="name">
    <span class="error-message">Ime mora počinjati velikim slovom i ne smije biti duže od 20 karaktera</span>
  </div>

  <div class="form-group">
    <label for="surname"> Prezime</label>
    <input data-parsley-length="[2, 20]" data-parsley-pattern="^[A-Z].*" data-parsley-required="true" type="text" id="surname"  placeholder="Prezime" name="surname">
    <span id="first_nameError" class="error-message">Prezime mora počinjati velikim slovom i ne smije biti duže od 20 karaktera</span>
  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input id="first_lastnameError" type="email" id="email"  placeholder="Email" name="email"
          data-parsley-type="email" 
           data-parsley-required="true" 
           data-parsley-error-message="Please enter a valid email address.">
           <span id="emailError" class="error-message">Email nije unsesen pravilno</span>
  </div>

  <div class="form-group">
  <label for="phone_number"> Broj telefona</label>
    <input type="number" id="phone_number"  placeholder="Broj telefona" name="phone_number"
            data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" 
           data-parsley-length="[3, 15]"
           data-parsley-required="true">
           <span id="emailError" class="error-message">Limit za dužinu broja je 15</span>
  </div>

  

  <div class="form-group">
  <label for="description"> Detalji</label>
    <input type="text" id="description" placeholder="Detalji"  name="description">
  </div>

  <div class="form-group">
  <label for="adress"> Adresa</label>
    <input type="text" id="adress" placeholder="Adresa"  name="adress">
  </div>

  <div class="form-group">
  <label for="ustanova"> Ustanova</label>
    <input type="text" id="ustanova" placeholder="Ustanova"  name="ustanova">
  </div>

  <div class="form-group">
  <label for="website"> Website</label>
    <input type="text" id="website" placeholder="Website"  name="website">
  </div>

  <div class="form-group">
  <label for="service">Select Service:</label>
        <select id="service" name="service" onchange="showFields()">
            <option value="posao">Izaberi posao</option>
            <option value="sanitarna">Sanitarna odbrada</option>
            <option value="deratizacija">Analiza</option>
            <option value="posao">Deratizacija</option>
            <option value="posao">Dezinfekcija</option>
        </select>
  </div>

  <div id="sanitarnaFields" class="form-group hidden full-width">
  <div id="persons">
            <!-- Initial Person Input -->
            <div class="person">
            
                <label for="nameProduct">Ime osobe za sanitarnu</label><input type="text" id="nameProduct"  placeholder="Ime" name="persons[0][name_product]" >
                <label for="surnameProduct">Prezime osobe za sanitarnu</label> <input type="text" id="surnameProduct"  placeholder="Prezime" name="persons[0][last_name_product]">
            </div>
        </div>
        <button class="btn-add-person" type="button" onclick="addPerson()">Add Another Person</button>
  </div>

  <div id="deratizacijaFields" class="form-group hidden razmak ">
            <div class="analiza">
            <label for="name_product_food">Naziv proizvoda</label>
            <input type="text" id="name_product_food" name="name_product_food">
            <br><br>
            <label for="typeProizvod">Tip</label>
            <input type="text" id="typeProizvod" name="type_product">
            <br><br>
            <label for="descriptionProduct">Opis</label>
            <input type="text" id="descriptionProduct" name="description_product">
            </div>
            <div class="analiza-checkbox" style="margin-right: 140px;">
            <input type="checkbox" id="demoCheckbox1" name="checkbox" value="1">
            <label for="demoCheckbox1">Salmonela</label>
            <br>
            <input type="checkbox" id="demoCheckbox2" name="checkbox" value="1">
            <label for="demoCheckbox2">Listeria monocytogenes</label>
            
            <input type="checkbox" id="demoCheckbox3" name="checkbox" value="1">
            <label for="demoCheckbox3">Enterobacteriaceae</label>

            <input type="checkbox" id="demoCheckbox4" name="checkbox" value="1">
            <label for="demoCheckbox4">Koagulaza poztivne stafilokoke</label>
            </div>
            <div class="analiza-checkbox">
            <input type="checkbox" id="demoCheckbox5" name="checkbox" value="1">
            <label for="demoCheckbox5">Sulfitoredukujuće anaerobne bakterije</label>
            <br>
            <input type="checkbox" id="demoCheckbox6" name="checkbox" value="1">
            <label for="demoCheckbox6">Aerobne mezofilne bakterije</label>
            
            <input type="checkbox" id="demoCheckbox7" name="checkbox" value="1">
            <label for="demoCheckbox7">Escherichia coli</label>

            <input type="checkbox" id="demoCheckbox8" name="checkbox" value="1">
            <label for="demoCheckbox8">Bacilius cereus</label>
            </div>
        </div>
        
  
  <div class="form-buttons">
    <button type="reset" id="clearButton" class="custom-clear-btn">Clear</button>
    <button type="submit"  class="custom-add-btn">Save</button>
  </div>
  </div>
</form>

   
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script>
    function showFields() {
            const service = document.getElementById('service').value;
            const sanitarnaFields = document.getElementById('sanitarnaFields');
            const deratizacijaFields = document.getElementById('deratizacijaFields');

            sanitarnaFields.classList.add('hidden');
            sanitarnaFields.classList.remove('visible');
            deratizacijaFields.classList.add('hidden');
            deratizacijaFields.classList.remove('visible');
            
            deratizacijaFields.style.display = "none";
            removeRequired(sanitarnaFields);
            removeRequired(deratizacijaFields);
            

            if (service === 'sanitarna') {
              clearInputs(deratizacijaFields);
              addRequired(sanitarnaFields);
                sanitarnaFields.classList.remove('hidden');
                sanitarnaFields.classList.add('visible');
            } else if (service === 'deratizacija') {
              deratizacijaFields.style.display = "flex";
              clearInputs(sanitarnaFields);
              clearPersons(); 
              addRequired(deratizacijaFields);
                deratizacijaFields.classList.remove('hidden');
                deratizacijaFields.classList.add('visible');
            }else if (service === 'posao'){
             
            clearInputs(deratizacijaFields);
            clearInputs(sanitarnaFields);
            clearPersons();
            }
        }
        function clearInputs(container) {
    var inputs = container.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = "";  // Clear each input value
    }
}
function clearPersons() {
    const personsContainer = document.getElementById('persons');
    const initialPerson = personsContainer.querySelector('.initial');
    
    // Clear all dynamically added persons except the initial one
    while (personsContainer.children.length > 1) {
        personsContainer.removeChild(personsContainer.lastChild);
    }
}

function addRequired(container) {
    const inputs = container.getElementsByTagName('input');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].setAttribute('required', 'required');
    }
}

// Helper function to remove 'required' from inputs
function removeRequired(container) {
    const inputs = container.getElementsByTagName('input');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].removeAttribute('required');
    }
}
        // Add new person input fields dynamically
        function addPerson() {
    var personDiv = document.createElement('div');
    var personCount = document.querySelectorAll('.person').length; // Get the current count of persons
    personDiv.classList.add('person');
    
    // Use personCount as the index to group name and last name fields
    personDiv.innerHTML = `
        <label for="nameProduct${personCount}">Ime</label>
        <input type="text" id="nameProduct${personCount}" name="persons[${personCount}][name_product]" placeholder="Ime" required>

        <label for="surnameProduct${personCount}">Prezime</label>
        <input type="text" id="surnameProduct${personCount}" name="persons[${personCount}][last_name_product]" placeholder="Prezime" required>

        <button class="btn-product-remove" type="button" onclick="removePerson(this)">Remove</button>
    `;
    document.getElementById('persons').appendChild(personDiv);
}

// Remove person input fields
function removePerson(button) {
    button.parentElement.remove();

    // Re-index remaining inputs after removing
    var persons = document.querySelectorAll('.person');
    persons.forEach((personDiv, index) => {
        personDiv.querySelector('input[name^="persons"]').name = `persons[${index}][name_product]`;
        personDiv.querySelector('input[name^="persons"]').nextElementSibling.name = `persons[${index}][last_name_product]`;
    });
}

$('#validationForm').parsley({
  errorsContainer: function (ParsleyField) {
    return ParsleyField.$element.siblings('.error-message');  // Use custom error message container
  },
  errorsWrapper: '',  // Prevent default Parsley wrapper
  errorTemplate: ''  // Prevent default Parsley error template
});

$('#validationForm').parsley({
    errorsContainer: function (ParsleyField) {
        return ParsleyField.$element.siblings('.error-message');
    }
});

$('#validationForm').parsley().on('field:validated', function(field) {
      var $field = $(field.$element);
      var $errorMessage = $field.siblings('.error-message');
      
      // Show or hide the error message
      if (field.isValid()) {
          $errorMessage.hide();       // Hide error message
          $field.removeClass('invalid'); // Remove red border
      } else {
          $errorMessage.show();       // Show error message
          $field.addClass('invalid'); // Add red border
      }
  });
</script>

