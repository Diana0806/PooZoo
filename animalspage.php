<?php

require('./management.php');

?>

<?php
include_once('partials/header.php');
?>

<div class="animals">
<div class="cover-container d-flex w-100 p-3 mx-auto flex-column ">
  <header class="mb-auto">
    <div>
    <img src="./Assets/Images/ZOOlogo3.png" width="100">
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="./index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="./zones.php">Zones</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="#">Animals</a>
            <a class="nav-link fw-bold py-1 px-0" href="./team.php">Our Team</a>
            <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
      </nav>
    </div>

  </header>
</div>

  <main class="animals2">
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-info">Animals</h1>
      <p class="fs-5 text-info">Meet the Wildlife at Our Zoo</p>
    </div>
<div class="container">
    <div class="row  mb-3 text-center">

      <div class="animalcol my-3 mx-2 bg-dark bg-opacity-25 rounded">
        <div class="cardaviary mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 ">
            <h3 class="my-0 fw-normal">Eagles</h3>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title text-success"><?php $aviary1->displayAnimalsCharacteristics(); ?></h2>
            <ul class="list-unstyled mt-3 mb-4">
            <li><?php echo $eagle1->getCharacteristics(); ?></li>
            <li><?php $eagle1->fly() ?></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="animalcol my-3 mx-2 bg-dark bg-opacity-25 rounded">
        <div class="cardaquarium mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h3 class="my-0 fw-normal">Fishes</h3>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title text-warning"><?php $aquarium1->displayAnimalsCharacteristics(); ?></h2>
            <ul class="list-unstyled mt-3 mb-4">
            <li><?php foreach ($fish_array as $fish) {
                echo $fish->getCharacteristics() . '<br>'; } ?></li>
              <li><?php $fish1->swim() ?></li>
              <li><?php $fish2->eat() ?></li>
              <li><?php $fish3->eat() ?></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="animalcol my-3 mx-2 bg-dark bg-opacity-25 rounded">
        <div class="cardenclosure mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h3 class="my-0 fw-normal">Bears</h3>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title text-danger"><?php $voliere2->displayAnimalsCharacteristics(); ?></h2>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php foreach ($bear_array as $bear) {
                echo $bear->getCharacteristics() . '<br>'; } ?></li>
              <li><?php $fish1->sleep() ?></li>
              <li><?php $fish2->sleep() ?></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="animalcol my-3 mx-2 bg-dark bg-opacity-25 rounded">
        <div class="cardaviary mb-4 rounded-3 shadow-sm border-success">
          <div class="card-header py-3 border-success">
            <h3 class="my-0 fw-normal">Flamingos</h3>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title text-success"><?php $aviary2->displayAnimalsCharacteristics(); ?></h2>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php foreach ($flamingo_array as $flamingo) {
                echo $flamingo->getCharacteristics() . '<br>'; } ?></li>
              <li><?php $flamingo1->sleep() ?></li>
              <li><?php $flamingo2->eat() ?></li>
              <li><?php $flamingo3->sleep() ?></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="animalcol my-3 mx-2 bg-dark bg-opacity-25 rounded">
        <div class="cardenclosure mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h3 class="my-0 fw-normal">Tigers</h3>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title text-danger"><?php $voliere1->displayAnimalsCharacteristics(); ?></h2>
            <ul class="list-unstyled mt-3 mb-4">
            <li><?php echo $tiger1->getCharacteristics(); ?></li>
            <li><?php $tiger1->roar() ?></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="animalcol my-3 mx-2 bg-dark bg-opacity-25 rounded">
        <div class="cardenclosure mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h3 class="my-0 fw-normal">Lions</h3>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title text-danger"><?php $voliere3->displayAnimalsCharacteristics(); ?></h2>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php foreach ($lion_array as $bear) {
                echo $bear->getCharacteristics() . '<br>'; } ?></li>
              <li><?php $lion1->eat() ?></li>
              <li><?php $lion2->eat() ?></li>
            </ul>
          </div>
        </div>
      </div>

</div>
              </div>

<footer class="mt-auto text-white-50">
   
  </footer>
</div>
    </body>
</html>
