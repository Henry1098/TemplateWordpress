<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
<?php $work = get_field( "LastWork" );
for ($i=0; $i < count($work) ; $i++) {
  echo "<div class = 'col-12 col-md-3 my-2'>";
  echo "<img src ='".$work[$i]['images']."' class='img-fluid' />"; 
  echo "</div>";
  }
?>


<div class="container">
  <div class="row">
    <div class="col-sm">
    <div id="menu" role="navigation">
 
 <?php 
  wp_nav_menu ( array (
  'theme_location' => 'spécial' ,
  'menu_class' => 'my-footer-menu', 
  ) ); ?>
 </div>
 
 <div id="menu" role="navigation">
  
 <?php 
  wp_nav_menu ( array (
  'theme_location' => 'spécial2' ,
  'menu_class' => 'my-footer-menu', 
  ) ); ?>
 </div>
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>



<img src="<?php the_field('logo') ?>" alt="image">



<?php the_field("article_1");
?>
<?php $value = get_field( "slideer" );




?>


<section id="slider">
<!-- Slideshow container -->
<div class="slideshow-container">
<?php

for ($i=0; $i < count($value) ; $i++) {
echo '<div class="mySlides fade">';
echo '<div class="numbertext">'.($i+1).' / '.count($value).'</div>';
echo '<img src='.$value[$i]["sliders"].' />';
echo '<div class="text">'.$value[$i]["textese"].'</div>';
echo ' </div>';
}
?>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<?php
for ($i=0; $i < count($value) ; $i++) {
echo ' <span class="dot" onclick="currentSlide('.($i+1).')"></span>';
}

?>


</div>


</section>




<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}
</script>
<?php get_footer(); ?>