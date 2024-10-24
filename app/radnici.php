
  
  <style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #0d1017;
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
            z-index: 999;
        }

        /* Popup content */
        .popup-content {
            background-color: #171c22;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            /*border: 1px solid #888;*/
            width: 80%; /* Could be more or less, depending on screen size */
            margin-top:100px;
            display: flex;
            border-radius: 8px;
            width: 500px;
            text-align: left;
            position: relative;
            color:white;
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
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
        }

        .modal-content {
            background-color: #171c22;
            margin: 15% auto;
            padding: 20px;
            /*border: 1px solid #888;*/
            width: 400px;
            color:white;
            border-radius:20px;
        }

        .modal-content input{
            width: 100%;
            padding: 10px;
            margin-top: 0px;
            border-radius: 5px;
            border: 1px solid white;
            background-color: #0d1017;
            color: #fff;
            font-family: FontAwesome, sans-serif;
            font-weight: normal;
            font-size: 14px;
        }

        .modal-content input:focus{
            border: 1px solid #008cba;
    outline: none;
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

        .alert-success {
    background-color: #4cb050;
    color: white;
    padding: 15px;
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    border-radius: 7px;
    display: none;
    width: 400px;
    text-align: center;
    overflow: hidden;
    border:none;
}

.progress-bar {
    height: 5px;
    background-color: #c9e8c6;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    transition: width linear; /* Smooth transition */
}

@keyframes progress {
    from { width: 100%; }
    to { width: 0%; }
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

    <form id="deleteForm" action="izbrisi_radnika.php" method="POST">
        <input type="hidden" name="employeeId" id="employeeId">
        <input type="hidden" name="deleteReason" id="deleteReason">
    </form>

    <!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Radnik kojeg želite da izbrišete: <br> <span class="modal-name" id="employeeName"></span> <span class="modal-name" id="employeeLastName"></span></p>
        <label for="reason">Razlog brisanja:</label>
        <input type="text" id="reason" name="reason" placeholder="Unesite razlog ovdje" required>
        <div class="button-group d-flex justify-content-between">
            <button type="button" class="custom-add-btn" onclick="submitForm()">Submit</button>
            <button type="button" class="custom-delete-btn" onclick="closePopup()">Cancel</button>
        </div>
    </div>
</div>


</div>
        </div>

        <!-- Pop-up Window -->
<!-- Popup HTML -->
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
    function showPopup(employee) {
        document.getElementById("employee-id").textContent = employee.employee_id;
        document.getElementById("employee-first-name").textContent = employee.first_name;
        document.getElementById("employee-last-name").textContent = employee.last_name;
        document.getElementById("employee-email").textContent = employee.email;
        document.getElementById("employee-phone").textContent = employee.phone_number;
        document.getElementById("employee-position").textContent = employee.position;
        document.getElementById("employee-salary").textContent = "$ " + employee.salary;
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

    // Event listener for all "View" buttons
    document.querySelectorAll(".view-employee-btn").forEach(function(button) {
        button.addEventListener("click", function() {
            const employee = JSON.parse(this.getAttribute("data-employee"));
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

    function showPopup(employeeId, employeeName, employeeLastName) {
        // Set the employee's data to the modal and show it
        document.getElementById('employeeId').value = employeeId;
        document.getElementById('employeeName').innerText = employeeName;
        document.getElementById('employeeLastName').innerText = employeeLastName;
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

    let timeout;
let totalDuration = 5000; // Total time in milliseconds (5 seconds)
let remainingTime = totalDuration; // Time remaining on countdown
let startTime;
let elapsedTime = 0; // Tracks how much time has passed
let isHovered = false; // Tracks hover state
let progressBar, popup;

document.addEventListener("DOMContentLoaded", function() {
    popup = document.getElementById("success-popup");
    progressBar = document.getElementById("progress-bar");

    if (popup) {
        popup.style.display = 'block'; // Show the popup
        progressBar.style.width = '100%'; // Set it to full width immediately
        setTimeout(() => {
            startTimer(remainingTime); // Start the timer and progress bar
        }, 50); // A slight delay for the initial width to take effect.

        popup.addEventListener("mouseenter", pauseTimer);
        popup.addEventListener("mouseleave", resumeTimer);
    }
});

function startTimer(duration) {
    // Start the progress bar and countdown
    startTime = Date.now();
    timeout = setTimeout(hidePopup, duration);
    
    progressBar.style.transitionDuration = duration + 'ms';
    progressBar.style.width = '0%'; // Animate to 0% over the duration
}

function hidePopup() {
    popup.style.display = 'none';
}

function pauseTimer() {
    if (!isHovered) {
        clearTimeout(timeout); // Pause the countdown timer
        elapsedTime += Date.now() - startTime; // Add the time that has passed
        remainingTime = totalDuration - elapsedTime; // Calculate remaining time

        // Freeze the progress bar
        let percentageElapsed = (elapsedTime / totalDuration) * 100;
        progressBar.style.width = (100 - percentageElapsed) + '%';
        progressBar.style.transitionDuration = '0ms'; // Stop bar transition
        isHovered = true;
    }
}

function resumeTimer() {
    if (isHovered) {
        startTimer(remainingTime); // Resume the countdown
        progressBar.style.transitionDuration = remainingTime + 'ms'; // Continue bar
        progressBar.style.width = '0%'; // Animate to 0% over remaining time
        isHovered = false;
    }
}

    </script>