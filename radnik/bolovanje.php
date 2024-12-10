<?php

require_once "../classes/Bolovanje.php";

?>

<style>
.custom-main-content {
    margin-left: 0px;
    width: 100%;
    padding: 80px;
    padding-top:20px;
    background-color: #ebeef5;
    height: 100vh;
    padding-bottom:0px;    
    display: flex;
    justify-content: center;
    
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
    border-spacing: 0 10px; 
    
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
    background-color: #132650;
    border: none; 
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
    color:black;
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
    border: none;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
}
.custom-delete-btn:hover{
    background-color: #ba383c;
    color:white;
    text-decoration: none;
}

.custom-main-content h1{
    color:#132650;
    margin-bottom:20px;
}
.scrolling-divv{
    overflow-y: scroll;
    max-height: 55vh; 
    box-sizing: border-box;
    width: 100%;
    scrollbar-width: thin;
    scrollbar-color: #132650 #ebeef5;
    padding-right:5px;
}
.tabs {
    width: auto;
    display: flex;
    position: fixed;
    top: 0;
    margin-top: 100px; 
}

.tab {
    background-color: white;
    padding: 10px 10px;
    color: black;
    cursor: pointer;
    text-align: center;
    border-radius: 10px;
    margin-right: 10px;
}



.tab.active {
    background-color: #132650;
    color: white;
}

.container-custom {
    width: 100%; 
    display: none; 
    justify-content: flex-start; 
    align-items: flex-start; 
    padding-top: 100px;
}

.active-container-custom {
    display: flex; 
}

.box {
    width: 1100px; 
    max-width: 100%; 
    height: 550px;
    background-color: #ebeef5;
    border-radius: 10px;
    
    color: white;
    margin: 0; 
}

.box h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #132650;
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
    margin-bottom: 5px; 
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
    background-color:#132650;
    position: sticky;
    top: 0;
    padding: 15px;
    text-align: left;
    padding-right: 0;
    color: white;
    font-weight: bold;
    border: 1px solid #132650;
    
    
    
}

 .styled-table td {
    padding: 15px;
    text-align: left;
    padding-right: 0;
    border-bottom: 1px solid #343a40;
}

.styled-table tbody tr {
    background-color: white;
    color:black;
}
.styled-table tbody tr td:first-child {
    border-left: 1px solid #343a40;
}

.styled-table tbody tr td:last-child {
    border-right: 1px solid #343a40;
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
    margin: 10px 5px 0px 0px;

}

.status.active {
    background-color: #a2f0b1;
    color: black;
    text-decoration: none;
    font-weight: 200;

}

.status.inactive {
    background-color: #ed484d;
    color: white;
    font-weight: 200;
    text-decoration: none;

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
.form-group:last-child {
    align-items: end;
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
    
    <div class="custom-main-content content">
        <div>
        <h1>Bolovanje</h1>
        <div class="tabs">
            <div class="tab active" onclick="showContainer('na čekanju')">NA ČEKANJU</div>
            <div class="tab" onclick="showContainer('odobreno')">ODOBRENO</div>
            <div class="tab" onclick="showContainer('odbijeno')">ODBIJENO</div>
        </div>
        <?php $employee_data = $radnik->get_employee_data() ?>
        <?php $radnik_id = $employee_data['employee_id'] ?>
  
  <div class="container-custom-div">
    <div id="na čekanju" class="container-custom active-container-custom">
        <div class="box">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Na čekanju</h2>
        <button onclick="showPopup(<?php echo $radnik_id ?>, '<?php echo $employee_data['first_name']; ?>', '<?php echo $employee_data['last_name']; ?>')" class="custom-add-btn" name="employee_id" value="<?php echo $employee_data['employee_id']; ?>"> <span> Add </span> </button>
        </div>
    <div class="scrolling-divv" >
    <table class="styled-table">
    <thead>
        <tr>

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
                  WHERE bolovanje.status='pending' && bolovanje.employee_id = $radnik_id";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <tr>

            <td><?php echo $leave['leave_date'] ?></td>
            <td><?php echo $leave['return_date'] ?></td>
            <td><?php echo $leave['days'] ?></td>
            <td><?php echo $leave['created_date'] ?></td>
            <td>
                <div>
            <a href="" class="status inactive" ><span  >Cancel</span></a>
            <a href="" class="status active" ><span  >Edit</span></a>
        </div></td>
        </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>
<form id="deleteForm" action="dodaj_bolovanje.php" method="POST">
        <input type="hidden" name="employeeId" id="employeeId">
        <input type="hidden" name="deleteReason" id="deleteReason">
        <input type="hidden" name="leave_startDate" id="leave_startDate">
        <input type="hidden" name="leave_endDate" id="leave_endDate">
    </form>
      <div id="modal" class="modal">
    <div class="modal-content">
    <span class="close" onclick="closePopup()">&times;</span><br>
    <p><span hidden class="modal-name" id="employeeName"></span>
        <span hidden class="modal-name" id="employeeLastName"></span> 
        Unesite datum početka i kraja bolovanja:</p>
        
        <div class="form-grid">
            <div class="form-group">
                <label for="leave_start">OD:</label>
                <input type="date" id="leave_start" name="leave_start" class="custom-date">
            </div>
            <div class="form-group">
                <label for="leave_end">DO:</label>
                <input type="date" id="leave_end" name="leave_end" class="custom-date">
            </div>
        </div>
        
        <div class="button-group d-flex justify-content-between">
            <button type="button" class="custom-add-btn" onclick="submitForm()">Submit</button>
            <button type="button" class="custom-delete-btn" onclick="closePopup()">Cancel</button>
        </div>
    </div>
</div>
</div>
      </div>
    </div>

    
    <div id="odobreno" class="container-custom ">
      <div class="box">
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Odobreno</h2>
</div>

        <div class="scrolling-divv" >
    <table class="styled-table">
    <thead>
        <tr>
            <th>Početak bolovanja</th>
            <th>Kraj bolovanja</th>
            <th>Dani</th>
            <th>Datum slanja</th>
            <th>Odobrio</th>
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
                  WHERE bolovanje.status='approved' && bolovanje.employee_id = $radnik_id";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <tr>
            <td><?php echo $leave['leave_date'] ?></td>
            <td><?php echo $leave['return_date'] ?></td>
            <td><?php echo $leave['days'] ?></td>
            <td><?php echo $leave['created_date'] ?></td>
            <td><?php echo $leave['confirmed_by'] ?></td>
        </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>
</div>

      </div>
    </div>

    <div id="odbijeno" class="container-custom">
      <div class="box">
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Odbijeno</h2>
</div>
<div class="scrolling-divv" >
    <table class="styled-table">
    <thead>
        <tr>

            <th>Početak bolovanja</th>
            <th>Kraj bolovanja</th>
            <th>Dani</th>
            <th>Datum slanja</th>
            <th>Odbio</th>
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
                  WHERE bolovanje.status='disapproved' && bolovanje.employee_id=$radnik_id";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <tr>
            <td><?php echo $leave['leave_date'] ?></td>
            <td><?php echo $leave['return_date'] ?></td>
            <td><?php echo $leave['days'] ?></td>
            <td><?php echo $leave['created_date'] ?></td>
            <td><?php echo $leave['confirmed_by'] ?></td>
        </tr>
        <?php endforeach; ?>
        
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
    const containers = document.querySelectorAll('.container-custom');
    containers.forEach(container => {
        container.classList.remove('active-container-custom');
    });

    const activeContainer = document.getElementById(containerId);
    if (activeContainer) {
        activeContainer.classList.add('active-container-custom');
    }

    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });
    const activeTab = Array.from(tabs).find(tab => tab.textContent.toLowerCase() === containerId);
    if (activeTab) {
        activeTab.classList.add('active');
    }
}

// modal for adding leave
function showPopup(employeeId, employeeName, employeeLastName) {
        document.getElementById('employeeId').value = employeeId;
        document.getElementById('employeeName').innerText = employeeName;
        document.getElementById('employeeLastName').innerText = employeeLastName;
        document.getElementById('modal').style.display = "block";
    }
    function closePopup() {
        document.getElementById('modal').style.display = "none";
    }
    function submitForm() {
        let leave_startInput = document.getElementById('leave_start').value;
        let leave_endInput = document.getElementById('leave_end').value;
            document.getElementById('leave_startDate').value = leave_startInput;
            document.getElementById('leave_endDate').value = leave_endInput;
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
  </script>

 