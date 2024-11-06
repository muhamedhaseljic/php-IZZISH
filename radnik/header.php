<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee Dashboard</title>
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/medical-specialties-set-3/256/Emergency_Medicine-512.png" type="image/png">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/bootstrap4-retro.min.css">
    <link rel="stylesheet" href="../css/bootstrap4-retro.css">
    
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Shrikhand" rel="stylesheet">
    
    
  </head>
  <style>
    body{
        user-select: none; 
        
    }
    #sidebar.closed {
    transform: translateX(-270px);
}

#toggleButton {
    position: fixed;
    left: 10px;
    top: 10px;
    background-color: #ebeef5;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    width: 50px;
    padding-left: 50px;
    z-index: 100; /* Increase the z-index */
    margin-left:232px;
    
}

   #toggleButton:focus {
      outline: none;
      box-shadow: none; /* Removes the white border or shadow */
   }

   #toggleButton:active {
      outline: none;
      border: none;
      box-shadow: none; /* Removes border on active state */
   }


.icon-open {
    /* Styles for open icon */
    background-image: '../images/Stethoscope.png'; /* Example for image */
}

.icon-close {
    /* Styles for close icon */
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQK7g27Jo9GbahWe2CeIOcWnQybtAqAl8cAiDWRJmo6VGPY1zmH-KcvO2vSuqbEA8eo-XQ&usqp=CAU'); /* Example for image */
}

.icon-open::before {
    content: '\f054'; /* FontAwesome icon for 'Open' */
    font-family: FontAwesome; /* Adjust to your icon library */
}

.icon-close::before {
    content: '\f057'; /* FontAwesome icon for 'Close' */
    font-family: FontAwesome; /* Adjust to your icon library */
}
#toggleIcon {
      font-size: 30px;  /* Custom size for the icon */
      color:#132650;

    }

  </style>
  <body>
  <?php
require_once "../config/config.php";
require_once "Radnik.php";
$radnik = new Radnik();

?>