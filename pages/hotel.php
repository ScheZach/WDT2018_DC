<!DOCTYPE html>
<html>
<head>
  <title>Hotel: Washington DC Nationals Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../images/togetherwecreatesm.png">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.1.0/umd/react.development.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.1.0/umd/react-dom.development.js"></script>
  <script src="../js/babel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
  <!--
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  -->
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
  .gaylordImage {
    margin: .5em;
    margin-bottom: .75em;
    border: .25em solid #000000;
    grid-area: image;
  }
  #floatClear {
    clear: left;
  }
  .hotelMap {
    margin: .5em;
    margin-bottom: .75em;
    grid-area: hotel;
  }
  .locationText {
    text-align: center;
  }
  .infoText {
    border: .5em solid #ff0000;
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
  .StateButton {
    color: #000000;
    font-size: 1.5em;
    border-radius: 15%;
    margin: .25em;
    margin-bottom: .15em;
    padding: .20em;
  }
  .StateDropdown {
    border-radius: 7%;
    font-size: 1.25em;
    background-color: #1867A7;
    color: #FFFFFF;
  }
  option {
    font-size: .75em;
    background-color: #FFFFFF;
    color: #000000;
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
  h1 {
    font-size: 2em;
  }
  .mapBorder {
    border: .25em solid #000000;
  }
  </style>
  <script>
  $(document).ready(function(){
    $("#FeaturesInfo").hide();
    $("#HarborInfo").hide();
    $("#FeaturesInfoWestin").hide();
    $("#FeaturesInfoAC").hide();
  //  $("#FeaturesInfoAlpha").hide();

    $("#FeaturesHead").click(function() {
      $("#FeaturesInfo").slideToggle();
    });
    $("#HarborHead").click(function() {
      $("#HarborInfo").slideToggle();
    });
    $("#FeaturesHeadWestin").click(function() {
      $("#FeaturesInfoWestin").slideToggle();
    });
    $("#FeaturesHeadAC").click(function() {
      $("#FeaturesInfoAC").slideToggle();
    });
    //$("#FeaturesHeadAlpha").click(function() {
      //$("#FeaturesInfoAlpha").slideToggle();
    //});

  });
  </script>
</head>
<body>
  <div class="w3-bar ribbonBack">
  <h1 id="header" class="HeadCenter">Welcome to the 2020 NLC at Washington D.C. Information Website</h1>
  <div class="w3-bar LinkColor">
    <a href="../home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
    <a href="event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
    <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
    <a href="hotel.php" class="w3-bar-item w3-button w3-hover-blue w3-light-blue">Hotel</a>
    <a href="food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
    <a href="activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
    <a href="QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
    <div class="w3-dropdown-hover w3-right">
      <button class="w3-button">User Login &#9660;</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="../php/login.php" class="w3-bar-item w3-button UserLink">Log In</a>
        <a href="../php/createUser.php" class="w3-bar-item w3-button UserLink">Create User</a>
        <a href="../php/logout.php" class="w3-bar-item w3-button UserLink">Log Out</a>
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
            <li class="link"><a href="https://www.marriott.com/hotels/travel/washw-the-westin-washington-national-harbor/" target="_blank">The Westin Washington National Harbor</a></li>
            <li class="link"><a href="https://www.marriott.com/hotels/travel/waswa-ac-hotel-national-harbor-washington-dc-area/" target="_blank">AC Hotel National Harbor</a></li>
          </ul>
      </div>
      <div id="main" class="gridStyle">
        <div>
        <h1><b>Please select your state or territory to see information about your hotel</b></h1>
        <div class="information">
          <select class="StateButton StateDropdown" name="stateName" id="state">
            <option value="">Your State</option>
            <option value="alabama">Alabama</option> <!--works -->
            <option value="alaska">Alaska</option> <!--works -->
            <option value="arizona">Arizona</option> <!--works -->
            <option value="arkansas">Arkansas</option> <!--works -->
            <option value="california">California</option> <!--works -->
            <option value="colorado">Colorado</option> <!--works -->
            <option value="connecticut">Connecticut</option> <!--works -->
            <option value="delaware">Delaware</option> <!--works -->
            <option value="flordia">Flordia</option> <!--works -->
            <option value="georgia">Georgia</option> <!--works -->
            <option value="hawaii">Hawaii</option> <!--works -->
            <option value="idaho">Idaho</option> <!--works -->
            <option value="illinois">Illinois</option> <!--works -->
            <option value="indiana">Indiana</option> <!--works -->
            <option value="iowa">Iowa</option> <!--works -->
            <option value="kansas">Kansas</option> <!--works -->
            <option value="kentucky">Kentucky</option> <!--works -->
            <option value="louisana">Louisana</option> <!--works -->
            <option value="maine">Maine</option> <!--works -->
            <option value="maryland">Maryland</option> <!--works -->
            <option value="massachusetts">Massachusetts</option> <!--works -->
            <option value="michigan">Michigan</option> <!--works -->
            <option value="minnesoda">Minnesoda</option> <!--works -->
            <option value="misssissippi">Mississippi</option> <!--works -->
            <option value="missouri">Missouri</option> <!--works -->
            <option value="montana">Montana</option> <!--works -->
            <option value="nebraska">Nebraska</option> <!--works -->
            <option value="nevada">Nevada</option> <!--works -->
            <option value="newHampshire">New Hampshire</option> <!--works -->
            <option value="newJersey">New Jersey</option> <!--works -->
            <option value="newMexico">New Mexico</option> <!--works -->
            <option value="newYork">New York</option> <!--works -->
            <option value="northCarolina">North Carolina</option> <!--works -->
            <option value="northDakota">North Dakota</option> <!--works -->
            <option value="ohio">Ohio</option> <!--works -->
            <option value="oklahoma">Oklahoma</option> <!--works -->
            <option value="oregon">Oregon</option> <!--works -->
            <option value="pennsylvania">Pennsylvania</option> <!--works -->
            <option value="rhodeIsland">Rhode Island</option> <!--works -->
            <option value="southCarolina">South Carolina</option> <!--works -->
            <option value="southDakota">South Dakota</option> <!--works -->
            <option value="tennessee">Tennessee</option> <!--works -->
            <option value="texas">Texas</option> <!--works -->
            <option value="utah">Utah</option> <!--works -->
            <option value="vermont">Vermont</option> <!--works -->
            <option value="virginia">Virginia</option> <!--works -->
            <option value="washington">Washington</option> <!--works -->
            <option value="westVirginia">West Virginia</option> <!--works -->
            <option value="wisconsin">Wisconsin</option> <!--works -->
            <option value="wyoming">Wyoming</option> <!--works -->
            <option value="puertoRico">Puerto Rico</option> <!--works -->
          </select>
          <div id="root"></div>
        </div>
        </div>
        <h1><b>The National Leadership Conference uses multiple hotels for lodging. These are some possible hotels for your chapter.</b></h1>
        <div class="information">
        <h2 class="locationText"><b>Gaylord National Resort & Convention Center Features</b></h2>
        <div class="infoGrid">
        <div class="hotelMap">
        <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Gaylord+National+Resort,Fort+Washington,MD+20745" allowfullscreen>
      </iframe>
    </div>
      <div class="gaylordImage">
        <img src="../images/Gaylord.jpg" width="100%" height="100%" alt="Gaylord"></img>
    </div>
  </div>
        <hr>
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
            <li>Cash Machine/ATM</li>
            <li>Daily housekeeping</li>
          </ul>
        </div>
      </div>
      <div class="information">
        <h2 class="locationText"><b>The Westin Washington National Harbor Features</b></h2>
        <div class="infoGrid">
        <div class="hotelMap">
        <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=The+Westin+Washington+National+Harbor,National+Harbor,MD+20745" allowfullscreen>
      </iframe>
    </div>
      <div class="gaylordImage">
        <img src="../images/Westin.jpg" width="100%" height="100%" alt="Gaylord"></img>
    </div>
  </div>
        <hr>
        <h3 id="FeaturesHeadWestin" class="HotelHead">The Westin Washington has many amenities, including: &#9660;</h3>
        <div class="infoText" id="FeaturesInfoWestin">
          <ul>
            <li>A "pets welcome" policy</li>
            <li>Breakfast options (with a fee)</li>
            <li>Two restaurants: Sauciety (american), Lobby Bar (cajun)</li>
            <li>24 hour room service</li>
            <li>On-site laundry</li>
            <li>Valet dry-cleaning</li>
            <li>Daily housekeeping</li>
            <li>Car rentals</li>
            <li>Air conditioning</li>
            <li>Cable/Satellite TV</li>
            <li>Beauty Shop</li>
            <li>Limousine service</li>
            <li>Fitness center</li>
            <li>Indoor pool with a Whirlpool</li>
          </ul>
        </div>
      </div>
      <div class="information">
      <h2 class="locationText"><b>AC Hotel National Harbor Features</b></h2>
      <div class="infoGrid">
      <div class="hotelMap">
      <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=AC+Hotel+by+Marriott+National+Harbor+Washington,DC+Area,National+Harbor,MD+20745" allowfullscreen>
    </iframe>
  </div>
    <div class="gaylordImage">
      <img src="../images/AC.JPG" width="100%" height="100%" alt="Gaylord"></img>
  </div>
</div>
      <hr>
      <h3 id="FeaturesHeadAC" class="HotelHead">The AC Hotel has many amenities, including: &#9660;</h3>
      <div class="infoText" id="FeaturesInfoAC">
        <ul>
          <li>Breakfast options (with a fee)</li>
          <li>Convenience store</li>
          <li>Two restaurants: AC Kitchen (European), AC Lounge (Tapas)</li>
          <li>Daily housekeeping</li>
          <li>Valet dry-cleaning</li>
          <li>Limousine service</li>
          <li>Car rentals</li>
          <li>Air conditioning</li>
          <li>Cable/satellite TV</li>
          <li>Fitness Center</li>
          <li>Outdoor Activities near by (e.g. boating, bowling, miniature golf and golf)</li>
        </ul>
      </div>
    </div>
      <div class="information">
        <h3 id="HarborHead" class="HotelHead">The National Harbor area offers convenient access to the National Harbor, shopping, and dining experiences. &#9660;</h3>
        <div class="infoText" id="HarborInfo">
          <p>The National Harbor has events going on all the time. Please see their <a class="infoLink" href="https://www.nationalharbor.com/events/">
            calendar</a> for the most updated events.</p>
            <ul>
              <li><a class="infoLink" href="https://www.nationalharbor.com/dine/">Dine at the National Harbor</a></li>
              <li><a class="infoLink" href="https://www.nationalharbor.com/play/">Play at the National Harbor</a></li>
              <li><a class="infoLink" href="https://www.nationalharbor.com/shop/">Shop at the National Harbor</a></li>
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
<script type="text/babel" src="../js/yourhotel.js"></script>
</body>
</html>
