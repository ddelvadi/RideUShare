<?php

// Load the settings from the central config file
require_once 'includes/CAS/config.php';

// Load the CAS lib
require_once 'includes/CAS.php';

// Initialize phpCAS
phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);

// For production use set the CA certificate that is the issuer of the cert
// on the CAS server and uncomment the line below
phpCAS::setCasServerCACert($cas_server_ca_cert_path);

// force CAS authentication
phpCAS::forceAuthentication();

// at this step, the user has been authenticated by the CAS server
// and the user's login name can be read with phpCAS::getUser().

// for this test, simply print that the authentication was successfull
?>

<!DOCTYPE html>
<html lang="en" class="nojs">
<head>
    <title>Illinois Tech Ride Share - Ride Request</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="screen.css" />
    <script type="text/php" src="php/database.php"></script>
</head>

<body class="index">
  <header>
      <div class="banner">
        <a href="welcome.html">
          <img src="img/IITScarletHawks.png" alt="IIT Logo">
        </a>
      </div>
      <nav>
      <div class="navwrapper">
          <ul id="nav" class="navbar">
            <li class="nav active"><a href="welcome.html">Home</a></li>
            <li class="nav"><a href="request.html">Request Ride</a></li>
            <li class="nav"><a href="listride.html">List Ride</a></li>
            <li class="nav"><a href="https://iit.edu/news/iittoday/">IIT News</a></li>
            <li class="nav"><a href="redirect.html">Help</a></li>
            <li class="nav"><a href="index.html">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
   <!-- <div id="sidenavbar" class="sidenavbar">
      <ul id="nav" class="navbar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <li class="nav active"><a href="welcome.html">Home</a></li>
        <li class="nav"><a href="request.html">Request Ride</a></li>
        <li class="nav"><a href="listride.html">List Ride</a></li>
        <li class="nav"><a href="https://iit.edu/news/iittoday/">IIT News</a></li>
        <li class="nav"><a href="redirect.html">Help</a></li>
        <li class="nav"><a href="index.html">Logout</a></li>
      </ul>
    </div> -->

    <div id="mainnavbar">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>
    <main>
      <section class="greeting">
        Welcome, User!
      </section>
     </main>    

    <input id="origin-input" class="controls" type="text"
        placeholder="Enter an origin location">

    <input id="destination-input" class="controls" type="text"
        placeholder="Enter a destination location">

    <input id="button-to-submit" class="button-to-submit" type="button" value="submit">
    <!--<div id="mode-selector" class="controls">
      <input type="radio" name="type" id="changemode-walking" checked="checked">
      <label for="changemode-walking">Walking</label>

      <input type="radio" name="type" id="changemode-transit">
      <label for="changemode-transit">Transit</label>

      <input type="radio" name="type" id="changemode-driving">
      <label for="changemode-driving">Driving</label>
    </div> -->

    <div id = "map"></div>

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/site.js"></script> -->
    <script type="text/javascript" src="request.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6HYkswUWkVAfHAb4n33WiBocqk87GW3Y&libraries=places&callback=initMap"
        async defer></script>
    </script>
    
  
  
</body>
  
</html>