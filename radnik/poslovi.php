<?php

require_once "../classes/Kupac.php";

$kupac = new Kupac();
$kupac = $kupac->fetch_all();

?>
<style>
.custom-main-content {
    margin-left: 0px; 
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #ebeef5;
    min-height: 100vh;
    padding-bottom:0px;
}

.d-flex {
    display: flex;
}

.justify-content-between {
    justify-content: space-between;
}

.align-items-center {
    align-items: center;
}

.mb-3 {
    margin-bottom: 20px;
}

.custom-search-bar {
    padding: 10px;
    width: 300px;
    border-radius: 20px;
    border: none;
    color: #132650;
    background-color:white;
    border:1px solid #132650;
}

.custom-table {
    
    width: 100%;
    border-collapse: separate;
    border-spacing: 0px;
    
}

.custom-table th, .custom-table td {
    padding: 15px;
    text-align: left;
    color: #fff;
}

thead tr {
    background-color: #132650;
    position: sticky;
    top: 0;

}

.custom-table thead th {
    padding: 15px;
    text-align: left;
    color: #fff;
    background-color: #132650;
    border: none; 
}

.custom-table tbody tr td:first-child {
    border-top-left-radius: 25px;
    border-bottom-left-radius: 20px;
}

.custom-table tbody tr td:last-child {
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

.custom-table thead th:first-child {
    border-top-left-radius: 20px; 
    border-bottom-left-radius: 20px;
}

.custom-table thead th:last-child {
    border-top-right-radius: 20px; 
    border-bottom-right-radius: 20px;
}

tbody tr:last-child {
    border-bottom: none;
}

.custom-table tbody tr td {
    border: none;
    background-color: white ;
    vertical-align: middle;
    border-top: 10px solid #ebeef5 ;
    color: black;
    
}

.custom-table tbody tr:hover td {
    
    
    
}

.custom-profile-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #008cba;
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
.custom-edit-btn, .custom-delete-btn, .custom-view-btn {
    background-color: #444;
    border: none;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
    color: white;
}

 .custom-edit-btn:hover, .custom-delete-btn:hover, .custom-view-btn:hover{
    background-color: #555;
}


.custom-edit-btn {
    margin-right: 10px;
    background-color: #548ace;
}
.custom-edit-btn:hover{
    background-color: #386bab;
    color:white;
}

.custom-delete-btn {
    margin-right: 10px;
    background-color: #ed484d;
}
.custom-delete-btn:hover{
    background-color: #ba383c;
}

.custom-view-btn {
    margin-right: 10px;
    background-color: #807e7e;
}
.custom-view-btn:hover{
    background-color: #666565;
}


.custom-main-content h1{
    color:#132650;
    margin-bottom:20px;
}
.scrolling-divv{
    overflow-y: scroll;
    height: 75vh;
    box-sizing: border-box;
    width: 100%;
    scrollbar-width: thin;
    scrollbar-color: #132650 #ebeef5;
    padding-right:5px;
}


        .profile-picture {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border-radius: 50%;
            margin-right: 20px;
        }
.profile-picture img{
            width: 100px;
            height: 100px;
            background-color: #ccc;
            margin-right: 20px;
            border: 1px solid #132650;
}
        .kupac-details {
            display: flex;
            flex-direction: column;
        }

        .kupac-details h2 {
            margin-top: 0;
            
        }

        .kupac-details ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .kupac-details ul li {
            margin-bottom: 8px;
            font-size: 14px;
        }

        .popup {
            display: none; 
            position: fixed; 
            width: 100%;
            height: 100%;
            overflow: auto; 
            
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7); 
            justify-content: center;
            align-items: center;
            z-index:  999;
        }

        .popup-content {
            background-color: #fefefe;
            margin: 15% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
            margin-top:100px;
            display: flex;
            border-radius: 8px;
            width: 500px;
            text-align: left;
            position: relative;
        }



        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .table-filter {
    border-radius: 5px;
    margin-left: 10px;
    
}

.service-filter-btn {
    margin: 0 5px;
    padding: 5px 10px;
    border: none;
    background-color: white;
    color: black;
    border-radius: 10px;
    cursor: pointer;
}

.service-filter-btn.active {
    background-color: #132650;
    color:white;
    border: none;
}
.service-filter-btn:focus {
    outline: none; 
}
.service-filter-btn:nth-of-type(1){
    margin-left: 50px;
}

.modal {
            display: none; 
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); 
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            /*border: 1px solid #888;*/
            width: 600px;
            
            color:black;
            border-radius:20px;
        }
        .modal-content input{
            width: 100%;
            padding: 10px;
            margin-top: 0px;
            border-radius: 5px;
            border: 1px solid white;
            background-color: #ebeef5;
            color: #132650;
            font-family: FontAwesome, sans-serif;
            font-weight: normal;
            font-size: 14px;
        }
        .modal-content input:focus{
            border: 1px solid #008cba;
    outline: none;
        }
        .close {
            color: #132650;
            font-size: 28px;
            font-weight: bold;
            width: 20px;
            height: 20px;
            align-items: center;
            justify-content: center;
            border-radius: 20%;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns layout */
    
    grid-row-gap: 0px;
    grid-column-gap: 60px;
}
        .form-group {
    display: flex;
    flex-direction: column;
    align-items: start;
    
}
.form-group {
    align-items: center;
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
  border: 1px solid  black;
}

.form-group input:focus{
    border: 1px solid #008cba;
    outline: none;
}
.modal-name{
    font-weight:800;
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
    <?php
    
    $employee_data = $radnik->get_employee_data();
$radnik_id = $employee_data['employee_id'];
    
    ?>
    <div class="custom-main-content content">
        <h1 >Poslovi u ovoj sedmici</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="text" placeholder="Pretraži po gradu..." class="custom-search-bar">
                    <button class="service-filter-btn active" data-filter="all" onclick="filterRowsByButton(this)">Sve</button>
                    <button class="service-filter-btn" data-filter="Analiza" onclick="filterRowsByButton(this)">Analiza</button>
                    <button class="service-filter-btn" data-filter="Sanitarna" onclick="filterRowsByButton(this)">Sanitarna</button>
                </div>
                <a target="_blank" href="<?php echo "../jobs_pdf/customers".$radnik_id.".pdf"?>" class="custom-add-btn">PDF</a>

            </div>
            <div class="scrolling-divv">
            <table id="emp-table" class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kupac</th>
                        <th>Telefon</th>
                        <th>Posao</th>
                        <th>Ustanova</th>
                        <th>Grad</th>
                        <th col-index = 7 >Dan
                        <select class="table-filter" onchange="filter_rowss()">
                            <option value="all"></option>
                        </select>
                        </th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php $employee_data = $radnik->get_employee_data() ?>
                <?php $radnik_id = $employee_data['employee_id'] ?>

                <?php 
                
                $sql = "SELECT kupac.*,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name,
                  produkt_hrana.name as product_food_name,
                  produkt_hrana.type as product_food_type,
                  produkt_hrana.description as product_food_description,
                  automobili.name as car_name,
                  automobili.model as car_model,
                   GROUP_CONCAT(CONCAT(produkt_osoba.first_name, ' ', produkt_osoba.last_name) SEPARATOR ', ') AS produkt_osoba_names
                  FROM `kupac` 
                  left join `radnici` on kupac.employee_id = radnici.employee_id
                  left join `produkt_hrana` on kupac.customer_id = produkt_hrana.customer_id
                  left join `produkt_osoba` on kupac.customer_id = produkt_osoba.customer_id
                  left join `automobili` on radnici.car_id = automobili.car_id
                  where kupac.employee_id = $radnik_id && kupac.day_of_a_week != 'poslovi' && kupac.jobs_id =0
                  GROUP BY kupac.customer_id
                  ORDER BY FIELD(kupac.day_of_a_week, 'Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak'),
                  kupac.position;";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    $select_members = $results;
                    
                    foreach($results as $kupci) : ?>

                    <tr>
                        <td><?=$kupci['customer_id']?></td>
                        <td><?=$kupci['first_name']. " ".$kupci['last_name'] ?></td>
                        <td>
                        <?=$kupci['phone_number'] ?>
                        </td>
                        <td><?=$kupci['service'] ?></td>
                        <td><?=$kupci['objekat'] ?></td>
                        <td><?=$kupci['city'] ?></td>
                        <td><?=$kupci['day_of_a_week'] ?></td>
                        <td>
                        <button id="popupBtn" class="custom-view-btn view-customer-btn" data-customer='<?php echo json_encode($kupci); ?>'>
                            <span class="fas fa-eye"></span></button>
                            <button onclick="showPopup(<?php echo $kupci['customer_id']; ?>, '<?php echo $kupci['service']; ?>', '<?php echo $kupci['city']; ?>')" class="custom-edit-btn" name="employee_id" value="<?php echo $employee_data['employee_id']; ?>"> <span class="fas fa-check "> </span> </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <form id="deleteForm" action="zavrsi_posao.php" method="POST">
        <input type="hidden" name="customerId" id="customerId">
        <input type="hidden" name="deleteReason" id="deleteReason">
        <input type="hidden" name="leave_startDate" id="leave_startDate">
        <input type="hidden" name="taking-timeDate" id="taking-timeDate">
    </form>
      <div id="modal" class="modal">
    <div class="modal-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <p>Naziv posla: <span class="modal-name" id="employeeName"></span> <br>
        Mjesto: <span class="modal-name" id="employeeLastName"></span> <br>
        Unesite datum i vrijeme završetka posla:</p>
        
        <div class="form-grid">
            <div class="form-group">
                <label for="leave_start">Datum:</label>
                <input type="date" id="leave_start" name="leave_start" class="custom-date">
            </div>
            <div class="form-group">
                <label for="taking-time">Vrijeme:</label>
                <input type="time" id="taking-time" name="taking-time" min="00:00" max="23:59" required>

            </div>
        </div>
        
        <div class="button-group d-flex justify-content-between">
            <button type="button" class="custom-add-btn" onclick="submitForm()">Spremi</button>
            <button type="button" class="custom-delete-btn" onclick="closePopup()">Otkaži</button>
        </div>
    </div>
</div>

            </div>
        </div>



        <div id="popup" class="popup">
    <div class="popup-content">
        
        <div class="kupac-details">
            <h2 hidden  id="customer-id" > </h2>

            <h2> <strong> Podaci o poslu </strong></h2>
            <p>---------------------------------------------------- </p>
            <ul>
                <li><strong>Kupac: </strong><span id="customer-first-name"  ></span> <span id="customer-last-name"  ></span></li>
                <li><strong>Email:</strong> <span id="customer-email"></span></li>
                <li><strong>Telefon:</strong> <span id="customer-phone"></span></li>
                <li><strong>Grad:</strong> <span id="customer-city"></span></li>
                <li><strong>Adresa:</strong> <span id="customer-adress"></span></li>
                <li><strong>Objekat:</strong> <span id="customer-objekt"></span></li>
                <li hidden><strong>Radnik zadužen za posao:</strong> <span id="customer-employee-name"></span> <span id="customer-employee-surname"></span></li>
                <li><strong>Zaduženi automobil: </strong> <span id="customer-car-name" ></span> <span id="customer-car-model" ></span></li>
                <br>
                <li><strong> <span id="customer-service" ></span></strong></li>
                <li id="osobe-product-name"><strong>Osobe:</strong> <ul id="customer-product-name"></ul></li>
                <div id="customer-product-food">
                    <li><strong>Hrana:</strong> <span id="customer-product-food-name"></span></li>
                    <li><strong>Tip:</strong> <span id="customer-product-food-type"></span></li>
                    <li><strong>Opis:</strong> <span id="customer-product-food-description"></span></li>
                </div>
            </ul>
        </div>
        <span class="close" id="close-popup">&times;</span>
    </div>
</div>

<script>
        
        getUniqueValuesFromColumn()
        // sortiranje po danu

        function getUniqueValuesFromColumn() {

var unique_col_values_dict = {}

allFilters = document.querySelectorAll(".table-filter")
allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute("col-index");
    const rows = document.querySelectorAll("#emp-table > tbody > tr")

    rows.forEach((row) => {
        cell_value = row.querySelector("td:nth-child("+col_index+")").innerHTML;
        if (col_index in unique_col_values_dict) {

            if (unique_col_values_dict[col_index].includes(cell_value)) {

            } else {
                unique_col_values_dict[col_index].push(cell_value)

            }


        } else {
            unique_col_values_dict[col_index] = new Array(cell_value)
        }
    });

    
});



updateSelectOptions(unique_col_values_dict)

};


function updateSelectOptions(unique_col_values_dict) {
allFilters = document.querySelectorAll(".table-filter")

allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute('col-index')

    unique_col_values_dict[col_index].forEach((i) => {
        filter_i.innerHTML = filter_i.innerHTML + `\n<option value="${i}">${i}</option>`
    });

});
};


function filter_rowss() {
allFilters = document.querySelectorAll(".table-filter")
var filter_value_dict = {}

allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute('col-index')

    value = filter_i.value
    if (value != "all") {
        filter_value_dict[col_index] = value;
    }
});

var col_cell_value_dict = {};

const rows = document.querySelectorAll("#emp-table tbody tr");
rows.forEach((row) => {
    var display_row = true;

    allFilters.forEach((filter_i) => {
        col_index = filter_i.parentElement.getAttribute('col-index')
        col_cell_value_dict[col_index] = row.querySelector("td:nth-child(" + col_index+ ")").innerHTML
    })

    for (var col_i in filter_value_dict) {
        filter_value = filter_value_dict[col_i]
        row_cell_value = col_cell_value_dict[col_i]
        
        if (row_cell_value.indexOf(filter_value) == -1 && filter_value != "all") {
            display_row = false;
            break;
        }


    }

    if (display_row == true) {
        row.style.display = "table-row"

    } else {
        row.style.display = "none"

    }





})

}

// dugmad za filterovanje po service

function filterRowsByButton(button) {
    selectedService = button.getAttribute("data-filter");

    document.querySelectorAll(".service-filter-btn").forEach((btn) => {
        btn.classList.remove("active");
    });
    button.classList.add("active");

    filter_rows();
}

function filter_rows() {
    const allFilters = document.querySelectorAll(".table-filter");
    const filter_value_dict = {};

    allFilters.forEach((filter_i) => {
        const col_index = filter_i.parentElement.getAttribute("col-index");
        const value = filter_i.value;
        if (value !== "all") {
            filter_value_dict[col_index] = value;
        }
    });

    const rows = document.querySelectorAll("#emp-table tbody tr");

    rows.forEach((row) => {
        let display_row = true;

        const col_cell_value_dict = {};
        allFilters.forEach((filter_i) => {
            const col_index = filter_i.parentElement.getAttribute("col-index");
            col_cell_value_dict[col_index] = row.querySelector(
                "td:nth-child(" + col_index + ")"
            ).innerHTML;
        });

        for (const col_i in filter_value_dict) {
            const filter_value = filter_value_dict[col_i];
            const row_cell_value = col_cell_value_dict[col_i];

            if (
                row_cell_value.indexOf(filter_value) === -1 &&
                filter_value !== "all"
            ) {
                display_row = false;
                break;
            }
        }

        const serviceValue = row.querySelector("td:nth-child(4)").innerHTML; 
        if (
            selectedService !== "all" &&
            serviceValue.indexOf(selectedService) === -1
        ) {
            display_row = false;
        }

        row.style.display = display_row ? "table-row" : "none";
    });
}

// modal for done jobs

function showPopup(employeeId, employeeName, employeeLastName) {
        document.getElementById('customerId').value = employeeId;
        document.getElementById('employeeName').innerText = employeeName;
        document.getElementById('employeeLastName').innerText = employeeLastName;
        document.getElementById('modal').style.display = "block";
    }
    function closePopup() {
        document.getElementById('modal').style.display = "none";
    }
    function submitForm() {
        let leave_startInput = document.getElementById('leave_start').value;
        let taking_timeInput = document.getElementById('taking-time').value;

            document.getElementById('leave_startDate').value = leave_startInput;
            document.getElementById('taking-timeDate').value = taking_timeInput;

            document.getElementById('deleteForm').submit(); 
        
    }
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('leave_start').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                submitForm();
            }
        });
    });

    //vrijeme
    function setCurrentTime() {
      const timeInput = document.getElementById('taking-time');
      const dateInput = document.getElementById('leave_start');
      const now = new Date();

      const year = now.getFullYear();
      const month = String(now.getMonth() + 1).padStart(2, '0'); 
      const day = String(now.getDate()).padStart(2, '0');
      const hours = String(now.getHours()).padStart(2, '0');
      const minutes = String(now.getMinutes()).padStart(2, '0');

      const currentTime = `${hours}:${minutes}`;
      const currentDate = `${year}-${month}-${day}`;

      dateInput.value = currentDate; 
      timeInput.value = currentTime; 
    }

    setCurrentTime();


    // popUp
    document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popup");
    const closeBtn = document.getElementById("close-popup");

    function showPopupp(customer) {

        document.getElementById("osobe-product-name").style.display = "block";  // Show the person section
        document.getElementById("customer-product-food").style.display = "block";

        document.getElementById("customer-id").textContent = customer.jobs_id;
        document.getElementById("customer-first-name").textContent = customer.fist_name;
        document.getElementById("customer-last-name").textContent = customer.last_name;
        document.getElementById("customer-email").textContent = customer.email;
        document.getElementById("customer-phone").textContent = customer.phone_number;
        //document.getElementById("customer-description").textContent = customer.customer_description;
        document.getElementById("customer-adress").textContent = customer.adress;
        document.getElementById("customer-city").textContent = customer.city;
        document.getElementById("customer-objekt").textContent = customer.objekat;
        document.getElementById("customer-employee-name").textContent = customer.employee_name;
        document.getElementById("customer-employee-surname").textContent = customer.employee_last_name;
        document.getElementById("customer-car-name").textContent = customer.car_name;
        document.getElementById("customer-car-model").textContent = customer.car_model;
        document.getElementById("customer-service").textContent = customer.service;
        //document.getElementById("customer-price").textContent = customer.price;

        const produktOsobaNames = customer.produkt_osoba_names;
        const productNameContainer = document.getElementById("customer-product-name");
        productNameContainer.innerHTML = ''; 

        if (produktOsobaNames) {
            const productNamesArray = produktOsobaNames.split(',');
            productNamesArray.forEach(function(name) {
                const li = document.createElement('li');
                li.textContent = name.trim(); 
                productNameContainer.appendChild(li);
            });
            document.getElementById("customer-product-food").style.display = "none";
        } else{
            document.getElementById("osobe-product-name").style.display = "none";
            document.getElementById("customer-product-food-name").textContent = customer.product_food_name;
            document.getElementById("customer-product-food-type").textContent = customer.product_food_type;
            document.getElementById("customer-product-food-description").textContent = customer.product_food_description;
            
            
        }
        
        popup.style.display = "block";
    }

    document.querySelectorAll(".view-customer-btn").forEach(function(button) {
        button.addEventListener("click", function() {
            const employee = JSON.parse(this.getAttribute("data-customer"));
            showPopupp(employee);  
        });
    });

    closeBtn.onclick = function() {
        popup.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }
});
    
    </script>