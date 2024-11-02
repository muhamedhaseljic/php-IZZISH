<?php

require_once "../classes/Bolovanje.php";

?>

<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 80px;
    padding-top:20px;
    background-color: #0d1017;
    height: 100vh;
    padding-bottom:0px;    
    display: flex;
    justify-content: center;  /* Center horizontally */
    
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
    background-color:#171c22 ;
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



.custom-edit-btn {
    background-color: #4CAF50;
    color:white;
    
}
.custom-edit-btn:hover{
    background-color: #219426;
    color:white;
    text-decoration: none;
}

.custom-delete-btn {
    background-color: #ed484d;
    color:white;
}
.custom-delete-btn:hover{
    background-color: #ba383c;
    color:white;
    text-decoration: none;
}

.custom-main-content h1{
    color:white;
    margin-bottom:20px;
}
.scrolling-divv{
    overflow-y: scroll;
    max-height: 55vh; 
    box-sizing: border-box;
    width: 100%;
    scrollbar-width: thin;
    scrollbar-color: white #16171b;
    padding-right:5px;
}
.tabs {
    width: auto; /* Allow tabs to fit to content */
    display: flex;
    position: fixed;
    top: 0;
    margin-top: 100px; /* Space for fixed tabs */
}

.tab {
    background-color: #0d1017;
    padding: 10px 10px;
    color: white;
    cursor: pointer;
    text-align: center;
    border-radius: 10px;
    margin-right: 10px;
}

.tab:hover, .tab.active {
    background-color: #171c22;
}

/* Main content area */


.container-custom {
    width: 100%; /* Allow container to fill the space */
    display: none; /* Hide by default */
    justify-content: flex-start; /* Align items left */
    align-items: flex-start; /* Align items at the top */
    padding-top: 100px;
}

.active-container-custom {
    display: flex; /* Show active container */
}

.box {
    width: 1480px; /* Set to a larger fixed width */
    max-width: 100%; /* Ensures it doesn’t exceed the viewport width */
    height: 600px;
    background-color: #0d1017;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    
    color: white;
    margin: 0; /* No margin to ensure it uses full width */
}

/* Headings and Requests */
.box h2 {
    text-align: center;
    margin-bottom: 20px;
    color: white;
}

.request {
    background-color: #e0e0e0;
    padding:5px 5px;
    border-radius: 5px;
    margin-bottom: 15px;
    padding-bottom: 0;
}

.request p {
    margin: 0;
    font-size: 14px;
    color: #555;
}

.actions {
    display: flex;
    flex-direction: column;
    margin-top: 0px;
    padding: 5px;
}

.actions a {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    margin-bottom: 5px; /* Adds space between the buttons */
    font-size: 16px;
}

.approve {
    background-color: #4CAF50;
    color: white;
}

.decline {
    background-color: #f44336;
    color: white;
}

.approved {
    background-color: #DFF0D8;
}

.rejected {
    background-color: #F2DEDE;
}

.waiting {
    background-color: #FCF8E3;
}
.request p{
    font-size:18px;
}
.container-custom-div{
    width: 100%;
}

.styled-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0px;

}

.styled-table thead th{
    background-color: #262c78;
    position: sticky;
    top: 0;
    padding: 15px;
    text-align: left;
    padding-right: 0;
    color: white;
    font-weight: bold;
    border: 1px solid #343a40; /* Existing bottom border */
    
    
    
}

 .styled-table td {
    padding: 15px;
    text-align: left;
    padding-right: 0;
    border: 1px solid #343a40;
}

.styled-table tbody tr {
    background-color: #171c22;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #15171a;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #ddd;
}


.status {
    padding: 5px 10px;
    border-radius: 12px;
    color: #fff;
    font-size: 0.9em;
    font-weight: bold;
    text-decoration: none;
    margin: 10px 5px 0px 5px;

}

.status.active {
    background-color: #a2f0b1;
    color: #1d7d3a;
    text-decoration: none;


}

.status.inactive {
    background-color: #f0a2a2;
    color: #7d1d1d;
    text-decoration: none;

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
            width: 600px;
            
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
.form-group:last-child {
    align-items: end;
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
.custom-date{
    background-color: #333;
    color: #ffffff;
    border: 1px solid #ffffff;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 16px;

    /* Hide the default icon */
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;

    /* Add custom calendar icon */
    background-image: url('https://i.pinimg.com/736x/6e/88/f3/6e88f39cfca6c0f5a09d3326c936f451.jpg'); /* Replace with a path to a white icon */
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 20px 20px;
}

.form-group input:focus{
    border: 1px solid #008cba;
    outline: none;
}


    </style>
    <?php $employee_data = $radnik->get_employee_data() ;
    $employeeID = $employee_data['employee_id']?>
    <div class="custom-main-content content">
        <div>
        <h1>Godišnji odmor</h1>
        <div class="tabs">
            <div class="tab active" onclick="showContainer('na čekanju')">NA ČEKANJU</div>
            <div class="tab" onclick="showContainer('odobreno')">ODOBRENO</div>
            <div class="tab" onclick="showContainer('odbijeno')">ODBIJENO</div>
        </div>

  <!-- Content (vacation requests) -->
  
  <div class="container-custom-div">
    <!-- Waiting Requests -->
    <div id="na čekanju" class="container-custom active-container-custom">
        <div class="box">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Na čekanju</h2>
        <button onclick="showPopup(<?php echo $employeeID; ?>, '<?php echo $employee_data['first_name']; ?>', '<?php echo $employee_data['last_name']; ?>')" class="custom-add-btn" name="employee_id" value="<?php echo $employee_data['employee_id']; ?>"><span>Add</span></button>
    </div>
    <div class="scrolling-divv" >
    <table class="styled-table">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Email</th>
            <th>Početak bolovanja</th>
            <th>Kraj bolovanja</th>
            <th>Dani</th>
            <th>Datum slanja</th>
            <th>Akcije</th>
        </tr>
    </thead>
    
    
    
    <tbody>
    
    
    <?php
                  
                  $sql = "SELECT *,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name,
                  radnici.email as employee_email,
                  bolovanje.status as bolovanje_status
                  FROM `bolovanje` 
                  left join `radnici` on bolovanje.employee_id = radnici.employee_id
                  WHERE bolovanje.status='pending' and radnici.employee_id = $employeeID";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <tr>
            <td><?php echo $leave['employee_name'] . " ". $leave['employee_last_name'] ?></td>
            <td><?php echo $leave['employee_email'] ?></td>
            <td><?php echo $leave['leave_date'] ?></td>
            <td><?php echo $leave['return_date'] ?></td>
            <td><?php echo $leave['days'] ?></td>
            <td><?php echo $leave['created_date'] ?></td>
            <td>
                <div>
            <a href="../admin/uredi_status_bolovanja.php?id=<?php echo $leave['leave_id']; ?>&status=approved" class="status active" ><span  >Approve</span></a>
            <a href="../admin/uredi_status_bolovanja.php?id=<?php echo $leave['leave_id']; ?>&status=disapproved" class="status inactive" ><span  >Decline</span></a>
            </div></td>
        </tr>
        <?php endforeach; ?>
        
        <!-- Add more rows as needed -->
    </tbody>
</table>
<form id="deleteForm" action="dodaj_bolovanje.php" method="POST">
        <input type="hidden" name="employeeId" id="employeeId">
        <input type="hidden" name="deleteReason" id="deleteReason">
    </form>
      <div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Radnik kojeg želite da izbrišete: <br> <span class="modal-name" id="employeeName"></span> <span class="modal-name" id="employeeLastName"></span></p>
        
        <div class="form-grid">
            <div class="form-group">
                <label for="leave_start">OD</label>
                <input type="date" id="leave_start" name="leave_start" class="custom-date">
            </div>
            <div class="form-group">
                <label for="leave_start">DO</label>
                <input type="date" id="leave_start" name="leave_start">
            </div>
        </div>

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
    </div>

    
    <!-- Approved Requests -->
    <div id="odobreno" class="container-custom ">
      <div class="box"> <!-- Add inline style -->
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Odobreno</h2>
    <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
</div>

        <div class="scrolling-divv" >
    <table class="styled-table">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Email</th>
            <th>Početak bolovanja</th>
            <th>Kraj bolovanja</th>
            <th>Dani</th>
            <th>Datum slanja</th>
            <th>Akcije</th>
        </tr>
    </thead>
    <tbody>
    <?php
                  
                  $sql = "SELECT *,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name,
                  radnici.email as employee_email,
                  bolovanje.status as bolovanje_status
                  FROM `bolovanje` 
                  left join `radnici` on bolovanje.employee_id = radnici.employee_id
                  WHERE bolovanje.status='approved'";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <tr>
            <td><?php echo $leave['employee_name'] . " ". $leave['employee_last_name'] ?></td>
            <td><?php echo $leave['employee_email'] ?></td>
            <td><?php echo $leave['leave_date'] ?></td>
            <td><?php echo $leave['return_date'] ?></td>
            <td><?php echo $leave['days'] ?></td>
            <td><?php echo $leave['created_date'] ?></td>
            <td>
                <div>
            <a href="../admin/uredi_status_bolovanja.php?id=<?php echo $leave['leave_id']; ?>&status=disapproved" class="status inactive" ><span  >Decline</span></a>
            </div></td>
        </tr>
        <?php endforeach; ?>
        
        <!-- Add more rows as needed -->
    </tbody>
</table>
</div>

      </div>
    </div>

    <!-- Rejected Requests -->
    <div id="odbijeno" class="container-custom">
      <div class="box">
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Odbijeno</h2>
    <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
</div>
<div class="scrolling-divv" >
    <table class="styled-table">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Email</th>
            <th>Početak bolovanja</th>
            <th>Kraj bolovanja</th>
            <th>Dani</th>
            <th>Datum slanja</th>
            <th>Akcije</th>
        </tr>
    </thead>
    
    
    
    <tbody>
    <?php
                  
                  $sql = "SELECT *,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name,
                  radnici.email as employee_email,
                  bolovanje.status as bolovanje_status
                  FROM `bolovanje` 
                  left join `radnici` on bolovanje.employee_id = radnici.employee_id
                  WHERE bolovanje.status='disapproved'";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <tr>
            <td><?php echo $leave['employee_name'] . " ". $leave['employee_last_name'] ?></td>
            <td><?php echo $leave['employee_email'] ?></td>
            <td><?php echo $leave['leave_date'] ?></td>
            <td><?php echo $leave['return_date'] ?></td>
            <td><?php echo $leave['days'] ?></td>
            <td><?php echo $leave['created_date'] ?></td>
            <td>
                <div>
            <a href="../admin/uredi_status_bolovanja.php?id=<?php echo $leave['leave_id']; ?>&status=approved" class="status active" ><span  >Approve</span></a>
            </div></td>
        </tr>
        <?php endforeach; ?>
        
        <!-- Add more rows as needed -->
    </tbody>
</table>
</div>
      </div>

      
    </div>
  </div>
        </div>
        </div>
        
        <script>
    function showContainer(containerId) {
    // Hide all containers
    const containers = document.querySelectorAll('.container-custom');
    containers.forEach(container => {
        container.classList.remove('active-container-custom');
    });

    // Show the selected container
    const activeContainer = document.getElementById(containerId);
    if (activeContainer) {
        activeContainer.classList.add('active-container-custom');
    }

    // Update active tab
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });
    const activeTab = Array.from(tabs).find(tab => tab.textContent.toLowerCase() === containerId);
    if (activeTab) {
        activeTab.classList.add('active');
    }
}
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
  </script>

  <?php
  
  require_once "../inc/footer.php";
  
  ?>

