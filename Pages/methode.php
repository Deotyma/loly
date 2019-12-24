<?php include("../Pages/Commons/header.php")?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner  p-4 mt-4">
    <div class="carousel-item active">
      <img src="../assets/images/pomme1.jpg" class="img-fluid rounded mx-auto d-block grayscale perso_shadow" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h2 class="perso_text">méthode</h2>
          <button type="button" class="btn btn-secondary perso_color_dark">Secondary</button>

      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/images/couple1.jpg" class="img-fluid rounded mx-auto d-block grayscale perso_shadow" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2 class="perso_text">méthode</h2>
      <button type="button" class="btn btn-secondary perso_color_dark">Secondary</button>

      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/images/couple4.jpg" class="img-fluid rounded mx-auto d-block grayscale perso_shadow" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2 class="perso_text">méthode</h2>
      <button type="button" class="btn btn-secondary perso_color_dark">Secondary</button>
      
      </div>
    </div>
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<?php include("../Pages/Commons/footer.php")?>