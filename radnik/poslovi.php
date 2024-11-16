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
        .radnik-details {
            display: flex;
            flex-direction: column;
        }

        .radnik-details h2 {
            margin-top: 0;
        }

        .radnik-details ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .radnik-details ul li {
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
    border-radius: 4px;
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
    </style>
    
    <div class="custom-main-content content">
        <h1 >Poslovi u ovoj sedmici</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="text" placeholder="Search city..." class="custom-search-bar">
                    <button class="service-filter-btn active" data-filter="all" onclick="filterRowsByButton(this)">All</button>
                    <button class="service-filter-btn" data-filter="Analiza" onclick="filterRowsByButton(this)">Analiza</button>
                    <button class="service-filter-btn" data-filter="Sanitarna" onclick="filterRowsByButton(this)">Sanitarna</button>
                    <button class="service-filter-btn" data-filter="Deratizacija" onclick="filterRowsByButton(this)">Deratizacija</button>
                </div>
                <a href="add_employees.php" class="custom-add-btn">PDF</a>

            </div>
            <div class="scrolling-divv">
            <table id="emp-table" class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Radnik</th>
                        <th>Telefon</th>
                        <th>Posao</th>
                        <th>Ustanova</th>
                        <th>Grad</th>
                        <th col-index = 7 >Dan
                        <select class="table-filter" onchange="filter_rows()">
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
                   GROUP_CONCAT(CONCAT(produkt_osoba.first_name, ' ', produkt_osoba.last_name) SEPARATOR ', ') AS produkt_osoba_names
                  FROM `kupac` 
                  left join `radnici` on kupac.employee_id = radnici.employee_id
                  left join `produkt_hrana` on kupac.customer_id = produkt_hrana.customer_id
                  left join `produkt_osoba` on kupac.customer_id = produkt_osoba.customer_id
                  where kupac.employee_id = $radnik_id && kupac.day_of_a_week != 'poslovi'
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
                        <button id="popupBtn" class="custom-view-btn"><span class="fas fa-eye"></span></button>
                            <a href="edit_employees.php" class="custom-edit-btn"><span class="fas fa-check "></span></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>

<div id="popup" class="popup">
    <div class="popup-content">
        <div class="profile-picture"><img class="boja-pozadine" src="images/Haseljić Muhamed_pp.jpg"  alt=""> </div> <!-- Placeholder for the picture -->
        <div class="radnik-details">
            <h2>Muhamed Haseljić</h2>
            <ul>
                <li><strong>RadnikID:</strong> int</li>
                <li><strong>Ime:</strong> Muhamed</li>
                <li><strong>Prezime:</strong> Haseljić</li>
                <li><strong>Email:</strong> varchar(255)</li>
                <li><strong>Telefon:</strong> int</li>
                <li><strong>Mjesto_rođenja:</strong> varchar(255)</li>
                <li><strong>Adresa_boravista:</strong> varchar(255)</li>
                <li><strong>Datum_rođenja:</strong> date</li>
                <li><strong>Spol:</strong> varchar(11)</li>
                <li><strong>DatumZaposlenja:</strong> date</li>
                <li><strong>RadnoStanje:</strong> zaposen, zamjena, itd...</li>
                <li><strong>JMBG:</strong> int(13)</li>
                <li><strong>Slika:</strong> varchar(255)</li>
                <li><strong>Biljeske:</strong> varchar(255)</li>
                <li><strong>Plata:</strong> money</li>
                <li><strong>AutoID:</strong> int</li>
                <li><strong>Pozicija:</strong> varchar(255)</li>
            </ul>
        </div>
        <span class="close" id="close-popup">&times;</span>
    </div>
</div>

<script>
        var popup = document.getElementById("popup");

        var btn = document.getElementById("popupBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            popup.style.display = "block";
        }

        span.onclick = function() {
            popup.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
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


function filter_rows() {
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
    </script>