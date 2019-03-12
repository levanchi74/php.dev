<!DOCTYPE html>
<html>
<head>
  <title>Shopera</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/fonts/OpenSansCondensed">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css"> <!-- main -->
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/shop.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/star-rate.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/sign_style.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/cart.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/contact.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/message.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/about.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/detail_style.css">

  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/fonts/OpenSansCondensed">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="icon" href="<?php echo ROOT_PATH; ?>assets/images/icons/logo-icon.png"  sizes="20x20">


</head>
<body>
  <header>
    <div class="header-container">
      <div class="site-title">
        <a href="<?php echo ROOT_URL; ?>"><h2>SHOPERA</h2></a>
      </div>
      <div class="menu-icon" >
        <img src="./assets/images/icons/menu-icon.png" alt="menu-icon" >
      </div>
      <div class="menu-primary">
        <ul> 
          <li><a href="<?php echo ROOT_URL; ?>/home/shop">Shop</a></li>
          <li><a href="<?php echo ROOT_URL; ?>/home/about">About</a></li>
          <li><a href="<?php echo ROOT_URL; ?>/home/contact">Contact us</a></li>
        </ul>
      </div>
      <div class="header-search">
        <form role="search" method="get" class="search-form" action="page_404.html">
          <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:" />
          <input type="hidden" name="lang" value="" />
          <input type="submit" class="search-submit" value="Search" />
        </form>
      </div>
      <div class="cart-content">
        <a href="<?php echo ROOT_URL; ?>/cart/view">
          <span class="cart-image" id="cart-image"><img src="<?php echo ROOT_PATH;?>assets/images/icons/cart-icon.png" alt="cart-icon"></span>
        </a>
      </div>
      <?php if(isset($_SESSION['user_logged_in'])): ?>
        <div class="sign-content"><a href="<?php echo ROOT_URL; ?>/auth/profile/<?php echo $_SESSION['user_data']['id']; ?>"><?php echo $_SESSION['user_data']['fullname']; ?>  </a>| <a href="<?php echo ROOT_URL; ?>/auth/logout">Logout</a></div>
         
  
      <?php else: ?>
        <div class="sign-content"><a href="<?php echo ROOT_URL; ?>/auth/login">Log in </a>|<a href="<?php echo ROOT_URL; ?>/auth/register"> Register</a></div>
      <?php endif ?>
    </div>  
  </header>
      <?php require($view); ?>
  <footer>
    <div class="footer-container">
      <div class="about-us">
        <h3>ABOUT US</h3>
        <p> <img src="<?php echo ROOT_PATH;?>assets/images/icons/logo-icon.png" alt="logo-icon" style="width: 40px; height: 40px; background: #fff; border-radius: 50%"> Lorem ipsum dolori sit amet, consectec tur adipiscing elit. I Mauris sed consequat nibh. Nunc blandit tellus in sollicitudin tempus. Proin id iaculis odio, sedi sagittis risus.</p>
        <hr>
        <p>quisquam beatae nesciunt iusto molestiae delectus temporibus ullam quasi</p>
      </div>
      <div class="recent-posts">
        <h3>RECENT POSTS</h3>
        <ul>
          <li><a href="#">Mauris nisi tempor, aliquam sem pellentesque</a></li>
          <li><a href="#">Mauris nisi tempor, aliquam sem pellente sque</a></li>
          <li><a href="#">Mauris nisi tempor, aliquam sem pellent esque</a></li>
          <li><a href="#">Mauris nisi tempor, aliquam sem pellent esque</a></li>
          <li><a href="#">Mauris nisi tempor, aliquam sem pellent esque</a></li>
          <li><a href="#">Mauris nisi tempor, aliquam sem pellen tesque</a></li>
        </ul>
      </div>
      <div class="get-touch">
        <h3>GET IN TOUCH</h3>
        <p>If you want to be updated regularly on our newest updates, events, and always be on top of things, leave your email and have no worries.</p>
        <form role="search" method="get" class="subscribe-form" action="#">
          <input type="text" class="subscribe-field" placeholder=" Email" value=""  title="Subscribe" />
          <input type="hidden" name="lang" />
          <input type="submit" class="subscribe-submit" value="Subscribe" />
        </form>
      </div>
    </div>
    <div class="info">
      <p>CREATED BY TEAM C2H2. THANK YOU !</p>
    </div>
  </footer>
  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="2480980418794753"
  theme_color="#0084ff">
</div>
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"> -->
    <script src="<?php echo ROOT_PATH; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/popper.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/menu-icon.js" ></script>
</body>
</html>
