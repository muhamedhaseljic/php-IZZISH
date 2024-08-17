<?php

require_once "header.php";

?>


  
<div class="container  mb5">
  

  <div class="roww col-lg-12">
    
    <div class="col-md-9 card">

      

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
  
    <?php require_once "sidebar.php"; ?>

  <h1 class="razmak"></h1>

<?php

require_once "footer.php";

?>