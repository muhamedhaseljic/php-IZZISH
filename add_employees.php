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
    grid-template-rows: 1fr 1fr ; /* Two rows */
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
    grid-row: 1 / 3;
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
#dropzoneUpload {
            border: 2px dashed #007bff;
            border-radius: 5px;
            background-color: #f8f9fa;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .grid-inputs-container .dropzone {
    border: 2px dashed #007bff;
    border-radius: 5px;
    background-color: #f8f9fa;
    padding: 20px;
    max-width: 600px;
    margin: 0 auto;
}


.date-picker-with-label {
    margin-bottom: 15px;
    
    display: flex;
    align-items: center;
    padding: 10px;
    border: 1px solid grey;
    border-radius: 10px;
    background-color: #212528;
    color: #fff;
}

/* Styling for the icon inside the date picker */
.date-picker-with-label i {
    margin-right: 10px;
    color: #ccc;
    font-size: 16px;
}

/* Styling for the label inside the date picker */
.date-picker-with-label .date-label {
    
    font-size: 14px;
    font-size: 18px;
    color: grey;
    left: 10px;
    top: 50%;
    
/*
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: grey;
    font-size: 18px;*/
}

/* Styling for the date input */
.date-picker-input {
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 14px;
    flex: 1;
    outline: none;
    width: 100%;
    padding-left: 40px;
    padding-right: 15px;
    
 /*
    width: 100%;
    padding: 10px 15px;
    padding-left: 40px;
    background-color: #212528;
    color: #fff;
    border: 1px solid grey;
    border-radius: 10px;
    font-size: 14px;*/
}
</style>

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.10.2/dropzone.min.css" />

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
                    <label for="cityy"><i class="fa fa-location-arrow"></i></label>
                    <input type="text" id="cityy" name="adress_of_living" placeholder="Adresa boravišta" required>
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

                <div class="date-picker-with-label ">
                    <i class="fa fa-birthday-cake"></i>
                    <span class="date-label">Date of Birth</span>
                    <input type="date" id="dob" name="dob" class="date-picker-input">
                </div>

                <!-- Start Date Input -->
                <div class="date-picker-with-label ">
                    <i class="fa fa-briefcase"></i>
                    <span class="date-label">Start Date</span>
                    <input type="date" id="start-date" name="start-date" class="date-picker-input">
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
            
            <!-- Grid Section 
            <div class="grid-inputs-container">
                
                <form  action="upload_photo_path.php" class="dropzone" id="dropzoneUpload">
                        <div class="dz-message">Drop files here or click to upload</div>
                    </form>
                    <input type="hidden" id="photoPathInput" name="photoPath">
                

                <div class="input-group">
                    <label for="input2"><i class="fa fa-envelope"></i></label>
                    <input type="text" id="input2" name="input2" placeholder="Input 2">
                </div>

                <div class="input-group">
                    
                    <textarea id="description" name="description" placeholder="Bilješke radnika..."></textarea>
                </div>
            </div>
            -->

            <div class="grid-inputs-container">
    <!-- First Input (top-left) -->
    <div class="input-group">
        <label for="image-upload"><i class="fa fa-upload"></i> Upload Image</label>
        <input type="file" id="image-upload" name="image-upload" accept="image/*">
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

    <!-- New Image Upload Bar -->
    
</div>

            <!-- Save Button -->
            <div class="flex-container">
                <!-- Name Input -->
                <button type="reset" id="clearButton">Clear</button>
                    
                <div>

                </div>

                <!-- New Input (e.g. Surname) -->
                <button type="submit">Save</button>

                
            </div>
            
        </form>

    </div>

   
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.10.2/dropzone.min.js"></script>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
    Dropzone.options.dropzoneUpload = {
            url: "upload_photo_path.php",
            paramName: "photo",
            maxFilesize: 20,
            acceptedFiles: "image/*",
            init: function() {
                this.on("success", function(file, response) {
                    const jsonResponse = JSON.parse(response);
                    if (jsonResponse.success) {
                        document.getElementById('photoPathInput').value = jsonResponse.photo_path;
                    } else {
                        console.error(jsonResponse.error);
                    }
                });

                this.on("error", function(file, response) {
                    console.error("File upload error: ", response);
                });
            }
        };
</script>