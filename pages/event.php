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
      border: .5em solid #9CC4E4;
      border: collapse;
      padding: .5em;
      background-color: #2978B8;
      color: #DDDDDD;
    }
    h3 {
      font-weight: bold;
    }
    .information {
      border: .5em solid #9CC4E4;
      border: collapse;
      padding: .5em;
      background-color: #2978B8;
      color: #DDDDDD;
    }
  </style>
</head>
<body>
  <div class="w3-bar w3-red">
    <h1 id="header">Welcome to the 2020 NLC at Washington D.C. Information Website</h1>
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
            <h2 class="sidebarHead"><b>Relevent Sites</b></h2>
          <hr>
          <ul class="sidebarSite">
            <li class="link"><a href="https://www.marriott.com/hotels/travel/wasgn-gaylord-national-resort-and-convention-center/" target="_blank">Gaylord National Resort</a></li>
            <li class="link"><a href="http://www.bpa.org/nlc/generalinfo" target="_blank">NLC General Info (bpa.org)</a></li>
          </ul>
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


        <div class="information">
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

        <h2 id="eventHead">NLC Schedule &#9660;</h2>
        <div class="infoText" id="event">
          <p>The 2020 NLC schedule has not been released yet.</p>
          <p>Please reference the <a href="http://www.bpa.org/nlc/postcon" target="_blank">2018 NLC Schedule</a> for an idea of the format.</p>
          </div>
      </div>
    </div>
      <div id="base" class="gridStyle">
        <div>
            <p>
              Connect With National BPA:
              <a class="w3-button userFeatures" href="https://www.facebook.com/businessprofessionalsofamerica" target="_blank" style="color:darkblue">Facebook</a>
              <a class="w3-button userFeatures" href="https://www.instagram.com/bpanational/" target="_blank" style="color:darkblue">Instagram</a>
              <a class="w3-button userFeatures" href="https://twitter.com/National_BPA" target="_blank" style="color:darkblue">Twitter</a>
            </p>
        </div>
    </div>
</div>
</body>
</html>
