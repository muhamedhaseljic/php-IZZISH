
    <style>
.custom-main-content {
    margin-left: 260px; /* Space for the sidebar */
    padding: 20px;
    background-color: #222;
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
    background-color: #232355;

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
    background-color: #333;
    
}

.custom-profile-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.custom-add-btn, .custom-edit-btn, .custom-delete-btn {
    background-color: #444;
    border: none;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
    color: white;
}

.custom-add-btn:hover, .custom-edit-btn:hover, .custom-delete-btn:hover {
    background-color: #555;
}

.custom-add-btn {
    padding: 10px 20px;
    color: #fff;
    font-weight: bold;
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
    </style>
    
    <div class="custom-main-content">
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
                        <th>Role</th>
                        <th>Gender</th>
                        <th>Image</th>
                        <th>CreatedAt</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>17</td>
                        <td>Edis Vrtagic</td>
                        <td>edis@gmail.com</td>
                        <td>Administrator</td>
                        <td>Male</td>
                        <td><img src="path-to-image.jpg" alt="Edis" class="custom-profile-img"></td>
                        <td>28/02/2023 12:07:33</td>
                        <td>
                            <button class="custom-edit-btn">✏️</button>
                            <button class="custom-delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Edis Vrtagic</td>
                        <td>edis@gmail.com</td>
                        <td>Administrator</td>
                        <td>Male</td>
                        <td><img src="path-to-image.jpg" alt="Edis" class="custom-profile-img"></td>
                        <td>28/02/2023 12:07:33</td>
                        <td>
                            <button class="custom-edit-btn">✏️</button>
                            <button class="custom-delete-btn">❌</button>
                        </td>
                    </tr>
                    <!-- Repeat for other entries -->
                </tbody>
            </table>
        </div>