<?php
require_once '../config/config.php';
require_once '../classes/Automobili.php';
require_once "../inc/header.php";?>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $car = new Automobil();
  
    $name= $_POST['name'];
    $model = $_POST['model'];
    $registration = $_POST['registration'];
    $date_of_production = $_POST['date_of_production'];
    $price = $_POST['price'];
    $kilometers = $_POST['kilometers'];
    
    $car->create($name, $model, $registration, $date_of_production, $price, $kilometers);
    $_SESSION['message']['type'] = "success";
    $_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Automobil ".$name." uspješno dodan";

    header('Location: ../app/dashboard.php?page=automobili');
    exit();
    }

 ?>


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
  background-color: #ebeef5;
  color: #132650;
  font-family: FontAwesome, sans-serif;
  font-weight: normal;
  font-size: 14px;
  border: 1px solid #132650;
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


<div class="custom-main-content content">
            
<form class="forma-custom" action="" method="POST" enctype="multipart/form-data">
<h2>Dodaj novi auto</h2>

<div class="employee-form">
  <div class="form-group">
    <label for="name"> Naziv</label>
    <input type="text" id="name"  placeholder="Naziv" name="name">
  </div>

  <div class="form-group">
  <label for="model"> Model</label>
    <input type="text" id="model"  placeholder="Model" name="model">
  </div>

  <div class="form-group">
  <label for="registration"> Registracija</label>
    <input type="text" id="registration"  placeholder="Registracija" name="registration">
  </div>

  <div class="form-group">
  <label for="date_of_production"> Datum proizvodnje</label>
    <input type="date" id="date_of_production"  placeholder="Datum proizvodnje" name="date_of_production">
  </div>

  <div class="form-group">
  <label for="price"> Cijena</label>
    <input type="text" id="price" placeholder="Cijena"  name="price">
  </div>

  <div class="form-group">
  <label for="kilometers"> Kilometri</label>
    <input type="text" id="kilometers" placeholder="Kilometri"  name="kilometers">
  </div>
  
  <div class="form-buttons">
    <button type="reset" id="clearButton" class="custom-clear-btn">Izbriši</button>
    <button type="submit"  class="custom-add-btn">Spremi</button>
  </div>
  </div>
</form>

   
    
    </div>

<script>
    
</script>

<?php require_once "../inc/footer.php";  ?>