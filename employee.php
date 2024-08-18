
<div class="roww  ">
  <div class=" custom-card-header card-header row-top-form align-items-center">
            <div class="col-md-6 ">
              <span class="naziv"><b>Lista radnika</b></span>
              <div class="input-group">
              <input type="text" class="custom-form-control" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class=" link-edit">Search</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-right">
						<button class="float-right link-edit " type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Add Employee</button>
          </div>
    </div>
    <div class=" scrolling-div">

      

      <table class="table-listItems table-bordered table-striped">
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
    </tbody>
</table>
</div>
</div>