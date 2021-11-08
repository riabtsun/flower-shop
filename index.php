<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <title><?php bloginfo('name'); ?></title>
</head>
<body>
  <main>
        <div class="header">
          <div class="container">
            <div class="header__right_menu">
              <a href="#">
                <img class="icon-search" src="<?php bloginfo( 'template_url') ?>./img/search1.svg" alt="search">
              </a> 
              <a href="#">
                <img class="icon-shopping-cart" src="<?php bloginfo( 'template_url') ?>./img/shopping-cart1.svg" alt="backet">
              </a> 
              <button class="header-button header-button--sign_up">Sign Up</button>
              <button class="header-button header-button--sign_in">Sign In</button>
            </div>
          </div>         
        </div>

    <div class="main-content container"> 

      <div class="main-content-left">
        <img src="<?php bloginfo( 'template_url') ?>./img/pexels-cottonbro.jpg" alt="plant">
      </div>
      <div class="main-content-right">
        <div class="main-content-text">
          <h1 class="main-content_title">Kembang Flower Mantap</h1>
          <p class="main-content_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="main-info__btn btn-main">
          <div class="btn-main__body">
            <button class="btn-main__prev">Previous</button>
            <span class="btn-main__title">Kaktus Plant</span>
          </div>
          <div class="btn-main__body">
            <button class="btn-main__next">Next</button>
            <span class="btn-main__title">Rahasia Plant</span>
          </div>
        </div>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="advantages">
          <div class="advantages-item">
            <div class="item-top-line">
                <img class="icon" src="<?php bloginfo( 'template_url') ?>./img/car.svg" alt="car">
                <span class="item-title" id="delivery">Fast<br>Delivery</span>
            </div>
            <p class="item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard </p>
          </div>
          <div class="advantages-item">
            <div class="item-top-line">
                <img class="icon" src="<?php bloginfo( 'template_url') ?>./img/headphones.svg" alt="headphones">
                <span class="item-title" id="delivery">Great Customer Service</span>
            </div>
            <p class="item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard </p>
          </div>
          <div class="advantages-item">
            <div class="item-top-line">
                <img class="icon" src="<?php bloginfo( 'template_url') ?>./img/plant1.svg" alt="plant">
                <span class="item-title" id="delivery">Original Plants</span>
            </div>
            <p class="item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard </p>
          </div>
          <div class="advantages-item">
            <div class="item-top-line">
                <img class="icon" src="<?php bloginfo( 'template_url') ?>./img/dollar-symbol1.svg" alt="dollar symbol">
                <span class="item-title" id="delivery">Original Plants</span>
            </div>
            <p class="item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard </p>
          </div>
        </div>
      </div>
    </section>
  
    <section>
      <div class="container">
        <div class="product-wrapper">
        <div class="search-line">
            <span class="search-title">Featured Plants</span>
            <select name="sort" id="sort-plants">
                <option value="cheapfirst">Cheaper First</option>
                <option value="cheaplast">Cheaper Last</option>
                <option value="bestseller">Relevance</option>
            </select>
        </div>
        <hr class="line">
        <div class="products">
            <div class="products-item">
                <img src="<?php bloginfo( 'template_url') ?>./img/kaktus.jpg" alt="Kaktus" class="products-image">
                <span class="products-title">Kaktus Plants</span>
                <span class="products-price">IDR 85.000</span>
            </div>
            <div class="products-item">
                <img src="<?php bloginfo( 'template_url') ?>./img/landak.jpg" alt="Landak" class="products-image">
                <span class="products-title">Landak Plants</span>
                <span class="products-price">IDR 105.000</span>
            </div>
            <div class="products-item">
                <img src="<?php bloginfo( 'template_url') ?>./img/kecu.jpg" alt="Kecubung" class="products-image">
                <span class="products-title">Kecubung Plants</span>
                <span class="products-price">IDR 85.000</span>
            </div>
            <div class="products-item">
                <img src="<?php bloginfo( 'template_url') ?>./img/kecu2.jpg" alt="Kecubung" class="products-image">
                <span class="products-title">Kecubung Plants</span>
                <span class="products-price">IDR 85.000</span>
            </div>
            <div class="products-item">
                <img src="<?php bloginfo( 'template_url') ?>./img/kecu3.jpg" alt="Kecubung" class="products-image">
                <span class="products-title">Kecubung Plants</span>
                <span class="products-price">IDR 85.000</span>
            </div>
        </div>
        </div>
      </div>     
    </section>

    <section>
      <div class="container">
        <div class="about-wrapper">
          <div class="about-left-block">
            <h2 class="about-title">Buy more plants, it helps you to be relaxed </h2>
            <p class="about-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida gravida
                aliquam. Pellentesque et
                lobortis nisl. Sed et mauris justo. Nulla eu enim non mauris maximus dignissim. Maecenas vitae eros
                sapien. Quisque pellentesque tempus dignissim.</p>
            <img src="<?php bloginfo( 'template_url') ?>./img/about-l.jpg" alt="plants" id="about-image-1">
          </div>
            <div class="about-right-block">
                <img src="<?php bloginfo( 'template_url') ?>./img/about-r.jpg" alt="plants" id="about-image-2">
            </div>
          </div>
        </div>    
    </section>

    <section>
      <div class="container">
        <div class="to-shop"style="background-image: url('<?php bloginfo( 'template_url') ?>./img/to-shop.jpg')" >
          <h3 class="to-shop-title" >Get your favourites plant on our shop now</h3>
          <a href="#" class="to-shop-link">Visit Shop</a>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
 <div class="footer-content">
            <div class="footer-address">
                <h2 class="address-title">plantku</h2>
                <h3 class="address-subtitle">Plantku House</h3>
                <p class="address-description">Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota Yogyakarta,
                    Daerah Istimewa Yogyakarta 55282</p>
            </div>
            <ul class="footer-links">
                <h2 class="footer-links-title">Perusahaan</h2>
                <li class="footer-item">Tentang Kami</li>
                <li class="footer-item">Hubungi Kami</li>
            </ul>
            <ul class="footer-links">
                <h2 class="footer-links-title">Produk</h2>
                <li class="footer-item">Tanaman</li>
                <li class="footer-item">Tanaman</li>
            </ul>
            <div class="subscribe">
                <h2 class="subscribe-title">Berlangganan Email Kami</h2>
                <input type="email" name="email" id="subscribe-email" placeholder="Masukan Alamat Email">
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </div>
    </div>     
  </footer>
</body>
</html>