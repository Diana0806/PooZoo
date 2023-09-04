<?php

require('./management.php');

?>


<?php
include_once('partials/header.php');
?>
<div class="team">
<div class="cover-container d-flex w-200 h-100 p-3 mx-auto flex-column ">
  <header class="mb-auto">
    <div>
      <img src="./Assets/Images/ZOOlogo.png" width="100">
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="./index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="./zones.php">Zones</a>
            <a class="nav-link fw-bold py-1 px-0" href="./animalspage.php">Animals</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="#">Our Team</a>
            <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <main class="team2 px-3">
    <h1>Our Team</h1>
    <p class="lead fw-bold">Learn more about the ZOO's life and its inhabitants.</p>
    <p class="lead">
      <a href="./zones.php" class="btn btn-danger">Learn more</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>
    </div>
    </body>
</html>
