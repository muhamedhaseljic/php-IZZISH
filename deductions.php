
    <style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 100px;
    background-color: #16171b;
    min-height: 100vh;
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
    color: #000;
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
    background-color: #212528;
    vertical-align: middle;
    
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
}
.custom-edit-btn, .custom-delete-btn {
    background-color: #444;
    border: none;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
    color: white;
}

 .custom-edit-btn:hover, .custom-delete-btn:hover {
    background-color: #555;
}


.custom-edit-btn {
    margin-right: 10px;
    color: #00d8ff;
}

.custom-delete-btn {
    color: #ff5252;
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
    </style>
    
    <div class="custom-main-content">
        <h1 >Employees List</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" placeholder="Search name..." class="custom-search-bar">
                <button class="custom-add-btn">Add</button>
            </div>
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Role</th>
                        <th>Gender</th>
                        <th>Image</th>
                        <th>CreatedAt</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Medina Haseljić</td>
                        <td>medina@gmail.com</td>
                        <td>062624571</td>
                        <td>Radni Kmet</td>
                        <td>Female</td>
                        <td><img src="Medina-Haseljic.jpg" alt="Edis" class="custom-profile-img"></td>
                        <td>28/02/2023 12:07:33</td>
                        <td>
                        <button class="custom-delete-btn">👀</button>
                            <button class="custom-edit-btn">✏️</button>
                            <button class="custom-delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Zijad Doglod</td>
                        <td>zijad@gmail.com</td>
                        <td>062624571</td>
                        <td>Kmet</td>
                        <td>Male</td>
                        <td><img src="zijadDoglod.jpg" alt="Edis" class="custom-profile-img"></td>
                        <td>28/02/2023 12:07:33</td>
                        <td>
                            <button class="custom-delete-btn">👀</button>
                            <button class="custom-edit-btn">✏️</button>
                            <button class="custom-delete-btn">❌</button>                            

                        </td>
                    </tr>
                    <!-- Repeat for other entries -->
                </tbody>
            </table>
        </div>