


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
    background-color: #132650;
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
    background-color: #132650;
}
div.nav-item{
    position: relative;
    display: flex;
    padding: 0.55rem 0.35rem;
    margin-bottom: -1px;
    
    background-color: #132650;
    color: white;
    font-weight: 400;
    margin-bottom:0px; 
    place-content:center;
}
div.nav-item img{
    border-radius:100%;
    border: 3px solid #008cba; 
}

img.nav-item{
    position: relative;
    display: block;
    padding: 0.55rem 0.35rem;    
    background-color: #132650;
    color: white;
    font-weight: 400;
    margin-bottom:70px;
    margin-top: 110px;
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
.sidebar-list h2.nav-item{
    display: flex;
    font-size:14px;
    color:#8EC1FF;
    place-content:center;
    font-weight:bold;
    
}
.sidebar-list h3.nav-item{
    display: flex;
    font-size:12px;
    color:white;
    place-content:center;
    margin-bottom:50px;
    margin-top:-5px;
}
nav#sidebar .sidebar-list .hr-custom {
    padding: 0; 
    margin: 0 -20px; 
    width: calc(100% + 40px);
    height: 1px; 
    background-color: #575757; 
    border: none; 
}

</style>

<nav id="sidebar" class='mx-lt-5 sidebar-custom' >
		
		<div class="sidebar-list ">
                <div class="nav-item">
                <?php $employee_data = $radnik->get_employee_data() ?>
                    <img class="boja-pozadine" src="<?php echo "../images/" . $employee_data['photo_path'] ?>" width="110px" height="110px" alt="">                   
                </div>
                <h2 class="nav-item"><?=$employee_data['first_name'] . " ". $employee_data['last_name']?></h2>
                <h3 class="nav-item"><?php if($employee_data['is_admin'] == 1) echo "Admin"; else echo "Radnik"; ?></h3>
                <hr class="hr-custom">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'>&nbsp;<i class="fa fa-user">  &nbsp; &nbsp;</i></span> Profil</a>
                <a href="../radnik/index.php?page=radna_sedmica" class="nav-item nav-radna_sedmica"><span class='icon-field'>&nbsp;<i class="fas fa-calendar-week">  &nbsp; &nbsp;</i></span> Radna sedmica</a>
                <a href="index.php?page=poslovi" class="nav-item nav-poslovi"><span class='icon-field'>&nbsp;<i class="fas fa-tasks">  &nbsp; &nbsp;</i></span> Poslovi</a>
                <a href="index.php?page=poruke" class="nav-item nav-poruke"><span class='icon-field'>&nbsp;<i class="fas fa-envelope">  &nbsp; &nbsp;</i></span> Poruke</a>
                <a href="index.php?page=bolovanje" class="nav-item nav-bolovanje"><span class='icon-field'>&nbsp;<i class="fas fa-calendar-check">  &nbsp; &nbsp;</i></span> Bolovanje</a>

                <hr class="hr-custom">
                <img class="nav-item" src="../images/inz_logo_-1.png" width="200px" height="60px" alt="">

                <a href="../logout.php" class="nav-item nav-deductions"><span class='icon-field'><i class="fas fa-sign-out-alt"> &nbsp; &nbsp;</i></span> LogOut</a>
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