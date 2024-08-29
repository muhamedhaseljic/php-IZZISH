
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
    background-color: #171c22 ;
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
    color:white;
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
    scrollbar-color: white #0d1017;
    padding-right:5px;
}
        /* Pop-up styling */


        /* Styling for the picture */
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

        /* Close button */
        .popup {
            display: none; /* Hidden by default */
            position: fixed; 
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7); /* Blurred background effect */
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        /* Popup content */
        .popup-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            margin-top:100px;
            display: flex;
            border-radius: 8px;
            width: 500px;
            text-align: left;
            position: relative;
        }



        /* The close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    
    <div class="custom-main-content">
        <h1 >Poslovi u ovoj sedmici</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" placeholder="Search city..." class="custom-search-bar">
                <a href="add_employees.php" class="custom-add-btn">PDF</a>

            </div>
            <div class="scrolling-divv">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Radnik</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Posao</th>
                        <th>Ustanova</th>
                        <th>Grad</th>
                        <th>Datum narudjbe</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php for($i=1;$i<10;$i++) : ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td>Medina Haseljić</td>
                        <td>medina@gmail.com</td>
                        <td>
                            <?php
                                $FourDigitRandomNumber = mt_rand(111111111,999999999);
                                echo "+" . $FourDigitRandomNumber;
                            ?>
                        </td>
                        <td>Sanitarna</td>
                        <td>Robot</td>
                        <td>Sarajevo</td>
                        <td>29. 10. 1999</td>
                        <td>
                        <button id="popupBtn" class="custom-view-btn"><span class="fas fa-eye"></span></button>
                            <a href="edit_employees.php" class="custom-edit-btn"><span class="fas fa-check "></span></a>
                        </td>
                    </tr>
                    <?php endfor; ?>
                    <!-- Repeat for other entries -->
                </tbody>
            </table>
            </div>
        </div>

        <!-- Pop-up Window -->
<div id="popup" class="popup">
    <div class="popup-content">
        <div class="profile-picture"><img class="boja-pozadine" src="images/Haseljić Muhamed_pp.jpg"  alt=""> </div> <!-- Placeholder for the picture -->
        <div class="radnik-details">
            <h2>Muhamed Haseljić</h2>
            <ul>
                <li><strong>RadnikID:</strong> int</li>
                <li><strong>Ime:</strong> Muhamed</li>
                <li><strong>Prezime:</strong> Haseljić</li>
                <li><strong>Email:</strong> varchar(255)</li>
                <li><strong>Telefon:</strong> int</li>
                <li><strong>Mjesto_rođenja:</strong> varchar(255)</li>
                <li><strong>Adresa_boravista:</strong> varchar(255)</li>
                <li><strong>Datum_rođenja:</strong> date</li>
                <li><strong>Spol:</strong> varchar(11)</li>
                <li><strong>DatumZaposlenja:</strong> date</li>
                <li><strong>RadnoStanje:</strong> zaposen, zamjena, itd...</li>
                <li><strong>JMBG:</strong> int(13)</li>
                <li><strong>Slika:</strong> varchar(255)</li>
                <li><strong>Biljeske:</strong> varchar(255)</li>
                <li><strong>Plata:</strong> money</li>
                <li><strong>AutoID:</strong> int</li>
                <li><strong>Pozicija:</strong> varchar(255)</li>
            </ul>
        </div>
        <span class="close" id="close-popup">&times;</span>
    </div>
</div>

<script>
        // Get the popup element
        var popup = document.getElementById("popup");

        // Get the button that opens the popup
        var btn = document.getElementById("popupBtn");

        // Get the <span> element that closes the popup
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the popup 
        btn.onclick = function() {
            popup.style.display = "block";
        }

        // When the user clicks on <span> (x), close the popup
        span.onclick = function() {
            popup.style.display = "none";
        }

        // When the user clicks anywhere outside of the popup, close it
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    </script>