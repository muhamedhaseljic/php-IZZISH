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
    border-radius: 5px;
    font-size: 14px;
    resize: vertical; /* Allows resizing vertically */
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

            <!-- Name and New Field in Same Line -->
            <div class="flex-container">
                <!-- Name Input -->
                <div class="input-group">
                    <label for="name"><i class="fa fa-user"></i></label>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>

                <!-- New Input (e.g. Surname) -->
                <div class="input-group">
                    <label for="surname"><i class="fa fa-user"></i></label>
                    <input type="text" id="surname" name="surname" placeholder="Surname" required>
                </div>

                <div class="input-group">
                    <label for="email"><i class="fa fa-envelope"></i></label>
                    <input type="email" id="email" name="email" placeholder="merima.jaskic@gmail.com" required>
                </div>
            </div>

            <div class="flex-container">
                <!-- Name Input -->
                <!-- Phone -->
            <div class="input-group">
                <label for="phone"><i class="fa fa-phone"></i></label>
                <input type="phone" id="phone" name="phone" placeholder="000-000-000" required>
            </div>

            <!-- City -->
            <div class="input-group">
                <label for="city"><i class="fa fa-location-arrow"></i></label>
                <input type="text" id="city" name="city" placeholder="Tuzla" required>
            </div>
            <div class="input-group">
                
            </div>

                
            </div>

            <div class="flex-container">
                <!-- Name Input -->
                <!-- Phone -->
            <div class="input-group">
                <label for="city"><i class="fa fa-location-arrow"></i></label>
                <input type="city" id="city" name="city_birth" placeholder="Mjesto boravista" required>
            </div>

            <!-- City -->
            <div class="input-group">
                <label for="city"><i class="fa fa-location-arrow"></i></label>
                <input type="text" id="city" name="city" placeholder="Adresa boravista" required>
            </div>

            <div class="input-group">
                <label for="date"><i class="fa fa-calendar-o"></i></label>
                <input type="date" id="date" name="date_birth" placeholder="01/01/24" required>
            </div>

                
            <!--spol i jmbg-->
            </div>

            <div class="flex-container">
                <!-- Name Input -->
                <!-- Phone -->
                <div class="input-group">
                <select id="gender" name="gender" required>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>

            <!-- City -->
            <div class="input-group">
                <label for="jmbg"><i class="fa fa-location-arrow"></i></label>
                <input type="jmbg" id="jmbg" name="jmbg" placeholder="0000000000000" required>
            </div>          
                
            </div>

            <div class="flex-container">
                <!-- Name Input -->
                <!-- Phone -->
            <div class="input-group">
                <label for="city"><i class="fa fa-location-arrow"></i></label>
                <input type="city" id="city" name="city_birth" placeholder="Mjesto boravista" required>
            </div>

            <!-- City -->
            <div class="input-group">
                <label for="city"><i class="fa fa-location-arrow"></i></label>
                <input type="text" id="city" name="city" placeholder="Adresa boravista" required>
            </div>

            <div class="input-group">
                
            </div>
                
            <!--spol i jmbg-->
            </div>

            <!-- Phone -->
            <div class="input-group">
                <label for="phone"><i class="fa fa-phone"></i></label>
                <input type="phone" id="phone" name="phone" placeholder="000-000-000" required>
            </div>

            <!-- 
            <div class="input-group">
                <label for="city"><i class="fa fa-location-arrow"></i></label>
                <input type="text" id="city" name="city" placeholder="Tuzla" required>
            </div>

            <div class="input-group">
                <label for="username"><i class="fa fa-user"></i></label>
                <input type="text" id="username" name="username" placeholder="merima" required>
            </div>

            <div class="input-group">
                <label for="password"><i class="fa fa-lock"></i></label>
                <input type="password" id="password" name="password" placeholder="merima123" required>
            </div>

            <div class="input-group">
                <select id="role" name="role" required>
                    <option value="nurse">Nurse</option>
                    <option value="doctor">Doctor</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="input-group">
                <select id="gender" name="gender" required>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>-->

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
                    <label for="description"><i class="fa fa-file-alt"></i></label>
                    <textarea id="description" name="description" placeholder="Write your description here..."></textarea>
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