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
    background-color: #132650;
    padding: 10px 10px;
    color: white;
    cursor: pointer;
    text-align: center;
    border-radius: 10px;
    margin-right: 10px;
}

.tab:hover, .tab.active {
    background-color: #23355d;
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
    width: 1200px;
    max-width: 100%;
    height: 600px;
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
    margin: 10px 5px 0px 5px;

}

.status.active {
    background-color: #a2f0b1;
    color: black;
    text-decoration: none;
    font-weight: 200;

}

.status.inactive {
    background-color: #f0a2a2;
    color: black;
    font-weight: 200;
    text-decoration: none;

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

  
  <div class="container-custom-div">
    <div id="na čekanju" class="container-custom active-container-custom">
        <div class="box">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Na čekanju</h2>
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
                  WHERE bolovanje.status='pending'";
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
        
    </tbody>
</table>
</div>
      </div>
    </div>

    
    <div id="odobreno" class="container-custom ">
      <div class="box">
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
        
    </tbody>
</table>
</div>

      </div>
    </div>

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
  </script>

  <?php
  
  require_once "../inc/footer.php";
  
  ?>