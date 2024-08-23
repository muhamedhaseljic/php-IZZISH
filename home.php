
<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 50px;
    padding-top:0px;
    background-color: #16171b;
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
    max-width: 1000px; /* Adjust for a compact layout */
    margin: 40px auto;
    background-color: #212528;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    gap: 20px;
    
}

.left-section {
    flex: 0 0 200px; /* Fixed width for picture section */
    background-color: #212528;
    padding: 20px;
    text-align: center;
}

.profile-picture img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
}

.border-divider {
    width: 20px;
    background-color: #16171b; /* Visible border between sections */
    margin-left: ;
}

.right-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns layout */
    
    grid-row-gap: 10px;

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
    color:white;
}

input {
    flex: 1;
    padding: 5px; /* Smaller padding for compact inputs */
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: #16171b;
}

input::placeholder {
    color: white;
}
    </style>
    
    <div class="custom-main-content">
        <h1 >Profil</h1>

        <div class="profile-container">
        <!-- Left Section (Profile Picture) -->
        <div class="left-section">
            <div class="profile-picture">
                <img src="default-avatar.png" alt="Profile Picture" />
            </div>
        </div>

        <!-- Divider with Border -->
        <div class="border-divider"></div>

        <!-- Right Section (Editable Fields) -->
        <div class="right-section">
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
                    <label for="autoid">AutoID:</label>
                    <input type="number" id="autoid" name="autoid" placeholder="Enter AutoID" />
                </div>
                <div class="form-group">
                    <label for="pozicija">Pozicija:</label>
                    <input type="text" id="pozicija" name="pozicija" placeholder="Enter Pozicija" />
                </div>
            </div>
        </div>
    </div>
        </div>