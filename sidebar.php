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
    padding: 0.55rem 0.95rem;
    margin-bottom: -1px;
    
    background-color: #16171b;
    color: white;
    font-weight: 100;
}
a.nav-item:hover{
    background-color:#6b69f8;
    
    color: black;
    text-decoration:none;
    border-radius: 10px;
}
.nav-item.active {
    background-color:#6b69f8;
    
    color: black;
    text-decoration:none;
    border-radius: 10px;
}
.sidebar-custom{
    background-color: #16171b;
}
div.nav-item{
    position: relative;
    display: flex;
    padding: 0.55rem 0.35rem;
    margin-bottom: -1px;
    
    background-color: #16171b;
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
    background-color: #16171b;
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
    
    background-color: #16171b;
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
h3.nav-item{
    display: flex;
    font-size:12px;
    color:white;
    place-content:center;
    margin-bottom:50px;
}
</style>

<nav id="sidebar" class='mx-lt-5 sidebar-custom' >
		
		<div class="sidebar-list">
                <div class="nav-item">
                    <img class="" src="images/Haseljić Muhamed_pp.jpg" width="70px" height="70px" alt="">                   
                </div>
                <h3 class="nav-item">Muhamed haseljić</h3>

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"> &nbsp; &nbsp;</i></span> Home</a>
				<a href="index.php?page=attendance" class="nav-item nav-attendance"><span class='icon-field'><i class="fa fa-th-list">  &nbsp; &nbsp;</i></span> Attendance</a>
				<a href="index.php?page=payroll" class="nav-item nav-payroll"><span class='icon-field'><i class="fa fa-columns">  &nbsp; &nbsp;</i></span> Payroll List</a>
				<a href="index.php?page=employee" class="nav-item nav-employee"><span class='icon-field'><i class="fa fa-user-tie"> &nbsp; &nbsp;</i></span> Employee List</a>
				<a href="index.php?page=department" class="nav-item nav-department"><span class='icon-field'><i class="fa fa-columns"> &nbsp; &nbsp;</i></span> Depatment List</a>
				<a href="index.php?page=position" class="nav-item nav-position"><span class='icon-field'><i class="fa fa-user-tie"> &nbsp; &nbsp;</i></span> Position List</a>

				<a href="index.php?page=allowance" class="nav-item nav-allowance"><span class='icon-field'><i class="fa fa-list"> &nbsp; &nbsp;</i></span> Allowance List</a>
				<a href="index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fa fa-money-bill-wave"> &nbsp; &nbsp;</i></span> Deduction List</a>		
				<img class="nav-item" src="inz_logo_-1.png" width="200px" height="60px" alt="">

                <a href="index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fas fa-sign-out-alt"> &nbsp; &nbsp;</i></span> LogOut</a>
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