<!DOCTYPE html>
<html>
<head>
  <title>Event: Washington DC Nationals Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="../js/pages.js" charset="utf-8"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style>
    #locationText {
      text-align: center;
    }
    #conMap {
      float: left;
      margin: .5em;
      margin-bottom: .75em;
    }
    #floatClear {
      clear: left;
    }
    .infoText {
      margin: .75em;
    }
    h3 {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="w3-bar w3-red">
    <h1 id="header">Welcome to the 2020 NLC at Washington D.C. Informatation Website</h1>
    <div class="w3-bar LinkColor">
      <a href="../home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
      <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
      <a href="hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
      <a href="food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
      <a href="activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
      <a href="QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
      <div class="w3-dropdown-hover w3-right">
        <button class="w3-button">User Login &#9660;</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="../php/login.php" class="w3-bar-item w3-button">Log In</a>
          <a href="../php/createUser.php" class="w3-bar-item w3-button">Create User</a>
          <a href="../php/logout.php" class="w3-bar-item w3-button">Log Out</a>
        </div>
</div>
    </div>
  </div>
  <div class="w3-container">
    <div class="grid-container">
      <div id="sidebar" class="gridStyle">
        <h3><b>Table of Contents:</b></h3>
        <p>Convetion Center Location</p>
        <p>Convention Center Features</p>
        <p>Dress Code</p>
        <p>General List of Events</p>
      </div>

      <div id="main" class="gridStyle">
        <div id="location">
          <iframe id="conMap" width="650" height="450" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Gaylord+National+Resort,Fort+Washington,MD+20745" allowfullscreen>
          </iframe>
          <br>
          <h2 id="locationText">The 2020 National Leadership Conference is held at the <b>Gaylord National Resort & Convention Center</b></h2>
          <br id="floatClear">
        </div>

        <h2 id="conventionHead">Gaylord National Resort & Convention Center Features &#9660;</h2>
        <div class="infoText" id="convention">
          <p>Info</p>
        </div>

        <h2 id="dressCodeHead">Dress code &#9660;</h2>
        <div class="infoText" id="dressCode">
          <h3>Professional Dress Code:</h3>
          <p>Women Options:</p>
          <ul>
            <li>Pant or Suit Skirt</li>
            <li>Dress Skirt or Dress Slacks</li>
            <li>Dress</li>
            <li>BPA Blazer, dress skirt/slacks, blouse/sweater</li>
            <li>Required - Dress shoes with heel</li>
          </ul>
          <p>Men Options:</p>
          <ul>
            <li>Dress slacks, dress shirt, and tie</li>
            <li>Suit, dress shirt, and tie</li>
            <li>Sports coat, dress slacks, dress shirt, tie</li>
            <li>BPA Blazer, dress slacks, dress shirt, tie</li>
          </ul>
          <h3>Casual Dress Code:</h3>
          <p>Women and Men Options:</p>
          <ul>
            <li>Jeans, pants, shorts</li>
            <li>Shirt, t-shirt</li>
            <li>Footwear required</li>
          </ul>
          <h3>Unaccetable Clothing</h3>
          <ul>
            <li>Strapless, spaghetti straps, tube tops, halter tops, midriff tops</li>
            <li>Spandex, lycra, transparent clothing</li>
            <li>Cut-offs or ragged cltohing</li>
            <li>Innapropriate words and/or pictures</li>
            <li>During professional events, denim skirts</li>
          </ul><br>
          <a href="http://www.bpa.org/nlc/dresscode" target="_blank">Official Dress Code (bpa.org)</a>
        </div>

        <h2 id="eventHead">General list of events &#9660;</h2>
        <div class="infoText" id="event">
          <p>Info</p>
        </div>
      </div>
      <div id="base" class="gridStyle">

      </div>
    </div>
</div>
</body>
</html>
