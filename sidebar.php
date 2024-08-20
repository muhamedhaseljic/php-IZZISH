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
    font-weight: 600;
}
a.nav-item:hover{
    background-color:#6c68fb;
    
    color: black;
    text-decoration:none;
    border-radius: 10px;
}
.nav-item.active {
    background-color:#6c68fb;
    
    color: black;
    text-decoration:none;
    border-radius: 10px;
}
.sidebar-custom{
    background-color: #16171b;
}
div.nav-item{
    position: relative;
    display: block;
    padding: 0.55rem 0.35rem;
    margin-bottom: -1px;
    
    background-color: #16171b;
    color: white;
    font-weight: 400;
    margin-bottom:50px;
}
</style>

<nav id="sidebar" class='mx-lt-5 sidebar-custom' >
		
		<div class="sidebar-list">
                <div class="nav-item">
                    <img class="nav-item" src="images/Haseljić Muhamed_pp.jpg" width="80px" height="100px" alt="">
                    <br><span>Ime </span>
                    <span>Role | Admin</span>
                </div>

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"> &nbsp; &nbsp;</i></span> Home</a>
				<a href="index.php?page=attendance" class="nav-item nav-attendance"><span class='icon-field'><i class="fa fa-th-list"></i></span> Attendance</a>
				<a href="index.php?page=payroll" class="nav-item nav-payroll"><span class='icon-field'><i class="fa fa-columns"></i></span> Payroll List</a>
				<a href="index.php?page=employee" class="nav-item nav-employee"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Employee List</a>
				<a href="index.php?page=department" class="nav-item nav-department"><span class='icon-field'><i class="fa fa-columns"></i></span> Depatment List</a>
				<a href="index.php?page=position" class="nav-item nav-position"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Position List</a>

				<a href="index.php?page=allowance" class="nav-item nav-allowance"><span class='icon-field'><i class="fa fa-list"></i></span> Allowance List</a>
				<a href="index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fa fa-money-bill-wave"></i></span> Deduction List</a>		
					
				
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
                <a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				
			
		</div>

</nav>