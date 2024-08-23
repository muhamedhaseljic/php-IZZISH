
<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #16171b;
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
    background-color:#16171b;
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
    background-color: #212528;
    vertical-align: middle;
    
}

.custom-table tbody tr:hover td {
    
    background-color: #2b2f30;
    
    
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

    </style>
    
    <div class="custom-main-content">
        <h1 >Lista automobila</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" placeholder="Pretraži po nazivu..." class="custom-search-bar">
                <a href="add_employees.php" class="custom-add-btn">Dodaj</a>
            </div>
            <div class="scrolling-divv">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naziv</th>
                        <th>Model</th>
                        <th>Registracija</th>
                        <th>Kilometraža</th>
                        <th>Godina proizvodnje</th>
						            <th>Radnik</th>                        
                        <th>Akcije</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                  function generateRandomString($length = 25) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }
                
                for($i=1;$i<10;$i++) : ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td>Škoda</td>
                        <td>Oktavia</td>
                        <td>
                            <?php
                                
                              //usage 
                              $myRandomString = generateRandomString(7);
                              echo $myRandomString;
                            ?>
                        </td>
                        <td>

                        <?php
                                $FourDigitRandomNumber = mt_rand(111111,999999);
                                echo  $FourDigitRandomNumber ." km";
                            ?>
                        </td>
                        <td><?php
                                $FourDigitRandomNumber = mt_rand(10,23);
                                echo "20". $FourDigitRandomNumber ." godina.";
                            ?></td>
						<td>Muharem Ređepović</td>
                        <td>
                            <button class="custom-view-btn"><span class="fas fa-eye"></span></button>
                            <button class="custom-edit-btn"><span class="fas fa-edit "></span></button>
                            <button class="custom-delete-btn"><span class="fas fa-trash "></span></button>
                        </td>
                    </tr>
                    <?php endfor; ?>
                    <!-- Repeat for other entries -->
                </tbody>
            </table>
            </div>
        </div>