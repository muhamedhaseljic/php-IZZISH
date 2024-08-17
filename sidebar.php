<style>
	nav#sidebar {
    margin-top: -48px;
    height: calc(100%);
    position: sticky; 
    z-index: 99;
    left: 0;
    width: 15%;
    
    /*background: url(assets/img/payroll-cover.jpg);
    background-repeat: no-repeat;
    background-size: cover;*/
}

a.nav-item {
    position: relative;
    display: block;
    padding: .95rem 1.55rem;
    margin-bottom: -1px;
    border: 1px solid rgba(0,0,0,.125);
    background-color: #dbe9d8;
    color: #434952;
    font-weight: 600;
}
a.nav-item:hover, .nav-item.active {
    background-color:#202020;
    color: #fffafa;
}

</style>

<nav id="sidebar" class='mx-lt-5 bojapozadine' >
		
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
				
			
		</div>

</nav>