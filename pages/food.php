<!DOCTYPE html>
<html>
<head>
  <title>Food: Washington DC Nationals Guide</title>
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
    .foodGrid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-template-rows: auto auto;
      grid-template-areas: "American Mexican Asian"
                           "Mediterranean Dessert Coffee";
      grid-gap: .25em;
    }
    @media screen and (max-width: 40em) {
      .foodGrid {
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto auto auto auto;
        grid-template-areas: "American" "Mexican" "Asian"
                             "Mediterranean" "Dessert" "Coffee";
        grid-gap: .25em;
      }
    }
    #American {
      grid-area: American;
    }
    #Mexican {
      grid-area: Mexican;
    }
    #Asian {
      grid-area: Asian;
    }
    #Mediterranean {
      grid-area: Mediterranean;
    }
    #Dessert {
      grid-area: Dessert;
    }
    #Coffee {
      grid-area: Coffee;
    }
    .foodType {
      border: .5em solid #9CC4E4;
      border: collapse;
      padding: .75em;
      background-color: #2978B8;
      color: #DDDDDD;
    }
    .foodHead {
      text-align: center;
    }
    .foodHead:hover {
      color: #BBBBBB;
    }
    .foodMap {
      float: left;
    }
    .FloatCancel {
      clear: left;
    }
    table {
      text-align: right;
    }
  </style>
  <script>
    $(document).ready(function() {
      $(".AmericanInfo").hide();
      $(".MexicanInfo").hide();
      $(".AsianInfo").hide();
      $(".MediterraneanInfo").hide();
      $(".DessertInfo").hide();
      $(".CoffeeInfo").hide();

      $("#AmericanHead").click(function() {
        $(".AmericanInfo").slideToggle();
      });
      $("#MexicanHead").click(function(){
        $(".MexicanInfo").slideToggle();
      });
      $("#AsianHead").click(function(){
        $(".AsianInfo").slideToggle();
      });
      $("#MediterraneanHead").click(function() {
        $(".MediterraneanInfo").slideToggle();
      });
      $("#DessertHead").click(function() {
        $(".DessertInfo").slideToggle();
      });
      $("#CoffeeHead").click(function() {
        $(".CoffeeInfo").slideToggle();
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
          <li class="link"><a href="http://www.bpa.org/" target="_blank">BPA.org</a></li>
          <li class="link"><a href="https://www.potbelly.com/" target="_blank">Potbelly Sandwich Shop</a></li>
          <li class="link"><a href="https://potomacgourmetmarket.com/" target="_blank">Potomac Gormet Market</a></li>
          <li class="link"><a href="http://elevationburger.com/" target="_blank">Elevation Burger</a></li>
          <li class="link"><a href="https://www.subway.com/en-US" target="_blank">Subway</a></li>
          <li class="link"><a href="https://www.chipotle.com/" target="_blank">Chipotle Mexican Grill</a></li>
          <li class="link"><a href="https://rosamexicano.com/" target="_blank">Rosa Mexicano</a></li>
          <li class="link"><a href="http://www.thaipavilionrestaurant.com/" target="_blank">Thai Pavilion</a></li>
          <li class="link"><a href="http://www.gracesrestaurants.com/" target="_blank">Grace’s Mandarin</a></li>
          <li class="link"><a href="http://www.mezeh.com/" target="_blank">Mezeh Mediterranean Grill</a></li>
          <li class="link"><a href="https://www.benjerry.com/" target="_blank">Ben & Jerry’s</a></li>
          <li class="link"><a href="https://www.starbucks.com/" target="_blank">Starbucks</a></li>
          <li class="link"><a href="https://www.nationalharbor.com/stores/harbor-cafe/" target="_blank">Harbor Café</a></li>
          <li class="link"><a href="http://www.pgcupcakery.com/" target="_blank">Pretty Girl Cupcakery</a></li>
        </ul>

      </div>
      <div id="main" class="gridStyle">
        <h2>Here are some food options nearby the Gaylord National Resort and Conference Center</h2>
        <div class="foodGrid">
          <div id="American" class="foodType">
            <h2 id="AmericanHead" class="foodHead">American Food &#9660;</h2>
            <iframe class="AmericanInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Potbelly+Sandwich+Shop,146+National+Plaza,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="AmericanInfo">
              <tr><th>Potbelly Sandwich Works</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
            <hr class="FloatCancel AmericanInfo">
            <iframe class="AmericanInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Potomac+Gormet+Market,180+American+Way,National+Harbor,MD+20745" allowfullscreen>
            </iframe>
            <table class="AmericanInfo">
              <tr><th>Potomac Gormet Market</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
            <hr class="FloatCancel AmericanInfo">
            <iframe class="AmericanInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Elevation+Burger,108+Waterfront+St,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="AmericanInfo">
              <tr><th>Elevation Burger</th></tr>
              <tr><td>$$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
            <hr class="FloatCancel AmericanInfo">
            <iframe class="AmericanInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Subway,110+Waterfront+St,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="AmericanInfo">
              <tr><th>Subway</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
          </div>
          <div id="Mexican" class="foodType">
            <h2 id="MexicanHead" class="foodHead">Mexican Food &#9660;</h2>
            <iframe class="MexicanInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Chipotle+Mexican+Grill,158+National+Plaza,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="MexicanInfo">
              <tr><th>Chipotle Mexican Grill</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
            <hr class="FloatCancel MexicanInfo">
            <iframe class="MexicanInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Rosa+Mexicano,153+Waterfront+St,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="MexicanInfo">
              <tr><th>Rosa Mexicano</th></tr>
              <tr><td>$$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
          </div>
          <div id="Asian" class="foodType">
            <h2 id="AsianHead" class="foodHead">Asian Food &#9660;</h2>
            <iframe class="AsianInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Thai+Pavilion,151+American+Way,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="AsianInfo">
              <tr><th>Thai Pavilion</th></tr>
              <tr><td>$$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
            <hr class="FloatCancel AsianInfo">
            <iframe class="AsianInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Graces+Mandarin,188+Waterfront+St,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="AsianInfo">
              <tr><th>Grace’s Mandarin</th></tr>
              <tr><td>$$ restaurant</td></tr>
              <tr><td>800 ft from conference</td></tr>
            </table>
          </div>
          <div id="Mediterranean" class="foodType">
            <h2 id="MediterraneanHead" class="foodHead">Mediterranean Food &#9660;</h2>
            <iframe class="MediterraneanInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Mezeh+Mediterranean+Grill,144+National+Plaza,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="MediterraneanInfo">
              <tr><th>Mezeh Mediterranean Grill</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>800 ft from conference</td></tr>
            </table>
          </div>
          <div id="Dessert" class="foodType">
            <h2 id="DessertHead" class="foodHead">Desserts &#9660;</h2>
            <iframe class="DessertInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Ben+and+Jerrys,138+National+Plaza,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="DessertInfo">
              <tr><th>Ben & Jerry’s</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
            <hr class="FloatCancel DessertInfo">
            <iframe class="DessertInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Pretty+Girl+Cupcakery,128+Waterfront+St,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="DessertInfo">
              <tr><th>Pretty Girl Cupcakery</th></tr>
              <tr><td>$$ restaurant</td></tr>
              <tr><td>0.4 mi from conference</td></tr>
            </table>
          </div>
          <div id="Coffee" class="foodType">
            <h2 id="CoffeeHead" class="foodHead">Coffee &#9660;</h2>
            <iframe class="CoffeeInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Starbucks,167+Waterfront+St,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="CoffeeInfo">
              <tr><th>Starbucks</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>0.2 mi from conference</td></tr>
            </table>
            <hr class="FloatCancel CoffeeInfo">
            <iframe class="CoffeeInfo foodMap" width="250" height="200" frameborder="1" style="border: .25em solid #000000"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=The+Harbor+Cafe+And+Coffee,150+American+Way,Oxon+Hill,MD+20745" allowfullscreen>
            </iframe>
            <table class="CoffeeInfo">
              <tr><th>Harbor Café</th></tr>
              <tr><td>$ restaurant</td></tr>
              <tr><td>0.3 mi from conference</td></tr>
            </table>
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
</div>
</body>
</html>
