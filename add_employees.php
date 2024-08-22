<?php

require_once "header.php";?>

<div class="custom-container d-flex">
<?php require_once "sidebar.php";

?>

<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    
    
    background-color: #16171b;
    
    padding-bottom:0px;
    display: flex;
    justify-content: center;  /* Center horizontally */
    align-items: center;      /* Center vertically */
    height: 100vh;    
    padding: 100px;    
    padding-top:0px;
}

.custom-main-content h1{
    color:white;
    margin-bottom:20px;
}
.form-container {
    background-color: #16171b;
    padding: 30px;
    border-radius: 10px;
    /*box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);*/
    width: 100%;
    /*max-width: 800px;*/
}

.employee-form h2 {
    text-align: left;
    color: #fff;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
    position: relative;
}

.input-group input,
.input-group select {
    width: 100%;
    padding: 10px 15px;
    padding-left: 40px;
    background-color: #212528;
    color: #fff;
    border: 1px solid grey;
    border-radius: 10px;
    font-size: 14px;
}

.input-group label {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: grey;
    font-size: 18px;
    
}
.date-group label{
    
    transform: translateX(200%) translateY(-50%);
}
::placeholder{
    color:grey;
}

button {
    width: 20%;
    padding: 12px;
    background-color: #262c78;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #484b8f;
}

input:focus, select:focus {
    outline: none;
    border-color: #484b8f;
    box-shadow: 0 0 8px rgba(59, 73, 223, 0.5);
}
.flex-container {
    display: flex;
    gap: 100px; /* Space between inputs */
}

.flex-container .input-group {
    flex: 1; /* Make inputs take equal width */
}
/* Special container for grid inputs */
.grid-inputs-container {
    display: grid;
    grid-template-columns: 1fr 2fr ; /* Two columns, 1/3 and 2/3 width */
    grid-template-rows: 1fr 1fr 1fr; /* Two rows */
    /*gap: 100px;  Space between inputs */
    margin-bottom: 20px; /* Space from other fields */
    grid-row-gap:5px;
    grid-column-gap:50px;
}
.grid-inputs-container .input-group:nth-child(1) {
    grid-column: 1 / 2;
    grid-row: 1 / 2;
}

/* Second input takes the second row and first column */
.grid-inputs-container .input-group:nth-child(2) {
    grid-column: 1 / 2;
    grid-row: 2 / 3;
}

/* Third input takes the first and second rows, spanning two rows */
.grid-inputs-container .input-group:nth-child(3) {
    grid-column: 2 / 3;
    grid-row: 1 / 4;
}
textarea {
    width: 100%;
    height: 100%;
    padding: 10px 15px;
    background-color:#212528;
    color: #fff;
    border: 1px solid grey;
    border-radius: 10px;
    font-size: 14px;
    resize: none; /* Allows resizing vertically */
    overflow-y: auto; /* Adds scroll for overflow */
    line-height: 1.5;
}

/* Ensures the text starts from the top */
textarea::placeholder {
    color: #888;
}

textarea:focus {
    outline: none;
    border-color: #3b49df;
    box-shadow: 0 0 8px rgba(59, 73, 223, 0.5);
}

</style>
<div class="custom-main-content">
        
            
<div class="form-container">
        <form class="employee-form">
            <h2>Dodaj novog radnika</h2>

            <!-- Ime Mjesto_rodjenja i Pozicija -->
            <div class="flex-container">
                <div class="input-group">
                    <label for="name"><i class="fa fa-user"></i></label>
                    <input type="text" id="name" name="name" placeholder="Ime" required>
                </div>

                <div class="input-group">
                    <label for="city"><i class="fa fa-location-arrow"></i></label>
                    <input type="text" id="city" name="city-of-birth" placeholder="Mjesto rođenja" required>
                </div>

                <div class="input-group">
                    <label for="position"><i class="fa fa-briefcase"></i></label>
                    <input type="text" id="position" name="position" placeholder="Pozicija" required>
                </div>
            </div>

            <!-- Prezime Adresa_boravista Radno stanje -->
            <div class="flex-container">
                <div class="input-group">
                    <label for="surname"><i class="fa fa-user"></i></label>
                    <input type="text" id="surname" name="surname" placeholder="Prezime" required>
                </div>

                <div class="input-group">
                    <label for="city"><i class="fa fa-location-arrow"></i></label>
                    <input type="text" id="city" name="adress_of_living" placeholder="Adresa boravišta" required>
                </div>

                <div class="input-group">
                <label for="status_zaposlenja"><i class="fa fa-clipboard-list"></i></label>
                <select id="status_zaposlenja" name="status_zaposlenja" required>
                     
                    <option value="stalno_zaposlen">Stalno zaposlen</option>
                    <option value="zamjena ">Zamjena </option>
                    <option value="sezonski_rad ">Sezonski rad </option>
                    <option value="pripravnik  ">Pripravnik  </option>
                </select>
            </div>
            </div>

            
                
            

            
            <!-- email datum_rodjenja datum_zapošljavanja -->
            <div class="flex-container">
            <div class="input-group">
                    <label for="email"><i class="fa fa-envelope	"></i></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-group date-group">
                    <label for="date">Rodjenje</label>
                    <input type="date" id="date" name="date_of_birth"  required>
                    
                </div>

                <div class="input-group date-group">
                    <label for="date">Zaposlenje</label>
                    <input type="date" id="date" name="date_of_working"  required>
                </div>  
                
            </div>

            <!-- telefon jmbg plata -->
            <div class="flex-container">
            <div class="input-group">
                    <label for="phone"><i class="fa fa-phone	"></i></label>
                    <input type="phone" id="phone" name="phone" placeholder="phone-number" required>
                </div>

                <div class="input-group">
                    <label for="jmbg"><i class="fa fa-calendar"></i></label>
                    <input type="jmbg" id="jmbg" name="jmbg" placeholder="jmbg" required>
                </div>

                <div class="input-group">
                    <label for="salary"><i class="fa fa-wallet"></i></label>
                    <input type="salary" id="salary" name="salary" placeholder="Plata" required>
                </div>  
                
            </div>

            <!-- password spol  -->
            <div class="flex-container">
            <div class="input-group">
                    <label for="password"><i class="fa fa-lock	"></i></label>
                    <input type="password" id="password" name="password" placeholder="sifra" required>
                    
                </div>

                <div class="input-group">
                <label for="gender"><i class="fas fa-venus-mars"></i></label>
                <select id="gender" name="gender" required>
                     
                    <option value="male">Muško</option>
                    <option value="female ">Žensko </option>
                </select>
            </div>

                <div class="input-group">
                    
                </div>  
                
            </div>
            
            <!-- Grid Section -->
            <div class="grid-inputs-container">
                <!-- First Input (top-left) -->
                <div class="input-group">
                    <label for="input1"><i class="fa fa-user"></i></label>
                    <input type="text" id="input1" name="input1" placeholder="Input 1">
                </div>

                <!-- Second Input (bottom-left) -->
                <div class="input-group">
                    <label for="input2"><i class="fa fa-envelope"></i></label>
                    <input type="text" id="input2" name="input2" placeholder="Input 2">
                </div>

                <!-- Third Input (right, double-height) -->
                <div class="input-group">
                    
                    <textarea id="description" name="description" placeholder="Bilješke radnika..."></textarea>
                </div>
            </div>

            <!-- Save Button -->
            <div class="flex-container">
                <!-- Name Input -->
                <div class="input-group">
                    
                </div>

                <!-- New Input (e.g. Surname) -->
                <button type="submit">Save</button>

                <div class="input-group">
                    
                </div>
            </div>
            
        </form>
    </div>
    </div>