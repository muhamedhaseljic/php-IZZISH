
<style>
.custom-main-content {
    margin-left: 0px; 
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #ebeef5;
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
    color: #132650;
    background-color:white;
    border:1px solid #132650;
}

.custom-table {
    
    width: 100%;
    border-collapse: separate;
    border-spacing: 0px; 
    
}

.custom-table th, .custom-table td {
    padding: 15px;
    text-align: left;
    color: #fff;
}

thead tr {
    background-color: #132650;
    position: sticky;
    top: 0;

}

.custom-table thead th {
    padding: 15px;
    text-align: left;
    color: #fff;
    background-color: #132650;
    border: none; 
}

.custom-table tbody tr td:first-child {
    border-top-left-radius: 25px;
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
    border-top: 10px solid #ebeef5 ;
    color:black;
    
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


.custom-main-content h1{
    color:#132650;
    margin-bottom:20px;
}
.scrolling-divv{
    overflow-y: scroll;
    height: 75vh;
    box-sizing: border-box;
    width: 100%;
    scrollbar-width: thin;
    scrollbar-color: #132650 #ebeef5;
    padding-right:5px;
}

    </style>
    
    <div class="custom-main-content content">
        <h1 >Završeni poslovi</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" placeholder="Search name..." class="custom-search-bar">
                
            </div>
            <div class="scrolling-divv">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime radnika</th>
                        <th>Posao</th>
                        <th>Grad</th>
                        <th>Vrijeme završetka</th>
                        <th>Auto</th>                        
                        <th>Cijena</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
            $sql = "SELECT obavljeni_poslovi.*,
            kupac.first_name as customer_name,
            kupac.last_name as customer_last_name,
            kupac.email as customer_email,
            kupac.phone_number as customer_phone_number,
            kupac.adress as customer_adress,
            kupac.service as service,
            kupac.city as customer_city,
            radnici.first_name as employee_name,
            radnici.last_name as employee_last_name,


            produkt_hrana.name as product_food_name,
            produkt_hrana.type as product_food_type,
            produkt_hrana.description as product_food_description,
             GROUP_CONCAT(CONCAT(produkt_osoba.first_name, ' ', produkt_osoba.last_name) SEPARATOR ', ') AS produkt_osoba_names
            FROM `obavljeni_poslovi` 
            left join `kupac` on kupac.jobs_id = obavljeni_poslovi.jobs_id
            left join `radnici` on radnici.employee_id = kupac.employee_id
            left join `produkt_osoba` on kupac.customer_id = produkt_osoba.customer_id
            left join `produkt_hrana` on kupac.customer_id = produkt_hrana.customer_id
            where kupac.jobs_id !=0
            GROUP BY kupac.customer_id;";
              $run = $conn->query($sql);
              $results = $run->fetch_all(MYSQLI_ASSOC);
              $select_members = $results;

            foreach($results as $result) : ?>
                    <tr>
                        <td><?php echo $result['jobs_id'] ?></td>
                        <td><?php echo $result['employee_name'] ." ". $result['employee_last_name'] ?></td>
                        <td><?php echo $result['service'] ?></td>
						<td><?php echo $result['customer_city'] ?></td>
                        <td><?php echo $result['completition_date'] ?></td>
                        <td><?php echo $result['car_name'] ?></td>
                        <td><?php echo $result['price'] ?></td>
                        <td>
                            <button class="custom-view-btn"><span class="fas fa-eye"></span></button>
                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>