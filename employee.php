
<div class="roww  ">
  <div class=" custom-card-header card-header row-top-form align-items-center">
            <div class="col-md-6 ">
              <span class="naziv"><b>Lista radnika</b></span>
              <div class="input-group">
              <input type="text" class="custom-form-control" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class=" btn-light link-edit">Search</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-right">
						<button class="float-right link-edit btn-success" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Add Employee</button>
          </div>
    </div>
    <div class=" scrolling-div">

      

      <table class="table-responsive table-listItems table-border  table-dark table-hover table-sm" style="border-width:10px">
  <thead class="table-active">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime</th>
      <th scope="col">Slika</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adresa</th>
      <th scope="col">Odjel</th>
      <th scope="col">Akcije</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
      //int i;
      for($i=1;$i<10;$i++) :

      ?>
  
    <tr">
      <th scope="row"><?php echo $i; ?></th>
      <td>
        
        Some item on your list
        
      </td>
      <td>
        
        neko prezime
        
      </td>
      <td>
        
        neki mejl
        
      </td>
      <td>
        
        neka slika
        
      </td>
      <td>
        
        tehnicar
        
      </td>
      <td>

      <a href="#" class="btn btn-sm btn-light my-1 my-sm-0">
          <span class="fas fa-eye mr-1"></span>
          </a>

        <a href="#!" class="link-edit btn-sm my-1 my-sm-0">
        <span span class="fas fa-edit mr-1"></span>
        </a>
        
        <a href="#" class="btn btn-sm btn-danger my-1 my-sm-0">
          <span class="fas fa-trash mr-1"></span>
          </a>

          
      </td>
    </tr>
    <?php endfor; ?>
    </tbody>
</table>
</div>
</div>