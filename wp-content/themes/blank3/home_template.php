<?php
	/*Template Name: HOME*/
	get_header();
?>

<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/05/bg2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Cakes for all Occassions</h5>
        <p>Add a little sweetness in every life-event</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/05/bg3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sweet Treats</h5>
        <p>Baked with Love</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/05/bc2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Make Birthdays extra Special</h5>
        <p>With our special dedication cakes</p>
      </div>
    </div>
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
</div>

<?php get_footer(); ?>