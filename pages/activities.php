<!DOCTYPE html>
<html>
<head>
  <title>Activities: Washington DC Nationals Guide</title>
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
  <style>
    .ActiveGrid {
      display: grid;
      grid-template-columns: 33% 33% 33%;
      grid-template-rows: auto;
      grid-template-areas: "map info pic";
      grid-gap: .25em;
    }
    @media screen and (max-width: 40em) {
      .ActiveGrid {
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto;
        grid-template-areas: "info" "map" "pic";
        grid-gap: .25em;
      }
    }
    @media screen and (max-width: 80em) {
      .ActiveGrid {
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto;
        grid-template-areas: "info" "map" "pic";
        grid-gap: .25em;
      }
    }
    .map {
      grid-area: map;
    }
    .info {
      grid-area: info;
    }
    .pic {
      grid-area: pic;
    }

    .ActiveDiv {
      border: .5em solid #9CC4E4;
      border: collapse;
      padding: .75em;
      background-color: #2978B8;
      color: #DDDDDD;
    }
    .ActiveText {
      text-align: center;
    }
    .ActiveHead {
      font-size: 2em;
    }
    .ActiveImg {
      margin: .5em;
      border: .25em solid #000000;
      width: 100%;
      height: auto;
    }
    table {
      margin: .75em;
    }
  </style>
</head>
<body>
  <div class="w3-bar ribbonBack">
  <h1 id="header" class="HeadCenter">Welcome to the 2020 NLC at Washington D.C. Information Website</h1>
  <div class="w3-bar LinkColor">
    <a href="../home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
    <a href="event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
    <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
    <a href="hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
    <a href="food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
    <a href="activities.php" class="w3-bar-item w3-button w3-hover-blue w3-light-blue">Activities</a>
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
          <li class="link"><a href="https://www.whitehouse.gov/" target="_blank">White House</a></li>
          <li class="link"><a href="https://www.si.edu/museums" target="_blank">Smithsonian Museums</a></li>
          <li class="link"><a href="https://www.recreation.gov/ticket/facility/234635" target="_blank">Washington Monument</a></li>
          <li class="link"><a href="https://tours.visitthecapitol.gov/cvc#.XBE7xGhKiUl" target="_blank">Capital Building</a></li>
          <li class="link"><a href="https://www.loc.gov/" target="_blank">Library of Congress</a></li>
          <li class="link"><a href="https://www.supremecourt.gov/" target="_blank">Supreme Court</a></li>
        </ul>

      </div>
      <div id="main" class="gridStyle">
        <h2 class="ActiveText">Washington, D.C. is a great place to explore, learn, and have fun. It is full of museums, monuments, memorials, and more. Here are some below:</h2>
        <div class="ActiveDiv ActiveGrid">
          <div class="map">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=1600+Pennsylvania+Ave+NW,Washington,DC" allowfullscreen>
          </iframe>
          </div>
          <div class="info">
          <h4 class="ActiveText ActiveHead"><b>The White House</b></h4>
          <table>
            <tr><th>Important Information</th></tr>
            <tr><td>White House tours must be planned ahead of time and requested by your state's Congress member up to three months in advance and no less than 21 days prior to your visit</td></tr>
            <tr><td>Tours run from 7:30 a.m. to 11:30 a.m. Tuesday through Thursday, and 7:30 a.m. to 1:30 p.m. Fridays and Saturdays</td></tr>
            <tr><td>A form of photo identification is needed at the time of the tour for all guests 18 or older</td></tr>
            <tr><td>Video cameras, food, drink, bags (backpacks, purses, etc.), and weapons are prohibited on the tour</td></tr>
          </table>
          </div>
          <div class="pic">
          <img class="ActiveImg" src="../images/SmWhiteHouse.jpg" alt="White" width="100%"></img>
          </div>
        </div>
        <div class="ActiveDiv ActiveGrid">
          <div class="map">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=National+Air+and+Space+Museum" allowfullscreen>
          </iframe>
          </div>
          <div class="info">
          <h4 class="ActiveText ActiveHead"><b>Smithsonian Museums</b></h4>
          <table>
            <tr><th>Important Information</th></tr>
            <tr><td>Smithsonian Museums on the National Mall are the American Indian Museum, Air and Space Museum, Hirshhorn Museum, Arts and Industry Meseum,
             African Art Meseum, Sackler Gallery, Freer Gallery, Natural History Museum, American History Museum, African American History and Culture Mesuem, and
           the Smithsonian Castle</td></tr>
            <tr><td>The Smithsonian Museums on the National Mall are open every day from 10 a.m. to 5:30 p.m.</td></tr>
            <tr><td>Small purses, closed food and beverages, and cameras are permitted.</td></tr>
            <tr><td>The Smithsonian is free.</td></tr>
          </table>
          </div>
          <div class="pic">
            <img class="ActiveImg" src="../images/SmSmithsoniancastle.jpg"></img>
            <img class="ActiveImg" src="../images/museumSm.jpg"></img>
          </div>
        </div>
        <div class="ActiveDiv ActiveGrid">
          <div class="map">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Washington+Monument" allowfullscreen>
          </iframe>
        </div>
          <div class="info">
          <h4 class="ActiveText ActiveHead"><b>Washington Monument</b></h4>
          <table>
            <tr><th>Important Information</th></tr>
            <tr><td>Washington Monument tickets can be purchased online up to 3 months before your visit. Purchase your tickets here:
            <a href="https://www.recreation.gov/ticket/facility/234635" target="_blank">Washington Monument Tickets</a></td></tr>
            <tr><td>Tickets cost $1.50 each and can be picked up at the Will Call window before your tour</td></tr>
            <tr><td>The Washington Monument is open for tours between 9 am and 5 pm every day of the week</td></tr>
          </table>
          </div>
          <div class="pic">
            <img class="ActiveImg" src="../images/WashingtonMonument.jpeg"></img>
          </div>
        </div>
        <div class="ActiveDiv ActiveGrid">
          <div class="map">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=United+States+Capital,Washington,DC" allowfullscreen>
          </iframe>
        </div>
          <div class="info">
          <h4 class="ActiveText ActiveHead"><b>Capitol Building</b></h4>
          <table>
            <tr><th>Important Information</th></tr>
            <tr><td>You can take a guided tour of the Capitol Building free of charge</td></tr>
            <tr><td>You can get passes the day of the tour at the Capitol visitor center, but availability will be limited</td></tr>
            <tr><td>Another option is to order passes in advance online: <a href="https://tours.visitthecapitol.gov/cvc#.XBE7xGhKiUl" target="_blank">US Congress</a></td></tr>
            <tr><td>Food and beverage, large bags, and weapons are prohibited</td></tr>
          </table>
          </div>
          <div class="pic">
            <img class="ActiveImg" src="../images/SmCapitol.jpg"></img>
          </div>
        </div>
        <div class="ActiveDiv ActiveGrid">
          <div class="map">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Library+of+Congress" allowfullscreen>
          </iframe>
        </div>
          <div class="info">
          <h4 class="ActiveText ActiveHead"><b>Library of Congress</b></h4>
          <table>
            <tr><th>Important Information</th></tr>
            <tr><td>You can either visit the Library of Congress and walk around areas open to the public or take a one hour guided tour with no cost</td></tr>
            <tr><td>The information desk will have information about available tours</td></tr>
            <tr><td>You do not have to order passes in advance. It is open every day except Sunday from 8:30 a.m. to 4:30 p.m.</td></tr>
            <tr><td>All personal items brought will be checked at the security checkpoint before beginning the tour</td></tr>
          </table>
          </div>
          <div class="pic">
            <img class="ActiveImg" src="../images/SmLibraryOfCongress.jpg"></img>
          </div>
        </div>
        <div class="ActiveDiv ActiveGrid">
          <div class="map">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=United+States+Supreme+Court+Building" allowfullscreen>
          </iframe>
        </div>
          <div class="info">
          <h4 class="ActiveText ActiveHead"><b>Supreme Court</b></h4>
          <table>
            <tr><th>Important Information</th></tr>
            <tr><td>The Supreme Court is open Monday through Friday 9 am to 4:30 pm</td></tr>
            <tr><td>Visitors can walk through public areas such as the Courtroom</td></tr>
            <tr><td>Be prepared to go through security before the tour</td></tr>
          </table>
          </div>
          <div class="pic">
            <img class="ActiveImg" src="../images/SmSupremeCourt.jpg"></img>
          </div>
        </div>
        <div class="ActiveDiv ActiveGrid">
          <div class="map">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=National+Mall" allowfullscreen>
          </iframe>
        </div>
          <div class="info">
          <h4 class="ActiveText ActiveHead"><b>Memorials on National Mall</b></h4>
          <table>
            <tr><th>Important Information</th></tr>
            <tr><td>The National Mall is home to the Lincoln Memorial, WWII Memorial, a view of the Jefferson Memorial, and more</td></tr>
            <tr><td>You can visit any of these memorials at any time</td></tr>
            <tr><td>This is a great activity to do if you are in D.C. and are waiting for another one of your tours</td></tr>
          </table>
          </div>
          <div class="pic">
            <img class="ActiveImg" src="../images/SmNationalMall.jpg"></img>
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
