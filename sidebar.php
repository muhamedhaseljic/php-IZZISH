<style>
	nav#sidebar {
    margin-top: -48px;
    height: 89vh;
    position: sticky; 
    padding: 20px;
    z-index: 99;
    left: 0;
    width: 15%;
    border: 1px solid black;
    /*background: url(assets/img/payroll-cover.jpg);
    background-repeat: no-repeat;
    background-size: cover;*/
}

a.nav-item {
    position: relative;
    display: block;
    padding: 0.55rem 0.95rem;
    
    margin-bottom: -1px;
    /*border: 1px solid black;*/
    background-color: #202020;
    color: white;
    font-weight: 600;
}
a.nav-item:hover {
    background-color:#6c68fb;
    color: black;
    text-decoration:none;
    border-radius: 10px;
}
.nav-item.active{
    background-color:#6c68fb;
    color: #fffafa;
    text-decoration:none;
}
</style>

<nav id="sidebar" class='mx-lt-5  bg-dark' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=attendance" class="nav-item nav-attendance"><span class='icon-field'><i class="fa fa-th-list"></i></span> Attendance</a>
				<a href="index.php?page=payroll" class="nav-item nav-payroll"><span class='icon-field'><i class="fa fa-columns"></i></span> Payroll List</a>
				<a href="index.php?page=employee" class="nav-item nav-employee"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Employee List</a>
				<a href="index.php?page=department" class="nav-item nav-department"><span class='icon-field'><i class="fa fa-columns"></i></span> Depatment List</a>
				<a href="index.php?page=position" class="nav-item nav-position"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Position List</a>

				<a href="index.php?page=allowances" class="nav-item nav-allowances"><span class='icon-field'><i class="fa fa-list"></i></span> Allowance List</a>
				<a href="index.php?page=deductions" class="nav-item nav-deductions"><span class='icon-field'><i class="fa fa-money-bill-wave"></i></span> Deduction List</a>		
					
				
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
                <a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				
			
		</div>

</nav>