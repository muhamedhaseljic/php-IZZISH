<?php

require_once "../config/config.php";
require_once "../classes/Automobili.php";

?>
<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #0d1017;
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
    color: white;
    background-color:#171c22;
    border:1px solid white;
}

/* Table Styling */
.custom-table {
    
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px; /* Increased gap between rows */
    
}

.custom-table th, .custom-table td {
    padding: 15px;
    text-align: left;
    color: #fff;
}

thead tr {
    background-color: #272c78;
    

}

.custom-table thead th {
    padding: 15px;
    text-align: left;
    color: #fff;
    background-color: #272c78;
    border: none; /* Remove header cell border */
}

.custom-table tbody tr td:first-child {
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}

.custom-table tbody tr td:last-child {
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

.custom-table thead th:first-child {
    border-top-left-radius: 20px; /* Rounded left corner */
    border-bottom-left-radius: 20px;
}

.custom-table thead th:last-child {
    border-top-right-radius: 20px; /* Rounded right corner */
    border-bottom-right-radius: 20px;
}

tbody tr:last-child {
    border-bottom: none;
}

.custom-table tbody tr td {
    border: none;
    background-color: #171c22 ;
    vertical-align: middle;
    
}

.custom-table tbody tr:hover td {
    
    background-color: #212528;
    
    
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

button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.custom-main-content h1{
    color:white;
    margin-bottom:20px;
}
.scrolling-divv{
    overflow-y: scroll;
    height: 75vh;
    box-sizing: border-box;
    width: 100%;
    scrollbar-width: thin;
    scrollbar-color: white #16171b;
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
}
        .automobil-details {
            display: flex;
            flex-direction: column;
        }

        .automobil-details h2 {
            margin-top: 0;
        }

        .automobil-details ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .automobil-details ul li {
            margin-bottom: 8px;
            font-size: 14px;
        }

        /* Close button */
        .popup {
            display: none; /* Hidden by default */
            position: fixed; 
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7); /* Blurred background effect */
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        /* Popup content */
        .popup-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            margin-top:100px;
            display: flex;
            border-radius: 8px;
            width: 500px;
            text-align: left;
            position: relative;
        }



        /* The close button */
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
        .button-container{
            display: flex; /* Align items horizontally */
            align-items: center; /* Align items vertically */
            justify-content: flex-end; /* Align items to the right */
        }
    </style>
    
    <div class="custom-main-content content">
        <h1 >Lista automobila</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" placeholder="Pretraži po nazivu..." class="custom-search-bar">
                <a href="../admin/dodaj_automobil.php" class="custom-add-btn">Dodaj</a>
            </div>
            <div class="scrolling-divv">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naziv</th>
                        <th>Model</th>
                        <th>Registracija</th>
                        <th>Kilometraža</th>
                        <th>Godina proizvodnje</th>
						            <th>Radnik</th>                        
                        <th>Akcije</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                  
                  $sql = "SELECT automobili.*,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name
                  FROM `automobili` 
                  left join `radnici` on automobili.car_id = radnici.car_id;";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    $select_members = $results;
                    
                    foreach($results as $car) :
                  ?>
                    <tr>
                        <td><?= $car['car_id'] ?></td>
                        <td><?= $car['name'] ?></td>
                        <td><?= $car['model'] ?></td>
                        <td>
                        <?= $car['registration'] ?>
                        </td>
                        <td><?= $car['kilometers'] . " km" ?></td>
                        <td>
                        <?= date("Y",strtotime($car['date_of_production'])) ?>
                        </td>
                        
						<td>
                            <?php

                                if($car['employee_name']){
                                    echo $car['employee_name'] ." ".$car['employee_last_name'];
                                }
                                else{
                                    echo "Nema vozaća";
                                }

                            ?>
                        </td>
                        <td>
                        <div class="button-container">
                        <button id="popupBtn" class="custom-view-btn view-car-btn" data-car='<?php echo json_encode($car); ?>'><span class="fas fa-eye"></span></button>     
                        <a href="../admin/uredi_automobil.php?id=<?php echo $car['car_id']; ?>" class="custom-edit-btn"><span class="fas fa-edit "></span></a>
                        <a href="../admin/obrisi_automobil.php?id=<?php echo $car['car_id']; ?>" class="custom-delete-btn"><span class="fas fa-trash "></span></a>
                        </div>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    <!-- Repeat for other entries -->
                </tbody>
            </table>
            </div>
        </div>

        <div id="popup" class="popup">
    <div class="popup-content">
        
        <div class="automobil-details">
            <h2 hidden id="car-id" > </h2>
            <h2 id="car-name" > </h2>

            
            <ul>
                <li><strong>Model:</strong> <span id="car-model"></span></li>
                <li><strong>Registracija:</strong> <span id="car-registration"></span></li>
                <li><strong>Datum proizvodnje:</strong> <span id="car-date_of_production"></span></li>
                <li><strong>Cijena:</strong> <span id="car-price"></span></li>
                <li><strong>Kilometraža:</strong> <span id="car-kilometers"></span></li>

                <!-- Add more fields as needed -->
            </ul>
        </div>
        <span class="close" id="close-popup">&times;</span>
    </div>
</div>

<script>
        // Get the popup element
        document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popup");
    const closeBtn = document.getElementById("close-popup");

    // Function to show the popup and populate details
    function showPopup(car) {
        document.getElementById("car-id").textContent = car.car_id;
        document.getElementById("car-name").textContent = car.name;
        document.getElementById("car-model").textContent = car.model;
        document.getElementById("car-registration").textContent = car.registration;
        document.getElementById("car-date_of_production").textContent = car.date_of_production;
        document.getElementById("car-price").textContent = car.price;
        document.getElementById("car-kilometers").textContent = car.kilometers;


        
        popup.style.display = "block";
    }

    // Event listener for all "View" buttons
    document.querySelectorAll(".view-car-btn").forEach(function(button) {
        button.addEventListener("click", function() {
            const employee = JSON.parse(this.getAttribute("data-car"));
            showPopup(employee);  // Show the popup with employee details
        });
    });

    // Close the popup when the user clicks on <span> (x)
    closeBtn.onclick = function() {
        popup.style.display = "none";
    }

    // Close the popup when clicking outside of the content
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }
});
</script>