<?php

require_once "../config/config.php";
require_once "../radnik/Radnik.php";
$radnik = new Radnik();

?>

<style>
nav#sidebar {
    height: 100vh;
    position: sticky;
    z-index: 99;
    left: 0;
    width:  270px;

    padding: 20px;
    border: 1px solid #132650;
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    display: flex;
        flex-direction: column;
        justify-content: space-between;
}

nav#sidebar.closed {
    margin-left: -270px; 
}
a.nav-item {
    position: relative;
    display: block;
    padding: 0.43rem 0.95rem;
    margin-bottom: 5px;
    margin-top: 5px;
    background-color:#132650;
    color: white;
    font-weight: 100;
}
a.nav-item:hover{
    background-color:#23355d;
    
    color: white;
    text-decoration:none;
    border-radius: 10px;
}
.nav-item.active {
    background-color:#23355d;
    
    color: white;
    text-decoration:none;
    border-radius: 10px;
}
.sidebar-custom{
    background-color:#132650;
}
div.nav-item{
    position: relative;
    display: flex;
    padding: 0.55rem 0.35rem;
    margin-bottom: -1px;
    
    background-color:#132650;
    color: white;
    font-weight: 400;
    margin-bottom:0px; 
    place-content:center;
}
div.nav-item img{
    border: 3px solid #008cba; 
    border-radius:50%;
}

img.nav-item{
    position: relative;
    display: block;
    padding: 0.55rem 0.35rem;    
    background-color: #132650;
    color: white;
    font-weight: 400;
    margin-bottom:50px;
    margin-top: 50px;
}
.sidebar-custom  a.nav-item:last-child {
    position: relative;
    display: flex;
    padding: 0.55rem 0.95rem;
    margin-bottom: -1px;
    
    background-color: #132650;
    color: white;
    font-weight: 100;
    justify-content:center;
    align-items:center;
    place-content:center;
    
}
.sidebar-custom  a.nav-item:last-child:hover {
    position: relative;
    display: flex;
    padding: 0.55rem 0.95rem;
    margin-bottom: -1px;
    color:grey;   

}
h2.nav-item{
    display: flex;
    font-size:14px;
    color:#8EC1FF;
    place-content:center;
    font-weight:bold;
    
}
h3.nav-item{
    display: flex;
    font-size:12px;
    color:white;
    place-content:center;
    margin-bottom:50px;
    margin-top:-5px;
}
.boja-pozadine{
    width:110px;
    height:110px;
     
}
nav#sidebar .sidebar-list .hr-custom {
    padding: 0; 
    margin: 0 -20px; 
    width: calc(100% + 40px); 
    height: 1px; 
    background-color: #575757; 
    border: none; 
}
.logo-container {
        margin: 50px 0;
    }

    .logo-container img {
        padding: 0.55rem 0.35rem; 
    }

    .logout-section {
        text-align: center;
        margin-bottom: 0px; /* Margin from the bottom */
    }



</style>

<nav id="sidebar" class='mx-lt-5 sidebar-custom' >
		
		<div class="sidebar-list ">
            
                <div class="nav-item">
                <?php $employee_data = $radnik->get_employee_data() ?>
                    <img class="boja-pozadine" draggable="false" src="<?php echo "../images/" . $employee_data['photo_path'] ?>"  alt="">                   
                </div>
                <h2 class="nav-item"><?=$employee_data['first_name'] . " ". $employee_data['last_name']?></h2>
                <h3 class="nav-item"><?php if($employee_data['is_admin'] == 1) echo "Admin"; else echo "Radnik"; ?></h3>
                <hr class="hr-custom">
				<a href="../app/dashboard.php?page=home" class="nav-item nav-home"><span class='icon-field'>&nbsp;<i class="fa fa-user">  &nbsp; &nbsp;</i></span> Profil</a>
				<a href="../app/dashboard.php?page=radnici" class="nav-item nav-radnici"><span class='icon-field'><i class="fa fa-users">  &nbsp; &nbsp;</i></span> Radnici</a>
				<a href="../app/dashboard.php?page=kupci" class="nav-item nav-kupci"><span class='icon-field'><i class="fa fa-handshake">  &nbsp; &nbsp;</i></span> Stranka</a>
				<a href="../app/dashboard.php?page=automobili" class="nav-item nav-automobili"><span class='icon-field'><i class="fas fa-car"> &nbsp; &nbsp;</i></span> Automobili</a>
				<a href="../app/dashboard.php?page=historija_radnik" class="nav-item nav-historija_radnik"><span class='icon-field'><i class="fas fa-user-clock"> &nbsp;</i></span> Historija radnika</a>
				<a href="../app/dashboard.php?page=zavrseni_poslovi" class="nav-item nav-zavrseni_poslovi"><span class='icon-field'>&nbsp;<i class="fas fa-clipboard-check"> &nbsp; &nbsp;</i></span>Završeni poslovi</a>
				<a href="../app/dashboard.php?page=godisnji" class="nav-item nav-godisnji"><span class='icon-field'>&nbsp;<i class="fas fa-clipboard-check"> &nbsp; &nbsp;</i></span>Bolovanje</a>
                <hr class="hr-custom">

				<!--<a href="index.php?page=allowance" class="nav-item nav-allowance"><span class='icon-field'><i class="fa fa-list"> &nbsp; &nbsp;</i></span> Profil</a>-->
				<!--<a href="index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fa fa-money-bill-wave"> &nbsp; &nbsp;</i></span> Deduction List</a>		-->
				<div class="logo-container">
                <img  draggable="false" src="../images/inz_logo_-1.png" width="200px" height="60px" alt="">
                </div>
                </div>
                <div class="logout-section">
                <a href="../logout.php" class="nav-item nav-deductions"><span class='icon-field'><i class="fas fa-sign-out-alt"> &nbsp; &nbsp;</i></span> Odjava</a>
		</div>
        <button id="toggleButton" lass="move-button">
<i id="toggleIcon" class="fas fa-times fa-2x"></i>
</button>
</nav>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var page = '<?php echo isset($_GET['page']) ? htmlspecialchars($_GET['page'], ENT_QUOTES, 'UTF-8') : ''; ?>';
        if (page) {
            $('.nav-' + page).addClass('active');
        }
    });

    

</script>