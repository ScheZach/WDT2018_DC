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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style>
    #locationText {

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
        <?php echo "php works";?>

      </div>
      <div id="main" class="gridStyle">
        <div id="location">
          <iframe id="conMap" width="650" height="450" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Gaylord+National+Resort,Fort+Washington,MD+20745" allowfullscreen>
          </iframe>
          <br>
          <h2 id="locationText">The 2020 National Leadership Conference is held at the Gaylord National Resort & Convention Center</h2>
          <br id="floatClear">
        </div>
        <div class="infoText" id="convention">
          <h2 id="conventionHead">Gaylord National Resort & Convention Center has these features &#9660;</h2>
        </div>
        <div class="infoText" id="event">
          <h2 id="eventHead">Here is the general list of events &#9660;</h2>
        </div>
        <div class="infoText" id="dressCode">
          <h2 id="dressCodeHead">Here is the dress code &#9660;</h2>
        </div>
      </div>
      <div id="base" class="gridStyle">

      </div>
    </div>
</div>
</body>
</html>
