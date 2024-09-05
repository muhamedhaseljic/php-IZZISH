<?php

require_once "config/config.php";

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
    scrollbar-color: white #0d1017;
    padding-right:5px;
}
        /* Pop-up styling */


        /* Styling for the picture */
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

        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Semi-transparent background */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 300px;
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
    </style>
    
    <div class="custom-main-content">
        <h1 >Employees List</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
    <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
    <a href="add_employees.php" class="custom-add-btn">Add</a>
</div>
<div class="scrolling-divv">
    <table class="table custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime i prezime</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Pozicija</th>
                <th>Plata</th>                        
                <th>Slika</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody id="employee-table">
            <?php 
            // Fetch all employees from the database
            $sql = "SELECT * FROM radnici";
            $run = $conn->query($sql);
            $results = $run->fetch_all(MYSQLI_ASSOC);

            foreach($results as $result) : ?>
            <tr>
                <td><?php echo $result['employee_id'] ?></td>
                <td><?php echo $result['first_name'] ." ". $result['last_name'] ?></td>
                <td><?php echo $result['email'] ?></td>
                <td><?php echo $result['phone_number'] ?></td>
                <td><?php echo $result['position'] ?></td>
                <td>$ <?php echo $result['salary'] ?></td>
                <td><img src="<?php echo "images/" . $result['photo_path'] ?>" alt="img" class="custom-profile-img"></td>
                <td>
                    <div class="button-container">
                        <button id="popupBtn" class="custom-view-btn"><span class="fas fa-eye"></span></button>
                        <a href="edit_employees.php?id=<?php echo $result['employee_id']; ?>" class="custom-edit-btn"><span class="fas fa-edit"></span></a>
                            <button onclick="showPopup(<?php echo $result['employee_id']; ?>, '<?php echo $result['first_name']; ?>')" class="custom-delete-btn" name="employee_id" value="<?php echo $result['employee_id']; ?>"><span class="fas fa-trash"></span></button>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form id="deleteForm" action="izbrisi_radnika.php" method="POST">
        <input type="hidden" name="employeeId" id="employeeId">
        <input type="hidden" name="deleteReason" id="deleteReason">
    </form>

    <!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Do you really want to delete <span id="employeeName"></span>?</p>
        <label for="reason">Reason for deletion:</label>
        <input type="text" id="reason" name="reason" placeholder="Enter reason here" required>
        <div class="button-group">
            <button type="button" onclick="submitForm()">Submit</button>
            <button type="button" onclick="closePopup()">Cancel</button>
        </div>
    </div>
</div>


</div>
        </div>

        <!-- Pop-up Window -->
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
        // Get the popup element
        var popup = document.getElementById("popup");

        // Get the button that opens the popup
        var btn = document.getElementById("popupBtn");

        // Get the <span> element that closes the popup
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the popup 
        btn.onclick = function() {
            popup.style.display = "block";
        }

        // When the user clicks on <span> (x), close the popup
        span.onclick = function() {
            popup.style.display = "none";
        }

        // When the user clicks anywhere outside of the popup, close it
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }

        document.getElementById('search-input').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#employee-table tr');

        rows.forEach(row => {
            const nameCell = row.querySelector('td:nth-child(2)'); // Column for 'Ime i prezime'
            const name = nameCell.textContent.toLowerCase();

            // Check if the name starts with the search input
            if (name.startsWith(searchValue)) {
                row.style.display = ''; // Show the row
            } else {
                row.style.display = 'none'; // Hide the row
            }
        });
    });

    function showPopup(employeeId, employeeName) {
        // Set the employee's data to the modal and show it
        document.getElementById('employeeId').value = employeeId;
        document.getElementById('employeeName').innerText = employeeName;
        document.getElementById('modal').style.display = "block";
    }

    function closePopup() {
        // Hide the modal
        document.getElementById('modal').style.display = "none";
    }

    function submitForm() {
        // Get the reason input value
        let reasonInput = document.getElementById('reason').value.trim();

        // Check if the reason input is filled
        if (reasonInput !== "") {
            // Set the reason in the form and submit it
            document.getElementById('deleteReason').value = reasonInput;
            console.log("Submitting form with reason: " + reasonInput); // Debugging log
            document.getElementById('deleteForm').submit(); // Submit form via POST
        } else {
            // Show an alert if the reason input is empty
            alert('Please provide a reason for deleting.');
        }
    }

    // Event listener for form submission using Enter key in the input
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('reason').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                submitForm();
            }
        });
    });
    </script>