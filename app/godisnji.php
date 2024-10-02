
<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 60px;
    padding-top:20px;
    background-color: #0d1017;
    min-height: 100vh;
    padding-bottom:0px;
    display: flex;
    justify-content: center;
      align-items: center;
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
.tabs {
      width: 80%;
      display: flex;
      justify-content: center;
      background-color: #333;
      position: fixed;
      top: 0;
      margin-top:50px;
      
    }

    .tab {
      padding: 15px 20px;
      color: white;
      cursor: pointer;
      text-align: center;
      flex: 1;
    }

    .tab:hover, .tab.active {
      background-color: #555;
    }

    /* Main content area */
    .content {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px; /* To create space below the fixed tabs */
    }

    /* Container Section */
    .container {
      display: none;
      justify-content: center;
      align-items: flex-start;
      gap: 20px;
      padding-top: 20px;
    }

    .active-container {
      display: flex;
    }

    .box {
      width: 1000px;
      height: 600px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      overflow-y: auto;
    }

    .box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .request {
      background-color: #e0e0e0;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    .request p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .actions button {
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
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
    </style>
    
    <div class="custom-main-content">
    <div class="tabs">
    <div class="tab active" onclick="showContainer('approved')">Approved</div>
    <div class="tab" onclick="showContainer('waiting')">Waiting</div>
    <div class="tab" onclick="showContainer('rejected')">Rejected</div>
  </div>

  <!-- Content (vacation requests) -->
  <div class="content">
    <!-- Approved Requests -->
    <div id="approved" class="container active-container">
      <div class="box">
        <h2>Approved</h2>
        <div class="request approved">
          <p>John Doe - 2024-10-05 to 2024-10-10</p>
        </div>
        <div class="request approved">
          <p>Jane Smith - 2024-09-20 to 2024-09-25</p>
        </div>
      </div>
    </div>

    <!-- Waiting Requests -->
    <div id="waiting" class="container">
      <div class="box">
        <h2>Waiting</h2>
        <div class="request waiting">
          <p>Michael Johnson - 2024-10-15 to 2024-10-20</p>
          <div class="actions">
            <button class="approve">Approve</button>
            <button class="decline">Decline</button>
          </div>
        </div>
        <div class="request waiting">
          <p>Sarah Brown - 2024-11-01 to 2024-11-07</p>
          <div class="actions">
            <button class="approve">Approve</button>
            <button class="decline">Decline</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Rejected Requests -->
    <div id="rejected" class="container">
      <div class="box">
        <h2>Rejected</h2>
        <div class="request rejected">
          <p>Tom Hanks - 2024-08-10 to 2024-08-15</p>
        </div>
        <div class="request rejected">
          <p>Alice Cooper - 2024-07-25 to 2024-07-30</p>
        </div>
      </div>
    </div>
  </div>
        </div>

        <script>
    function showContainer(tabId) {
      // Remove active class from all tabs
      document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
      // Add active class to the clicked tab
      document.querySelector(`.tab[onclick="showContainer('${tabId}')"]`).classList.add('active');

      // Hide all containers
      document.querySelectorAll('.container').forEach(container => container.classList.remove('active-container'));
      // Show the clicked container
      document.getElementById(tabId).classList.add('active-container');
    }
  </script>