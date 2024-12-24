
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
    background-color:white ;
    vertical-align: middle;
    border-top: 10px solid #ebeef5 ;
    color:black;
    
}

.custom-profile-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
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
            z-index: 999;
        }

        .popup-content {
            background-color: white;
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
            color:black;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            width: 20px;
            height: 20px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
    
    <div class="custom-main-content content">
        <h1 >Završeni poslovi</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" id="search-input" placeholder="Pretraži po imenu..." class="custom-search-bar">
                
            </div>
            <div class="scrolling-divv">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime radnika</th>
                        <th>Posao</th>
                        <th>Grad</th>
                        <th>Vrijeme završetka</th>
                        <th>Auto</th>                        
                        <th>Cijena</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                
                <tbody id="jobs-table">
                <?php 
            $sql = "SELECT obavljeni_poslovi.*,
            kupac.first_name as customer_name,
            kupac.last_name as customer_last_name,
            kupac.email as customer_email,
            kupac.phone_number as customer_phone_number,
            kupac.adress as customer_adress,
            kupac.service as service,
            kupac.city as customer_city,
            kupac.objekat as customer_objekat,
            radnici.first_name as employee_name,
            radnici.last_name as employee_last_name,


            produkt_hrana.name as product_food_name,
            produkt_hrana.type as product_food_type,
            produkt_hrana.description as product_food_description,
             GROUP_CONCAT(CONCAT(produkt_osoba.first_name, ' ', produkt_osoba.last_name) SEPARATOR ', ') AS produkt_osoba_names
            FROM `obavljeni_poslovi` 
            left join `kupac` on kupac.jobs_id = obavljeni_poslovi.jobs_id
            left join `radnici` on radnici.employee_id = kupac.employee_id
            left join `produkt_osoba` on kupac.customer_id = produkt_osoba.customer_id
            left join `produkt_hrana` on kupac.customer_id = produkt_hrana.customer_id
            where kupac.jobs_id !=0
            GROUP BY kupac.customer_id
            ORDER BY obavljeni_poslovi.jobs_id;";
              $run = $conn->query($sql);
              $results = $run->fetch_all(MYSQLI_ASSOC);
              $select_members = $results;

            foreach($results as $result) : ?>
                    <tr>
                        <td><?php echo $result['jobs_id'] ?></td>
                        <td><?php echo $result['employee_name'] ." ". $result['employee_last_name'] ?></td>
                        <td><?php echo $result['service'] ?></td>
						<td><?php echo $result['customer_city'] ?></td>
                        <td><?php echo $result['completition_date'] ?></td>
                        <td><?php echo $result['car_name'] ?></td>
                        <td><?php echo $result['price'] ?></td>
                        <td>
                        <button id="popupBtn" class="custom-view-btn view-customer-btn" data-customer='<?php echo json_encode($result); ?>'>
                            <span class="fas fa-eye"></span></button>
                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>


        <div id="popup" class="popup">
    <div class="popup-content">
        
        <div class="kupac-details">
            <h2 hidden  id="customer-id" > </h2>
            <h2 hidden id="customer-first-name" > </h2>

            <h2 hidden id="customer-last-name" > </h2>
            <h2> <strong> Podaci o završenom poslu </strong></h2>
            <p>---------------------------------------------------- </p>
            <ul>
                <li><strong>Email:</strong> <span id="customer-email"></span></li>
                <li><strong>Telefon:</strong> <span id="customer-phone"></span></li>
                <li><strong>Grad:</strong> <span id="customer-city"></span></li>
                <li><strong>Adresa:</strong> <span id="customer-adress"></span></li>
                <li><strong>Objekat:</strong> <span id="customer-objekt"></span></li>
                <li><strong>Radnik zadužen za posao:</strong> <span id="customer-employee-name"></span> <span id="customer-employee-surname"></span></li>
                <li><strong>Automobil: </strong> <span id="customer-car-name" ></span> <span id="customer-car-model" ></span></li>
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
            document.getElementById('search-input').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#jobs-table tr');

        rows.forEach(row => {
            const nameCell = row.querySelector('td:nth-child(2)'); 
            const name = nameCell.textContent.toLowerCase();

            if (name.startsWith(searchValue)) {
                row.style.display = ''; 
            } else {
                row.style.display = 'none'; 
            }
        });
    });

    // popUp
    document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popup");
    const closeBtn = document.getElementById("close-popup");

    function showPopup(customer) {

        document.getElementById("osobe-product-name").style.display = "block";  // Show the person section
        document.getElementById("customer-product-food").style.display = "block";

        document.getElementById("customer-id").textContent = customer.jobs_id;
        document.getElementById("customer-first-name").textContent = customer.employee_name;
        document.getElementById("customer-last-name").textContent = customer.employee_last_name;
        document.getElementById("customer-email").textContent = customer.customer_email;
        document.getElementById("customer-phone").textContent = customer.customer_phone_number;
        document.getElementById("customer-description").textContent = customer.description;
        document.getElementById("customer-city").textContent = customer.customer_city;
        document.getElementById("customer-adress").textContent = customer.customer_adress;
        document.getElementById("customer-objekat").textContent = customer.customer_objekat;
        document.getElementById("customer-employee-name").textContent = customer.employee_name;
        document.getElementById("customer-employee-surname").textContent = customer.employee_last_name;
        document.getElementById("customer-car-name").textContent = customer.car_name;
        document.getElementById("customer-car-model").textContent = customer.car_model;
        document.getElementById("customer-service").textContent = customer.service;

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
            showPopup(employee);  
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