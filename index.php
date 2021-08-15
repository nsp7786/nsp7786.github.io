<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
  if ($_COOKIE['theme'] == 'dark') {
    $themeClass = 'dark-mode';
  } else if ($_COOKIE['theme'] == 'light') {
    $themeClass = 'light-mode';
  }  
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Nathaniel Pellegrino</title>
  <link rel="shortcut icon" type="image/svg" href="assets/img/gearmonke_icon.svg"/>
  <meta name="viewport" content="width=device width,initial-scale=1.0">
  <meta name="color-scheme" content="dark light">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link href="assets/css/default.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

  <script type="text/javascript" src="assets/js/scroll.js"></script>

</head>
  <body class="<?php echo $themeClass; ?>">
    <div class="side-bar">
      <nav class="navigation">
        <ul>
          <li>
            <a href="#about">About</a>
            <a href="#products">Products</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="#gallery">Gallery</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="main-content">
      <section id="about">
        <h1>About</h1>
        <p>This is a fork of <a href="https://codepen.io/dbilanoski/pen/LabpzG">the original by Danilo Bilanoski</a>, updated to allow the sections to be placed inside a relative parent. See the JS file comments for details.</p>
      </section>
      <section id="products">
        <h1>Products</h1>
      </section>
      <section id="services">
        <h1>Services</h1>
      </section>
      <section id="contact">
        <h1>Contact</h1>
      </section>
      <section id="gallery">
        <h1>Gallery</h1>
      </section>
    </div>
   </body>
 </html>
<!-- footer-normal.php start
<?php
  include($path.'assets/inc/footer-default.php');
?>
footer-normal.php end -->

     