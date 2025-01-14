<?php
require BASE_PATH . "partials/head.php";
?>
<style>
  .unhidden{
    display: block;
  }
  .hidden{
    display: none;
  }
</style>
</head>
<body>
<div style="display: flex;flex-direction: column; min-height:100vh; ">
  <?php require BASE_PATH . "partials/header.php"?>
  <main style="flex:1;">
    <section class="primary-image-container">
      <div class="main-img">
        <img src="../images/GettyImages-172672886.jpg" alt="inside airport">
      </div>
    </section>
    <section class="flight-arrivals-departures">
      <div class="overlay"></div>
        <div class="container-flights">
          <div class="top-container-flights" > 
            <button id="arrivalButton">Arrivals</button>
            <button id="departureButton">Departures</button>
          </div>
          <div class="table-container-flights">
            <table id="arrivalTable">
              <tr>
                <th>Time</th>
                <th colspan="2">Destination</th>
                <th colspan="2">Airline</th>
                <th>Flight id</th>
                <th>Status</th>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
              </tr>
            </table>
            <table id="departureTable" class="departureTable">
              <tr>
                <th>Time</th>
                <th colspan="2">Destination</th>
                <th colspan="2">Airline</th>
                <th>Flight id</th>
                <th>Status</th>
              </tr>
              <tr>
                <td>02:00</td>
                <td colspan="2">Turkey</td>
                <td colspan="2">Koso Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">Turkey</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">Paris</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>In Time</td>
              </tr>
              <tr>
                <td>02:05</td>
                <td colspan="2">London</td>
                <td colspan="2">Turkish Airline</td>
                <td>W8 1001</td>
                <td>Delayed</td>
              </tr>
            </table>
            </div>
            <div class="bottom-container-flights">
              <div class="search-bottom-container">
                <input type="text" name="submit-search" id="search" placeholder="Search Arrivals...">
                <button type="submit" name="sumbit-search" class="search-button-submit"><img src="../images/211817_search_strong_icon.png" alt="search icon"></button>
              </div>
              <?php if ($_SESSIONS['user'] ?? false) : ?>
              <button class="all-flights"><a href="Flights.html">All Flights</a></button>
              <?php else :?>
              <button class="all-flights"><a href="Flights.html">All Flights</a></button>
              <?php endif; ?>
            </div>
          </div>
        
    </section>
    <section>
      <div class="advertisement">
        <div class="first-advertisement">
          <div class="first-advertisement-img">
            <img src="../images/car-hire-centre-567x350px.webp" alt="">
          </div>
          <div class="first-advertisement-content">
            <h3>Need to rent a car?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nesciunt placeat iure, molestiae architec
              to sunt modi tempore vel praesentium vitae ipsam in, maiores recusandae quasi eius neque esse iste! Facere.
              Magni, corporis excepturi! Adipisci hic eum quo laudantium eveniet autem tempora, molestiae nam qui ip
              sum odio saepe nihil reprehenderit non maxime sequi exercitationem iure porro ab sed laborum eius quas?</p>
          </div>
        </div>
        <div class="second-advertisement">
          <div class="second-advertisement-img">
            <img src="../images/collecting-your-car.webp" alt="">
          </div>
          <div class="second-advertisement-content">
            <h3>Need to park your car?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nesciunt placeat iure, molestiae architec
              to sunt modi tempore vel praesentium vitae ipsam in, maiores recusandae quasi eius neque esse iste! Facere.
              Magni, corporis excepturi! Adipisci hic eum quo laudantium eveniet autem tempora, molestiae nam qui ip
              sum odio saepe nihil reprehenderit non maxime sequi exercitationem iure porro ab sed laborum eius quas?</p>
          </div>
        </div>
        <div class="third-advertisement">
          <div class="third-advertisement-img">
            <img src="../images/Food and Beverage.jpg" alt="">
          </div>
          <div class="third-advertisement-content">
            <h3>Our Restaurant...</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nesciunt placeat iure, molestiae architec
              to sunt modi tempore vel praesentium vitae ipsam in, maiores recusandae quasi eius neque esse iste! Facere.
              Magni, corporis excepturi! Adipisci hic eum quo laudantium eveniet autem tempora, molestiae nam qui ip
              sum odio saepe nihil reprehenderit non maxime sequi exercitationem iure porro ab sed laborum eius quas?</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require BASE_PATH . 'partials/footer.php'?>

  <script>
  const searchBar = document.querySelector('.searchBar');
  const searchIcon = document.querySelector('#search-div');
  const departureTable =document.querySelector('#departureTable');
  const departureButton =document.querySelector('#departureButton');
  const arrivalTable =document.querySelector('#arrivalTable');
  const arrivalButton =document.querySelector('#arrivalButton');

  searchBar.addEventListener('click',hiddenSearch);

  departureButton.addEventListener('click',() => {
    arrivalTable.classList.add('hidden'); 
    departureTable.classList.add('unhidden');
  });

  arrivalButton.addEventListener('click',() => {
    departureTable.classList.remove('unhidden'); 
    arrivalTable.classList.remove('hidden');
  });

  function hiddenSearch () {
    searchIcon.classList.toggle('unhidden');
  }
</script>
</body>
</html>
