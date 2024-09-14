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
        
</style>


<div class="custom-main-content">
            
<form class="forma-custom" action="" method="POST" enctype="multipart/form-data">
<h2>Dodaj novi zahtjev</h2>

<div class="employee-form">
  <div class="form-group">
    <label for="name"> Ime</label>
    <input type="text" id="name"  placeholder="Ime" name="name">
  </div>

  <div class="form-group">
    <label for="surname"> Prezime</label>
    <input type="text" id="surname"  placeholder="Prezime" name="surname">
  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input type="email" id="email"  placeholder="Email" name="email">
  </div>

  <div class="form-group">
  <label for="phone_number"> Broj telefona</label>
    <input type="number" id="phone_number"  placeholder="Broj telefona" name="phone_number">
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
            <option value="sanitarna">Sanitarna</option>
            <option value="deratizacija">Deratizacija</option>
        </select>
  </div>

  <div id="sanitarnaFields" class="form-group full-width">
  <div id="persons">
            <!-- Initial Person Input -->
            <div class="person">
            
                <label for="nameProduct">Ime </label><input type="text" id="nameProduct"  placeholder="Ime" name="persons[0][name_product]" >
                <label for="surnameProduct">Prezime</label> <input type="text" id="surnameProduct"  placeholder="Prezime" name="persons[0][last_name_product]">
            </div>
        </div>
        <button class="btn-add-person" type="button" onclick="addPerson()">Add Another Person</button>
  </div>

  <div id="deratizacijaFields" class="form-group hidden">
            <label for="name_product_food">Naziv proizvoda</label>
            <input type="text" id="name_product_food" name="name_product_food">
            <br>
            <label for="typeProizvod">Tip</label>
            <input type="text" id="typeProizvod" name="type_product">
            <br>
            <label for="descriptionProduct">Opis</label>
            <input type="text" id="descriptionProduct" name="description_product">
        </div>
  
  <div class="form-buttons">
    <button type="reset" id="clearButton" class="custom-clear-btn">Clear</button>
    <button type="submit"  class="custom-add-btn">Save</button>
  </div>
  </div>
</form>

   
    
    </div>

<script>
    function showFields() {
            const service = document.getElementById('service').value;
            const sanitarnaFields = document.getElementById('sanitarnaFields');
            const deratizacijaFields = document.getElementById('deratizacijaFields');

            sanitarnaFields.classList.add('hidden');
            sanitarnaFields.classList.remove('visible');
            deratizacijaFields.classList.add('hidden');
            deratizacijaFields.classList.remove('visible');

            if (service === 'sanitarna') {
                sanitarnaFields.classList.remove('hidden');
                sanitarnaFields.classList.add('visible');
            } else if (service === 'deratizacija') {
                deratizacijaFields.classList.remove('hidden');
                deratizacijaFields.classList.add('visible');
            }
        }

        // Add new person input fields dynamically
        function addPerson() {
    var personDiv = document.createElement('div');
    var personCount = document.querySelectorAll('.person').length; // Get the current count of persons
    personDiv.classList.add('person');
    
    // Use personCount as the index to group name and last name fields
    personDiv.innerHTML = `
        <label for="nameProduct">Ime</label>
        <input type="text" name="persons[${personCount}][name_product]" placeholder="Ime" required>

        <label for="surnameProduct">Prezime</label>
        <input type="text" name="persons[${personCount}][last_name_product]" placeholder="Prezime" required>

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

</script>