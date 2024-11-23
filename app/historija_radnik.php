
<?php

require_once "../config/config.php";
require_once "../classes/HistorijaRadnik.php";

$history_radnik = new HistorijaRadnik();
$history_radnik = $history_radnik->fetch_all();

?>

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
    background-color: white ;
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


        .profile-picture {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border-radius: 50%;
            margin-right: 20px;
        }
.profile-picture img{
            width: 100px;
            height: 100px;
            background-color: #ccc;
            margin-right: 20px;
}
        .radnik-details {
            display: flex;
            flex-direction: column;
        }

        .radnik-details h2 {
            margin-top: 0;
        }

        .radnik-details ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .radnik-details ul li {
            margin-bottom: 8px;
            font-size: 14px;
        }

        .popup {
            display: none;
            position: fixed; 
            width: 100%;
            height: 100%;
            overflow: auto;
            
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .popup-content {
            background-color: white;
            margin: 15% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            margin-top:100px;
            display: flex;
            border-radius: 8px;
            width: 500px;
            text-align: left;
            position: relative;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            height: 20px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .button-container{
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

    </style>
    
    <div class="custom-main-content content">
        <h1 >Historija radnika</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" placeholder="Search name..." class="custom-search-bar">
                
            </div>
            <div class="scrolling-divv">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime i prezime</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Pozicija</th>
                        <th>Plata</th>                        
                        <th>Slika</th>
                        <th>Datum rodjenja</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                
                <tbody id="employee-table">
                <?php 


                    foreach ($history_radnik as $history) :
                
                ?>
                    <tr>
                        <td><?=$history['history_id']?></td>
                        <td><?=$history['first_name']. " ".$history['last_name'] ?></td>
                        <td><?=$history['email'] ?></td>
                        <td>
                            <?=$history['phone_number'] ?>
                        </td>
                        <td><?=$history['position'] ?></td>
                        <td><?=$history['salary'] ?></td>
                        <td><img src="<?php echo "../images/" . $history['photo_path'] ?>" alt="Edis" class="custom-profile-img"></td>
                        <td><?=$history['date_of_birth'] ?></td>
                        <td>
                            
                        <button id="popupBtn" class="custom-view-btn view-employee-btn" data-employee='<?php echo json_encode($history); ?>'><span class="fas fa-eye"></span></button>
                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>

        <div id="popup" class="popup">
    <div class="popup-content">
        <div class="profile-picture">
            <img id="employee-image" src="" alt="">
        </div>
        <div class="radnik-details">
        <h2 hidden id="employee-id"></h2>
            <h2 id="employee-first-name"></h2>
            <h2 id="employee-last-name"></h2>
            
            <ul>
                <li><strong>Email:</strong> <span id="employee-email"></span></li>
                <li><strong>Telefon:</strong> <span id="employee-phone"></span></li>
                <li><strong>Datum rodjenja:</strong> <span id="employee-date-of-birth"></span></li>
                <li><strong>Mjesto rodjenja:</strong> <span id="employee-place-of-birth"></span></li>
                <li><strong>Spol:</strong> <span id="employee-gender"></span></li>
                <li><strong>JMBG:</strong> <span id="employee-jmbg"></span></li>
                <li><strong>Adresa:</strong> <span id="employee-address"></span></li>
                <li><strong>Datum zaposlenja:</strong> <span id="employee-date-of-employment"></span></li>
                <li><strong>Status:</strong> <span id="employee-status"></span></li>
                <li><strong>Pozicija:</strong> <span id="employee-position"></span></li>
                <li><strong>Plata:</strong> <span id="employee-salary"></span></li>
                <li><strong>Bilješke:</strong> <span id="employee-notes"></span></li>
                <li><strong>Razlog brisanja:</strong> <span id="employee-reason-notes"></span></li>
            </ul>
        </div>
        <span class="close" id="close-popup">&times;</span>
    </div>
</div>

<script>
     document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popup");
    const closeBtn = document.getElementById("close-popup");

    function showPopup(history) {
        document.getElementById("employee-id").textContent = history.history_id;
        document.getElementById("employee-first-name").textContent = history.first_name;
        document.getElementById("employee-last-name").textContent = history.last_name;
        document.getElementById("employee-email").textContent = history.email;
        document.getElementById("employee-phone").textContent = history.phone_number;

        document.getElementById("employee-date-of-birth").textContent = history.date_of_birth;
        document.getElementById("employee-place-of-birth").textContent = history.place_of_birth;
        document.getElementById("employee-gender").textContent = history.gender;
        document.getElementById("employee-jmbg").textContent = history.jmbg;
        document.getElementById("employee-address").textContent = history.adress;
        document.getElementById("employee-date-of-employment").textContent = history.date_of_employment;
        document.getElementById("employee-status").textContent = history.status;

        document.getElementById("employee-position").textContent = history.position;
        document.getElementById("employee-salary").textContent = "$ " + history.salary;
        document.getElementById("employee-image").src = "../images/" + history.photo_path;
        document.getElementById("employee-notes").textContent = history.notes;
        document.getElementById("employee-reason-notes").textContent = history.reason_notes;
        

        popup.style.display = "block";
    }

    document.querySelectorAll(".view-employee-btn").forEach(function(button) {
        button.addEventListener("click", function() {
            const history = JSON.parse(this.getAttribute("data-employee"));
            showPopup(history); 
        });
    });

    closeBtn.onclick = function() {
        popup.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }
});
</script>