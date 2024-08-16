<?php

require_once "header.php";

?>


  
<div class="container  mb5">
  <h1 class="mb-5 naslov"> <b> Institut za zdravlje i sigurnost hrane </b></h1>

  <div class="roww ">
    
    <div class="col-md-9">

      <div class="row d-none">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">
                Some quick example text to build on the card title
                and make up the bulk of the card's content.
              </p>
              <!--<a href="#!" class="btn btn-primary">Go somewhere</a>-->
            </div>
          </div>
        </div>
      </div>

      <table class="table-listItems">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime</th>
      <th scope="col">Slika</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adresa</th>
      <th scope="col">Odjel</th>
      <th scope="col">Uredi / Obriši</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
      //int i;
      for($i=1;$i<10;$i++) :

      ?>
  
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td>
        <a href="#">
        Some item on your list
        </a>
      </td>
      <td>
        <a href="#">
        neko prezime
        </a>
      </td>
      <td>
        <a href="#">
        neki mejl
        </a>
      </td>
      <td>
        <a href="#">
        neka slika
        </a>
      </td>
      <td>
        <a href="#">
        tehnicar
        </a>
      </td>
      <td>
        <a href="#!" class="link-edit btn-sm my-1 my-sm-0">
        <span span class="fas fa-edit mr-1"></span>
        Uredi</a>
        
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0">
          <span class="fas fa-trash mr-1"></span>
          Obriši</a>
      </td>
    </tr>
    <?php endfor; ?>
  
    <div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6 '> 
        <div class='user-profile'> 
						<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
        <div class='user-names'> 
						<p>Muhamed</p> 
					</div>
					
					<div class='user-role'> 
          <p>Admin</p> 
					</div>
				</div> 
			</div> 
			<ul class='sidebar-menu'>
				<li><a href='index.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png'  /> Dashboard</a></li>
				<li><a href='profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' src='images/ic_account_box_white_24dp.png'  /> Profile</a></li>
				<li><a href='patients.php'><img class='sidebar-menu-icon' src='images/ic_assignment_ind_white_24dp.png'  /> Radnici</a></li>
				<li><a href='add-doctors.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png'  /> Auta</a></li>
				<li><a href='doctors-record.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png'  /> Poslovi</a></li>
				<li><a href='appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  /> Firme</a></li>
				<!--<li><a href='enquiry.php'><img class='sidebar-menu-icon' src='images/ic_help_outline_white_24dp.png'  /> Enquiry</a></li>-->
				<li><a href='add-outbreak.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png'  /> Historija</a></li>
				
			</ul> 
		</div> 
	</div>

<?php

require_once "footer.php";

?>