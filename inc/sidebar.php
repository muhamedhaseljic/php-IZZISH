<style>
nav#sidebar {
    height: 100vh;
    position: sticky;
    z-index: 99;
    left: 0;
    width:  15%;
    padding: 20px;
    border: 1px solid black;
}
a.nav-item {
    position: relative;
    display: block;
    padding: 0.43rem 0.95rem;
    margin-bottom: 5px;
    
    background-color: #0d1017;
    color: white;
    font-weight: 100;
}
a.nav-item:hover{
    background-color:#0298c9;
    
    color: white;
    text-decoration:none;
    border-radius: 10px;
}
.nav-item.active {
    background-color:#008cba;
    
    color: white;
    text-decoration:none;
    border-radius: 10px;
}
.sidebar-custom{
    background-color: #0d1017;
}
div.nav-item{
    position: relative;
    display: flex;
    padding: 0.55rem 0.35rem;
    margin-bottom: -1px;
    
    background-color: #0d1017;
    color: white;
    font-weight: 400;
    margin-bottom:0px; 
    place-content:center;
}
div.nav-item img{
    border-radius:100%;
}

img.nav-item{
    position: relative;
    display: block;
    padding: 0.55rem 0.35rem;    
    background-color: #0d1017;
    color: white;
    font-weight: 400;
    margin-bottom:110px;
    margin-top: 110px;
}
.sidebar-custom  a.nav-item:last-child {
    position: relative;
    display: flex;
    padding: 0.55rem 0.95rem;
    margin-bottom: -1px;
    
    background-color: #0d1017;
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
    font-size:12px;
    color:white;
    place-content:center;
    
}
h3.nav-item{
    display: flex;
    font-size:12px;
    color:white;
    place-content:center;
    margin-bottom:50px;
    margin-top:-5px;
}

</style>

<nav id="sidebar" class='mx-lt-5 sidebar-custom' >
		
		<div class="sidebar-list ">
                <div class="nav-item">
                    <img class="boja-pozadine" src="../images/Haseljić Muhamed_pp.jpg" width="70px" height="70px" alt="">                   
                </div>
                <h2 class="nav-item">Muhamed Haseljić</h2>
                <h3 class="nav-item">Admin</h3>

				<a href="../app/dashboard.php?page=home" class="nav-item nav-home"><span class='icon-field'>&nbsp;<i class="fa fa-user">  &nbsp; &nbsp;</i></span> Profil</a>
				<a href="../app/dashboard.php?page=radnici" class="nav-item nav-radnici"><span class='icon-field'><i class="fa fa-users">  &nbsp; &nbsp;</i></span> Radnici</a>
				<a href="../app/dashboard.php?page=kupci" class="nav-item nav-kupci"><span class='icon-field'><i class="fa fa-handshake">  &nbsp; &nbsp;</i></span> Stranka</a>
				<a href="../app/dashboard.php?page=automobili" class="nav-item nav-automobili"><span class='icon-field'><i class="fas fa-car"> &nbsp; &nbsp;</i></span> Automobili</a>
				<a href="../app/dashboard.php?page=historija_radnik" class="nav-item nav-historija_radnik"><span class='icon-field'><i class="fas fa-user-clock"> &nbsp;</i></span> Historija radnika</a>
				<a href="../app/dashboard.php?page=zavrseni_poslovi" class="nav-item nav-zavrseni_poslovi"><span class='icon-field'>&nbsp;<i class="fas fa-clipboard-check"> &nbsp; &nbsp;</i></span>Završeni poslovi</a>
				<a href="../app/dashboard.php?page=godisnji" class="nav-item nav-white-home"><span class='icon-field'>&nbsp;<i class="fas fa-clipboard-check"> &nbsp; &nbsp;</i></span>Godišnji</a>


				<!--<a href="index.php?page=allowance" class="nav-item nav-allowance"><span class='icon-field'><i class="fa fa-list"> &nbsp; &nbsp;</i></span> Profil</a>-->
				<!--<a href="index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fa fa-money-bill-wave"> &nbsp; &nbsp;</i></span> Deduction List</a>		-->
				<img class="nav-item" src="../images/inz_logo_-1.png" width="200px" height="60px" alt="">

                <a href="../index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fas fa-sign-out-alt"> &nbsp; &nbsp;</i></span> LogOut</a>
		</div>

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