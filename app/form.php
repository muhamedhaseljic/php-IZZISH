<?php

require_once "header.php";

?>

  
<div class="container py-5 mb5">

<h1 class="mb-5"> <b> Institut za zdravlje i sigurnost hrane </b></h1>

  <div class="row justify-content-md-center">
    
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Registration</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="password">Password </label>
          <input type="password" class="form-control" id="password" placeholder="******">
          <div class="invalid-feedback">
            Please enter a valid password.
          </div>

        </div>

        <a href="#!" class="btn btn-block btn-success">Registration</a>

      </form>
    </div>
  </div>

  <h1 class="proba">cao</h1>
  <?php

require_once "footer.php";

?>