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
    height: 75vh;
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
    background-color: #171c22;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    overflow-y: auto;
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
    </style>
    
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
        <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
    </div>
    <?php
                  
                  $sql = "SELECT *,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name,
                  bolovanje.status as bolovanje_status
                  FROM `bolovanje` 
                  left join `radnici` on bolovanje.employee_id = radnici.employee_id
                  WHERE bolovanje.status='pending'";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <div class="request waiting d-flex justify-content-between align-items-center mb-3">
        
            <div>
                <p><?php echo $leave['employee_name'] .  " - (". $leave['leave_date'] . " to " . $leave['return_date']. ") " . $leave['days'] . " days " . $leave['bolovanje_status'] ?></p>
            </div>
            <div class="actions">
            <div >
            <a href="../admin/uredi_status_bolovanja.php?id=<?php echo $leave['leave_id']; ?>&status=approved" class="custom-edit-btn" ><span  >Approve</span></a>
            <a href="../admin/uredi_status_bolovanja.php?id=<?php echo $leave['leave_id']; ?>&status=disapproved" class="custom-delete-btn" ><span  >Decline</span></a>

                </div>
            </div>
            
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    
    <!-- Approved Requests -->
    <div id="odobreno" class="container-custom ">
      <div class="box"> <!-- Add inline style -->
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Odobreno</h2>
    <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
</div>
<?php
                  
                  $sql = "SELECT *,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name,
                  bolovanje.status as bolovanje_status
                  FROM `bolovanje` 
                  left join `radnici` on bolovanje.employee_id = radnici.employee_id
                  WHERE bolovanje.status='approved'";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <div class="request approved">
        <p><?php echo $leave['employee_name'] .  " - (". $leave['leave_date'] . " to " . $leave['return_date']. ") " . $leave['days'] . " days " . $leave['bolovanje_status'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Rejected Requests -->
    <div id="odbijeno" class="container-custom">
      <div class="box">
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Odbijeno</h2>
    <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
</div>
<?php
                  
                  $sql = "SELECT *,
                  radnici.first_name as employee_name,
                  radnici.last_name as employee_last_name,
                  bolovanje.status as bolovanje_status
                  FROM `bolovanje` 
                  left join `radnici` on bolovanje.employee_id = radnici.employee_id
                  WHERE bolovanje.status='disapproved'";
                    $run = $conn->query($sql);
                    $results = $run->fetch_all(MYSQLI_ASSOC);
                    
                    foreach($results as $leave) :
                  ?>
        <div class="request rejected">
        <p><?php echo $leave['employee_name'] .  " - (". $leave['leave_date'] . " to " . $leave['return_date']. ") " . $leave['days'] . " days " . $leave['bolovanje_status'] ?></p>
        </div>
        <?php endforeach; ?>
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
  </script>

  <?php
  
  require_once "../inc/footer.php";
  
  ?>