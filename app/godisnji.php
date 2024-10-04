
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
.content {
    width: 100%; /* Ensures full width of the content area */
    display: flex; 
    justify-content: flex-start; /* Align left */
    align-items: flex-start; /* Align top */
    margin-top: 60px; /* Space below the fixed tabs */
}

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
    width: 1400px; /* Set to a larger fixed width */
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
    flex-direction: column;
    margin-top: 10px;
}

.actions button {
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
    </style>
    
    <div class="custom-main-content">
      <h1>Godišnji odmor</h1>
    <div class="tabs">
    <div class="tab active" onclick="showContainer('na čekanju')">NA ČEKANJU</div>
    <div class="tab" onclick="showContainer('odobreno')">ODOBRENO</div>
    <div class="tab" onclick="showContainer('odbijeno')">ODBIJENO</div>
  </div>

  <!-- Content (vacation requests) -->
  
  <div class="content">
    <!-- Waiting Requests -->
    <div id="na čekanju" class="container-custom active-container-custom">
      <div class="box">
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Na čekanju</h2>
    <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
</div>
        <div class="request waiting d-flex justify-content-between align-items-center mb-3">
            <div>
          <p>Michael Johnson - 2024-10-15 to 2024-10-20</p>
          <p>Michael Johnson - 2024-10-15 to 2024-10-20</p>
          </div>
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

    
    <!-- Approved Requests -->
    <div id="odobreno" class="container-custom ">
      <div class="box"> <!-- Add inline style -->
      <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Odobreno</h2>
    <input type="text" id="search-input" placeholder="Search name..." class="custom-search-bar">
</div>
        <div class="request approved">
          <p>John Doe - 2024-10-05 to 2024-10-10</p>
        </div>
        <div class="request approved">
          <p>Jane Smith - 2024-09-20 to 2024-09-25</p>
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