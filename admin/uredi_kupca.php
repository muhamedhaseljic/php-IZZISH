<?php
require_once '../config/config.php';
require_once '../classes/Kupac.php';
require_once "../inc/header.php";?>

<?php 

$kupac_obj = new Kupac();
$result = $kupac_obj->read($_GET['id']);

if($_SERVER['REQUEST_METHOD'] == "POST"){

    
    $customer_id = $_GET['id'];
    $name= $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $description = $_POST['description'];
    $adress = $_POST['adress'];
    $employee_id= $_POST['assign_employee'];
    
    $kupac_obj->update($customer_id, $name, $surname, $email, $phone_number,$adress, $description);
    $kupac_obj->assign_employee($customer_id, $employee_id);
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
</style>


<div class="custom-main-content">
            
<form class="forma-custom" action="" method="POST" enctype="multipart/form-data">
<h2>Uredi zahtjev</h2>

<div class="employee-form">
  <div class="form-group">
    <label for="name"> Ime</label>
    <input type="text" id="name" value="<?php echo $result['first_name'] ?>" placeholder="Ime" name="name">
  </div>

  <div class="form-group">
    <label for="surname"> Prezime</label>
    <input type="text" id="surname" value="<?php echo $result['last_name'] ?>" placeholder="Prezime" name="surname">
  </div>

  <div class="form-group">
  <label for="email"> Email</label>
    <input type="email" id="email" value="<?php echo $result['email'] ?>" placeholder="Email" name="email">
  </div>

  <div class="form-group">
  <label for="phone_number"> Broj telefona</label>
    <input type="number" id="phone_number" value="<?php echo $result['phone_number'] ?>" placeholder="Broj telefona" name="phone_number">
  </div>

  

  <div class="form-group">
  <label for="description"> Detalji</label>
    <input type="text" id="description" value="<?php echo $result['description'] ?>" placeholder="Detalji"  name="description">
  </div>

  <div class="form-group">
  <label for="adress"> Adresa</label>
    <input type="text" id="adress" value="<?php echo $result['adress'] ?>" placeholder="Adresa"  name="adress">
  </div>

  <div class="form-group">
  <label for="ustanova"> Ustanova</label>
    <input type="text" id="ustanova" value="<?php if($result['ustanova_id'] == 1)  echo "ima"; else{echo "nema";} ?>" placeholder="Ustanova"  name="ustanova">
  </div>

  <div class="form-group">
  <label for="website"> Website</label>
    <input type="text" id="website" placeholder="Website"  name="website">
  </div>

  <div class="form-group">
  <label for="assign_employee"> Dodjeli posao radniku</label>
    <select id="assign_employee" name="assign_employee" >
      <option value="0"  >Bez radnika</option>
    <?php
                        
                        $sql = "SELECT * FROM radnici";
                        $run = $conn->query($sql);
                        $results = $run->fetch_all(MYSQLI_ASSOC);
                        $select_radnici = $results;
                        
                        
                        foreach($select_radnici as $radnici) : ?>
                        <option value="<?php echo $radnici['employee_id']; ?>">
                                        <?php echo $radnici['first_name'] . " " . $radnici['last_name']; ?>
                                    </option>

                                <?php endforeach; ?>
    </select>
    
  </div>

  <div class="form-group">
  <label for="service">Select Service:</label>
        <select id="service" name="service" onchange="showFields()">
            <option value="sanitarna">Sanitarna</option>
            <option value="deratizacija">Deratizacija</option>
        </select>
  </div>

  <div id="sanitarnaFields" class="form-group full-width">
  <label for="notes"> Ime i Prezime</label>
    <textarea id="notes" name="notes" placeholder="Dodaj osobe nad kojima se izvršava sanitarna"></textarea>
  </div>

  <div id="deratizacijaFields" class="form-group hidden">
            <label for="nameProduct">Naziv proizvoda</label>
            <input type="text" id="nameProduct" name="Naziv proizvoda">
            <br>
            <label for="typeProizvod">Tip</label>
            <input type="text" id="typeProizvod" name="Tip">
            <br>
            <label for="descriptionProduct">Opis</label>
            <input type="text" id="descriptionProduct" name="Opis">
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
</script>