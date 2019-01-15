let e = document.getElementById("state");
let stateValue = e.options[e.selectedIndex].value;
const stateName = "";
let yourHotel = document.querySelector('#root');

class hotel extends React.Component {
  constructor(props) {
    super(props);
    this.state = {stateElement: stateValue};
    this.changeState = this.changeState.bind(this);
  }

  changeState() {
    console.log("working");
    stateValue = e.options[e.selectedIndex].value;
    console.log(stateValue);
    this.setState(state => ({
      stateElement: stateValue
    }));
  }

  render() {
    if (this.state.stateElement == "") {
      return (
        <div>
        <button class="StateButton" onClick={this.changeState}>Select</button>
        <hr></hr>
        <div class="infoText">
        <h3>You have not selected a state</h3>
        </div>
        </div>
      );
    }
    if (this.state.stateElement == "alabama" || this.state.stateElement == "texas" || this.state.stateElement == "oklahoma" ||
        this.state.stateElement == "kansas" || this.state.stateElement == "louisana" || this.state.stateElement == "arkansas" ||
        this.state.stateElement == "missouri" || this.state.stateElement == "misssissippi" || this.state.stateElement == "tennessee" ||
        this.state.stateElement == "kentucky" || this.state.stateElement == "flordia" || this.state.stateElement == "georgia" ||
        this.state.stateElement == "southCarolina" || this.state.stateElement == "northCarolina" || this.state.stateElement == "virginia" ||
        this.state.stateElement == "minnesoda" || this.state.stateElement == "iowa" || this.state.stateElement == "wisconsin" ||
        this.state.stateElement == "illinois" || this.state.stateElement == "indiana" || this.state.stateElement == "michigan") {
      return (
        <div>
        <button onClick={this.changeState}>Select</button>
        <hr></hr>
        <div class="infoText">
        <h2 class="locationText"><b>Gaylord National Resort & Convention Center Features</b></h2>
        <div class="infoGrid">
        <div class="hotelMap">
        <iframe width="100%" height="100%" frameBorder="1" class="mapBorder"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Gaylord+National+Resort,Fort+Washington,MD+20745" allowFullScreen>
      </iframe>
    </div>
      <div class="gaylordImage">
        <img src="../images/Gaylord.jpg" width="100%" height="100%" alt="Gaylord"></img>
    </div>
  </div>
        <hr></hr>
        <h3 id="FeaturesHeadAlpha" class="HotelHead">The Gaylord has many amenities, including: &#9660;</h3>
        <div class="infoText" id="FeaturesInfoAlpha">
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
        </div>
        </div>
      );
    }
    if (this.state.stateElement == "california" || this.state.stateElement == "nevada" ||
    this.state.stateElement == "oregon" || this.state.stateElement == "washington" || this.state.stateElement == "arizona" ||
    this.state.stateElement == "utah" || this.state.stateElement == "idaho" || this.state.stateElement == "newMexico" ||
    this.state.stateElement == "wyoming" || this.state.stateElement == "colorado" || this.state.stateElement == "ohio" ||
    this.state.stateElement == "westVirginia" || this.state.stateElement == "maryland" || this.state.stateElement == "delaware" ||
    this.state.stateElement == "pennsylvania" || this.state.stateElement == "newJersey" || this.state.stateElement == "newYork" ||
    this.state.stateElement == "alaska" || this.state.stateElement == "connecticut" || this.state.stateElement == "rhodeIsland" ||
    this.state.stateElement == "maine" || this.state.stateElement == "massachusetts") {
      return (
        <div>
        <button onClick={this.changeState}>Select</button>
        <hr></hr>
        <div class="infoText">
        <h2 class="locationText"><b>The Westin Washington National Harbor Features</b></h2>
        <div class="infoGrid">
        <div class="hotelMap">
        <iframe width="100%" height="100%" frameBorder="1" class="mapBorder"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=The+Westin+Washington+National+Harbor,National+Harbor,MD+20745" allowFullScreen>
      </iframe>
    </div>
      <div class="gaylordImage">
        <img src="../images/Gaylord.jpg" width="100%" height="100%" alt="Gaylord"></img>
    </div>
  </div>
        <hr></hr>
        <h3 id="FeaturesHeadAlpha" class="HotelHead">The Westin Washington has many amenities, including: &#9660;</h3>
        <div class="infoText" id="FeaturesInfoAlpha">
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
        </div>
      );
    }
    if (this.state.stateElement == "puertoRico" || this.state.stateElement == "montana" || this.state.stateElement == "vermont" ||
     this.state.stateElement == "newHampshire" || this.state.stateElement == "hawaii" || this.state.stateElement == "northDakota" ||
     this.state.stateElement == "southDakota" || this.state.stateElement == "nebraska") {
        return (
          <div>
          <button onClick={this.changeState}>Select</button>
          <hr></hr>
          <div class="infoText">
          <h2 class="locationText"><b>AC Hotel National Harbor Features</b></h2>
          <div class="infoGrid">
          <div class="hotelMap">
          <iframe width="100%" height="100%" frameBorder="1" class="mapBorder"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=AC+Hotel+by+Marriott+National+Harbor+Washington,DC+Area,National+Harbor,MD+20745" allowFullScreen>
        </iframe>
      </div>
        <div class="gaylordImage">
          <img src="../images/Gaylord.jpg" width="100%" height="100%" alt="Gaylord"></img>
      </div>
    </div>
          <hr></hr>
          <h3 id="FeaturesHeadAlpha" class="HotelHead">The AC Hotel has many amenities, including: &#9660;</h3>
          <div class="infoText" id="FeaturesInfoAlpha">
            <ul>
              <li>Breakfast options (with a fee)</li>
              <li>Sundry/Convenience store</li>
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
          </div>
      );
    }
  }

}

ReactDOM.render(React.createElement(hotel, null), yourHotel);
