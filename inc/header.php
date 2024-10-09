<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Institut za zdravlje i sigurnost hrane</title>

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/bootstrap4-retro.min.css">
    <link rel="stylesheet" href="../css/bootstrap4-retro.css">
    
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Shrikhand" rel="stylesheet">
    
    
  </head>
  <style>
    #sidebar.closed {
    transform: translateX(-250px);
}

#toggleButton {
    position: fixed;
    left: 10px;
    top: 10px;
    background-color: #171c22;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    width: 50px;
    z-index: 100; /* Increase the z-index */
    border:1px solid white;
    border-radius: 10px;
}


#toggleButton:hover {
    background-color: #171c22;
}
.icon-open {
    /* Styles for open icon */
    background-image: url('path/to/open-icon.png'); /* Example for image */
}

.icon-open::before {
    content: '\f054'; /* FontAwesome icon for 'Open' */
    font-family: FontAwesome; /* Adjust to your icon library */
}

.icon-close::before {
    content: '\f057'; /* FontAwesome icon for 'Close' */
    font-family: FontAwesome; /* Adjust to your icon library */
}


  </style>
  <body>