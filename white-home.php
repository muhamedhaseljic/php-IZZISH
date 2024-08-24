
<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #f0f4f5;
    min-height: 100vh;
    padding-bottom:0px;
}/*
.custom-main-content {
    padding: 20px;
    background-color: #f4f4f4;
    min-height: 100vh;
    font-family: Arial, sans-serif;
}*/

.profile-container {
    display: flex;
    max-width: 1400px; /* Adjust for a compact layout */
    margin: 40px auto;
    background-color: white;
    box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1);

    padding: 0px;
    gap: 0px;
    height:600px;
    
}

.left-section {
    flex: 0 0 200px; /* Fixed width for picture section */
    background-color: white;
    padding:5px;
    padding-top: 20px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);

    text-align: center;
}

.profile-picture img {
    width: 200px;
    height: 200px;
    margin-bottom:20px;
}

.border-divider {
    width: 40px;
    background-color: #f0f4f5; /* Visible border between sections */
    margin-left: ;
    height:600px;
    margin-top:0px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);

}

.right-section {
    flex: 1,1;
    display: flex;
    padding:100px;
    padding-top: 20px;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns layout */
    
    grid-row-gap: 0px;

    grid-column-gap: 60px;


}

.form-group {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
    
}

label {
    width: 150px; /* Fixed width for the labels */
    font-weight: bold;
    text-align: left;
    color:black;
}

input {
    flex: 1;
    padding: 5px; /* Smaller padding for compact inputs */
    /*border-radius: 5px;
    border: 1px solid black;*/
    background-color: white;
    color:black;
    box-shadow: 10px 10px 10px  rgba(, 0, 0, 0.1);
    border:none;
}

input::placeholder {
    color: black;
}
.left-section h1{
    color:black;
    text-align: center;
    font-size:18px;
}
.left-section p{
    color:black;
    text-align: left;
    font-size:18px;
    margin: 10px 0;
    
}
.profile-label {
    display: inline-block;
    width: 50px; /* Adjust this value to your desired space */
    
    font-size:18px;
  }

.detalji-profil{
    color:grey;
    text-align: left;
    font-size:16px;
    margin-left:40px;
    font-family:ui-sans-serif, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol";
    weight:400;
}
.right-section h1{
    color:black;
    text-align: center;
    font-size:18px;
    margin-right:70px;
    margin-left:-70px;
}
    </style>
    
    <div class="custom-main-content">
        

        <div class="profile-container">
        
        <!-- Left Section (Profile Picture) -->
        <div class="left-section">
        <h1 ><b>PROFIL DETALJI</b></h1>
            <div class="profile-picture">
                <img src="images/Haseljić Muhamed_pp.jpg" alt="Profile Picture" />
            </div>
            <p><span class="profile-label">Ime:</span> <span class="detalji-profil">Muhamed</span></p>
            <p><span class="profile-label">Godine:</span> <span class="detalji-profil">22 godine</span></p>
            <p><span class="profile-label">Lokacija:</span> <span class="detalji-profil">Zenica</span></p>
            <p><span class="profile-label">Staž:</span> <span class="detalji-profil">15 godina</span></p>
        </div>

        <!-- Divider with Border -->
        <div class="border-divider"></div>

        <!-- Right Section (Editable Fields) -->
         
        <div class="right-section">
        <h1 ><b>O MENI</b></h1>
            <div class="form-grid">
                <div class="form-group">
                    <label for="radnikid">RadnikID:</label>
                    <input type="number" id="radnikid" name="radnikid" placeholder="Enter RadnikID" />
                </div>
                <div class="form-group">
                    <label for="ime">Ime:</label>
                    <input type="text" id="ime" name="ime" placeholder="Enter Ime" maxlength="255" />
                </div>
                <div class="form-group">
                    <label for="prezime">Prezime:</label>
                    <input type="text" id="prezime" name="prezime" placeholder="Enter Prezime" maxlength="255" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" />
                </div>
                <div class="form-group">
                    <label for="telefon">Telefon:</label>
                    <input type="number" id="telefon" name="telefon" placeholder="Enter Telefon" />
                </div>
                <div class="form-group">
                    <label for="mjesto_rodjenja">Mjesto rođenja:</label>
                    <input type="text" id="mjesto_rodjenja" name="mjesto_rodjenja" placeholder="Enter Mjesto rođenja" />
                </div>
                <div class="form-group">
                    <label for="adresa_boravista">Adresa boravišta:</label>
                    <input type="text" id="adresa_boravista" name="adresa_boravista" placeholder="Enter Adresa boravišta" />
                </div>
                <div class="form-group">
                    <label for="datum_rodjenja">Datum rođenja:</label>
                    <input type="date" id="datum_rodjenja" name="datum_rodjenja" />
                </div>
                <div class="form-group">
                    <label for="spol">Spol:</label>
                    <input type="text" id="spol" name="spol" placeholder="Enter Spol" maxlength="11" />
                </div>
                <div class="form-group">
                    <label for="datum_zaposlenja">Datum Zaposlenja:</label>
                    <input type="date" id="datum_zaposlenja" name="datum_zaposlenja" />
                </div>
                <div class="form-group">
                    <label for="radni_status">Radni Status:</label>
                    <input type="text" id="radni_status" name="radni_status" placeholder="Enter Radni Status" />
                </div>
                <div class="form-group">
                    <label for="jmbg">JMBG:</label>
                    <input type="number" id="jmbg" name="jmbg" placeholder="Enter JMBG" />
                </div>
                <div class="form-group">
                    <label for="plata">Plata:</label>
                    <input type="number" id="plata" name="plata" placeholder="Enter Plata" />
                </div>
                
                <div class="form-group">
                    <label for="pozicija">Pozicija:</label>
                    <input type="text" id="pozicija" name="pozicija" placeholder="Enter Pozicija" />
                </div>

                <div class="form-group">
                    <button>submit</button>
                </div>
            </div>
            
        </div>
    </div>
        </div>