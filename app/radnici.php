
  
  <style>
.custom-main-content {
    margin-left: 0px;
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #ebeef5;
    height: 100vh;
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
            z-index: 999;
        }

        .popup-content {
            background-color: white;
            margin: 15% auto; 
            padding: 20px;
            /*border: 1px solid #888;*/
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
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .button-container{
            display: flex; 
            align-items: center;
            justify-content: flex-end; 
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
            width: 400px;
            color:black;
            border-radius:20px;
        }

        .modal-content input{
            width: 100%;
            padding: 10px;
            margin-top: 0px;
            border-radius: 5px;
            border: 1px solid #132650;
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
            text-decoration: none;
            cursor: pointer;
        }

        

.radnik-details strong{
    font-size:16px;
    margin-right:8px;
}

.button-group{
    margin-top:20px;
}

.modal-name{
    font-weight:800;
}

.table-filter {
    border-radius: 5px;
}
.custom-excel-btn{
    margin-left: 10px;
    background-color:#5db85c ;
}
.custom-excel-btn:hover{
    background-color: #2f8f47;
}
.error-message{
    color: #d13517;
        font-size: 12px;
        position: relative;
        top: 100%;
        left: 0;
        font-weight: 800;
        display: none;
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
    
    <div class="custom-main-content content">

    


        <h1 >Lista radnika</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
    <input type="text" id="search-input" placeholder="Pretraži po imenu..." class="custom-search-bar">
    <a href="export.php?what=radnici" class="custom-add-btn custom-excel-btn">Excel</a>
    </div>
    <a href="add_employees.php" class="custom-add-btn">Dodaj</a>
</div>
<div class="scrolling-divv">
    <table class="table custom-table" id="emp-table">
        <thead>
            <tr>
                <th col-index = 1>ID
                
                </th>
                <th col-index = 2>Ime i prezime
                <button onclick="sortTable(1, this)" style="width:30px;margin-left:10px; border: 1px solid white; background: none; color: white; cursor: pointer;">
                <span class="sort-icon">&#x21C5;</span> <!-- Default ↕ symbol -->
            </button>
                </th>
                <th col-index = 3>Email</th>
                <th col-index = 4>Telefon</th>
                <th>Slika</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody id="employee-table">
            <?php 
            $sql = "SELECT * FROM radnici 
                    WHERE is_admin=0";
            $run = $conn->query($sql);
            $results = $run->fetch_all(MYSQLI_ASSOC);

            foreach($results as $result) : ?>
            <tr>
                <td><?php echo $result['employee_id'] ?></td>
                <td><?php echo $result['first_name'] ." ". $result['last_name'] ?></td>
                <td><?php echo $result['email'] ?></td>
                <td><?php echo $result['phone_number'] ?></td>
                <td><img src="<?php echo "../images/" . $result['photo_path'] ?>" alt="img" class="custom-profile-img"></td>
                <td>
                    <div class="button-container">
                        <button id="popupBtn" class="custom-view-btn view-employee-btn" data-employee='<?php echo json_encode($result); ?>'><span class="fas fa-eye"></span></button>
                        <a href="edit_employees.php?id=<?php echo $result['employee_id']; ?>" class="custom-edit-btn"><span class="fas fa-edit"></span></a>
                        <button onclick="showPopup(<?php echo $result['employee_id']; ?>, '<?php echo $result['first_name']; ?>', '<?php echo $result['last_name']; ?>')" class="custom-delete-btn" name="employee_id" value="<?php echo $result['employee_id']; ?>"><span class="fas fa-trash"></span></button>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form  id="deleteForm" action="izbrisi_radnika.php" method="POST">
        <input type="hidden" name="employeeId" id="employeeId">
        <input type="hidden" name="deleteReason" id="deleteReason">
    </form>

<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Radnik kojeg želite da izbrišete: <br> 
        <span class="modal-name" id="employeeName"></span> 
        <span class="modal-name" id="employeeLastName"></span></p>
        <label for="reason">Razlog brisanja:</label>
        <input type="text" id="reason" name="reason" placeholder="Unesite razlog ovdje" required>
        <span id="error-message" class="error-message">Razlog brisanja je obavezan</span>
        <div class="button-group d-flex justify-content-between">
            <button type="button" class="custom-add-btn" onclick="submitForm()">Submit</button>
            <button type="button" class="custom-delete-btn" onclick="closePopup()">Cancel</button>
        </div>
    </div>
</div>


</div>
        </div>

<div id="popup" class="popup">
    <div class="popup-content">
        <div class="profile-picture">
            <img id="employee-image" src="" alt="">
        </div>
        <div class="radnik-details">
            <h2 id="employee-name"></h2>
            <ul>
                <li><strong>RadnikID:</strong> <span id="employee-id"></span></li>
                <li><strong>Ime:</strong> <span id="employee-first-name"></span></li>
                <li><strong>Prezime:</strong> <span id="employee-last-name"></span></li>
                <li><strong>Email:</strong> <span id="employee-email"></span></li>
                <li><strong>Telefon:</strong> <span id="employee-phone"></span></li>
                <li><strong>Datum rodjenja:</strong> <span id="employee-date-of-birth"></span></li>
                <li><strong>Mjesto rodjenja:</strong> <span id="employee-place-of-birth"></span></li>
                <li><strong>Spol:</strong> <span id="employee-gender"></span></li>
                <li><strong>JMBG:</strong> <span id="employee-jmbg"></span></li>
                <li><strong>Adresa:</strong> <span id="employee-address"></span></li>
                <li><strong>Datum zaposlenja:</strong> <span id="employee-date-of-employment"></span></li>
                <li><strong>Status:</strong> <span id="employee-status"></span></li>
                <li><strong>Pozicija:</strong> <span id="employee-position"></span></li>
                <li><strong>Plata:</strong> <span id="employee-salary"></span></li>
                <li><strong>Bilješke:</strong> <span id="employee-notes"></span></li>
            </ul>
        </div>
        <span class="close" id="close-popup">&times;</span>
    </div>
</div>


<script>
        document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popup");
    const closeBtn = document.getElementById("close-popup");

    function showPopup(employee) {
        document.getElementById("employee-id").textContent = employee.employee_id;
        document.getElementById("employee-first-name").textContent = employee.first_name;
        document.getElementById("employee-last-name").textContent = employee.last_name;
        document.getElementById("employee-email").textContent = employee.email;
        document.getElementById("employee-phone").textContent = employee.phone_number;
        document.getElementById("employee-position").textContent = employee.position;
        document.getElementById("employee-salary").textContent = employee.salary + " KM";
        document.getElementById("employee-image").src = "../images/" + employee.photo_path;

        document.getElementById("employee-date-of-birth").textContent = employee.date_of_birth;
        document.getElementById("employee-place-of-birth").textContent = employee.place_of_birth;
        document.getElementById("employee-gender").textContent = employee.gender;
        document.getElementById("employee-jmbg").textContent = employee.jmbg;
        document.getElementById("employee-address").textContent = employee.adress;
        document.getElementById("employee-date-of-employment").textContent = employee.date_of_employment;
        document.getElementById("employee-status").textContent = employee.status;
        document.getElementById("employee-notes").textContent = employee.notes;

        popup.style.display = "block";
    }

    document.querySelectorAll(".view-employee-btn").forEach(function(button) {
        button.addEventListener("click", function() {
            const employee = JSON.parse(this.getAttribute("data-employee"));
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



        document.getElementById('search-input').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#employee-table tr');

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

    function showPopup(employeeId, employeeName, employeeLastName) {
        document.getElementById('employeeId').value = employeeId;
        document.getElementById('employeeName').innerText = employeeName;
        document.getElementById('employeeLastName').innerText = employeeLastName;
        document.getElementById('modal').style.display = "block";
    }

    function closePopup() {
        document.getElementById('modal').style.display = "none";
        document.getElementById('reason').value = ''; // Clear input field
    document.getElementById('error-message').style.display = 'none';
    }

    function submitForm() {
        let reasonInput = document.getElementById('reason').value.trim();
        let errorMessage = document.getElementById('error-message');

        if (reasonInput !== "") {
            document.getElementById('deleteReason').value = reasonInput;
            console.log("Submitting form with reason: " + reasonInput); 
            errorMessage.style.display = 'none';
            document.getElementById('deleteForm').submit(); 
        } else {
            errorMessage.style.display = 'block';
            //alert('Please provide a reason for deleting.');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('reason').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                submitForm();
            }
        });
    });

    

// sortiranje 

function sortTable(columnIndex, button) {
    const table = document.getElementById("emp-table");
    const tbody = document.getElementById("employee-table");
    const rows = Array.from(tbody.rows);
    const icon = button.querySelector(".sort-icon");

    let isAscending = table.getAttribute("data-sort-order") === "asc";

    if (table.getAttribute("data-sort-order") === null) {
        isAscending = true;
    }

    rows.sort((rowA, rowB) => {
        const cellA = rowA.cells[columnIndex].textContent.trim().toLowerCase();
        const cellB = rowB.cells[columnIndex].textContent.trim().toLowerCase();
        
        if (cellA < cellB) return isAscending ? -1 : 1;
        if (cellA > cellB) return isAscending ? 1 : -1;
        return 0;
    });

    table.setAttribute("data-sort-order", isAscending ? "desc" : "asc");

    if (isAscending) {
        icon.innerHTML = "&#9660;";
    } else {
        icon.innerHTML = "&#9650;";
    }

    tbody.innerHTML = "";
    rows.forEach(row => tbody.appendChild(row));
}

    </script>