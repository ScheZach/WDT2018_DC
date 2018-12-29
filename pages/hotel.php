<!DOCTYPE html>
<html>
<head>
  <title>Hotel: Washington DC Nationals Guide</title>
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
  .infoGrid {
    display: grid;
    grid-template-columns: 50% 50%;
    grid-template-rows: auto;
    grid-template-areas: "hotel image";
    grid-gap: .25em;
  }
  @media screen and (max-width: 40em) {
    .infoGrid {
      display: grid;
      grid-template-columns: 100%;
      grid-template-rows: auto auto;
      grid-template-areas: "hotel" "image";
      grid-gap: .25em;
    }
  }
  @media screen and (max-width: 80em) {
    .infoGrid {
      display: grid;
      grid-template-columns: 100%;
      grid-template-rows: auto auto;
      grid-template-areas: "hotel" "image";
      grid-gap: .25em;
    }
  }
  #gaylordImage {
    margin: .5em;
    margin-bottom: .75em;
    grid-area: image;
  }
  #floatClear {
    clear: left;
  }
  #hotelMap {
    margin: .5em;
    margin-bottom: .75em;
    grid-area: hotel;
  }
  #locationText {
    text-align: center;
  }
  .infoText {
    border: .5em solid #9CC4E4;
    border: collapse;
    padding: .5em;
    background-color: #1867A7;
    color: #DDDDDD;
  }
  ul {
    font-size: 1.5em;
  }
  p {
    font-size: 1.5em;
  }
  .HotelHead {
    font-size: 1.75em;
  }
  .HotelHead:hover {
    color: #BBBBBB;
  }
  .information {
    border: .5em solid #9CC4E4;
    border: collapse;
    padding: .5em;
    background-color: #2978B8;
    color: #DDDDDD;
  }
  </style>
  <script>
  $(document).ready(function(){
    $("#FeaturesInfo").hide();
    $("#HarborInfo").hide();

    $("#FeaturesHead").click(function() {
      $("#FeaturesInfo").slideToggle();
    });
    $("#HarborHead").click(function() {
      $("#HarborInfo").slideToggle();
    });

  });
  </script>
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
            <li class="link"><a href="https://www.nationalharbor.com/" target="_blank">National Harbor</a></li>
          </ul>
      </div>
      <div id="main" class="gridStyle">
        <h2 id="locationText"><b>Gaylord National Resort & Convention Center Features</b></h2>
        <div class="infoGrid">
        <div id="hotelMap">
        <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Gaylord+National+Resort,Fort+Washington,MD+20745" allowfullscreen>
      </iframe>
    </div>
      <div id="gaylordImage">
        <img src="../images/Gaylord.jpg" width="100%" height="100%" alt="Gaylord"></img>
    </div>
  </div>
      <div class="information">
        <h3 id="FeaturesHead" class="HotelHead">The Gaylord has many amenities, including: &#9660;</h3>
        <div class="infoText" id="FeaturesInfo">
          <ul>
            <li>A full service spa</li>
            <li>Fitness center</li>
            <li>Pool</li>
            <li>Spa</li>
            <li>Golf</li>
            <li>Outdoor activites (e.g., kayaking, biking, horseback riding, etc.)</li>
            <li>Meeting Space</li>
            <li>Car rentals</li>
            <li>Video Games / Game room</li>
            <li>Breakfast (with a fee)</li>
            <li>Barber/Beauty Shop</li>
            <li>Cash Macine/ATM</li>
            <li>Daily housekeeping</li>
          </ul>
        </div>
        <h3 id="HarborHead" class="HotelHead">The Gaylord also offers convenient access to the National Harbor, shopping, and dining experiences. &#9660;</h3>
        <div class="infoText" id="HarborInfo">
          <p>The National Harbor has events going on all the time. Please see their <a href="https://www.nationalharbor.com/events/">
            calendar</a> for the most updated events.</p>
            <ul>
              <li><a href="https://www.nationalharbor.com/dine/">Dine at the National Harbor</a></li>
              <li><a href="https://www.nationalharbor.com/play/">Play at the National Harbor</a></li>
              <li><a href="https://www.nationalharbor.com/shop/">Shop at the National Harbor</a></li>
            </ul>
        </div>
      </div>
      </div>
      <div id="base" class="gridStyle">
        <div>
            <p>
              Connect With National BPA:<br>
              <a class="w3-button userFeatures" href="https://www.facebook.com/businessprofessionalsofamerica" target="_blank" style="color:darkblue">Facebook</a>
              <a class="w3-button userFeatures" href="https://www.instagram.com/bpanational/" target="_blank" style="color:darkblue">Instagram</a>
              <a class="w3-button userFeatures" href="https://twitter.com/National_BPA" target="_blank" style="color:darkblue">Twitter</a>
            </p>
        </div>
      </div>
    </div>
</div>
</body>
</html>
