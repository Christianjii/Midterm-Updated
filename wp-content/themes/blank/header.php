<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

  <section class="header">
    
    <nav>
      <div class="title">
        <ul>
          <li><a href="index.php">Tummy Yummy</a></li>
        </ul>
      </div>
      <div class="nav-links">
        <i class="fa fa-times"></i>
        <ul>
          <li><a href="http://localhost/wordpress/home/">HOME</a></li>
          <li><a href="http://localhost/wordpress/about-us/">ABOUT US</a></li>
          <li><a href="http://localhost/wordpress/contact-us/">CONTACT US</a></li>
        </ul>
      </div>
      <i class="fa fa-bars"></i>
    </nav>

    <div class="text-box">
  <h1>Tummy Yummy</h1>
  <p1>Finest Delicacies served with love</p1>

</div>
  </section>
