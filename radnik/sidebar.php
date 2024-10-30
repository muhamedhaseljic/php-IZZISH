
<?php
require_once "../config/config.php";
require_once "Radnik.php";
$radnik = new Radnik();

?>

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
    
    background-color: #171c22;
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
    background-color: #171c22;
}
div.nav-item{
    position: relative;
    display: flex;
    padding: 0.55rem 0.35rem;
    margin-bottom: -1px;
    
    background-color: #171c22;
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
    background-color: #171c22;
    color: white;
    font-weight: 400;
    margin-bottom:110px;
    margin-top: 238px;
}
.sidebar-custom  a.nav-item:last-child {
    position: relative;
    display: flex;
    padding: 0.55rem 0.95rem;
    margin-bottom: -1px;
    
    background-color: #171c22;
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
    font-size:12px;
    color:white;
    place-content:center;
    
}
.sidebar-list h3.nav-item{
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
                <?php $employee_data = $radnik->get_employee_data() ?>
                    <img class="boja-pozadine" src="<?php echo "../images/" . $employee_data['photo_path'] ?>" width="70px" height="70px" alt="">                   
                </div>
                <h2 class="nav-item"><?=$employee_data['first_name'] . " ". $employee_data['last_name']?></h2>
                <h3 class="nav-item"><?php if($employee_data['is_admin'] == 1) echo "Admin"; else echo "Radnik"; ?></h3>

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'>&nbsp;<i class="fa fa-user">  &nbsp; &nbsp;</i></span> Profil</a>
                <a href="index.php?page=radna_sedmica" class="nav-item radna_sedmica"><span class='icon-field'>&nbsp;<i class="fas fa-calendar-week">  &nbsp; &nbsp;</i></span> Radna sedmica</a>
                <a href="index.php?page=poslovi" class="nav-item poslovi"><span class='icon-field'>&nbsp;<i class="fas fa-tasks">  &nbsp; &nbsp;</i></span> Poslovi</a>
                <a href="index.php?page=poruke" class="nav-item poruke"><span class='icon-field'>&nbsp;<i class="fas fa-envelope">  &nbsp; &nbsp;</i></span> Poruke</a>
                <img class="nav-item" src="../images/inz_logo_-1.png" width="200px" height="60px" alt="">

                <a href="http://localhost/retro/index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fas fa-sign-out-alt"> &nbsp; &nbsp;</i></span> LogOut</a>
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