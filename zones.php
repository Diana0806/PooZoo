<?php

require('./management.php');

?>

<?php
include_once('partials/header.php');
?>

<div class="zones">
<div class="cover-container d-flex w-100 p-3 mx-auto flex-column ">
  <header class="mb-auto">
    <div>
    <img src="./Assets/Images/ZOOlogo2.png" width="100">
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="./index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="#">Zones</a>
            <a class="nav-link fw-bold py-1 px-0" href="./animalspage.php">Animals</a>
            <a class="nav-link fw-bold py-1 px-0" href="./team.php">Our Team</a>
            <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
      </nav>
    </div>

  </header>
</div>

  <main class="zones2">
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Zones</h1>
      <p class="fs-5">Explore the various zones of the ZOO</p>
    </div>

    <div class="zonecard row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col-lg-4 offset-lg-4">
        <div class="aviary card mb-4 rounded-3 shadow-sm border-success">
          <div class="card-header py-3 border-success">
            <h3 class="my-0 fw-normal">Aviary</h3>
          </div>
          <div class="card-body">
            <h5><?php $aviary1->getCharacteristics() . '<br>' . $aviary2->getCharacteristics() ?></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-green">Learn more</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="secondline py-5">
    <div class="zonecard row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col-lg-4 offset-lg-1">
        <div class="aquarium card mb-4 rounded-3 shadow-sm border-warning">
          <div class="card-header py-3 border-warning">
            <h3 class="my-0 fw-normal">Aquarium</h3>
          </div>
          <div class="card-body">
            <h5><?php $aquarium1->getCharacteristics() ?></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-yellow">Learn more</button>
          </div>
        </div>
      </div>

      <div class="zonecard col-lg-4 offset-lg-2">
        <div class="enclosure card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 border-danger">
            <h3 class="my-0 fw-normal">Enclosure</h3>
          </div>
          <div class="card-body">
          <h5><?php $voliere1->getCharacteristics() . '<br>' . $voliere2->getCharacteristics() . '<br>' . $voliere3->getCharacteristics() ?></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-orange">Learn more</button>
          </div>
        </div>
      </div>

      </div>
    </div>
</div>

<footer class="mt-auto text-white-50">
   
  </footer>
</div>
    </div>
    </body>
</html>
