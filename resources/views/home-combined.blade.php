<!doctype html>
<html lang="zxx">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- mapbox css -->
  <link href="css/plugins/mapbox-style.css" rel='stylesheet'>
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Quarty</title>
</head>

<body>

  <div class="qrt-app">
    <div class="qrt-preloader">
      <div class="qrt-preloader-content">
        <div class="qrt-logo">
            <img src="{{ asset('img/InfiwinLogo (h)1.png') }}" alt="Quarty">
        </div>
        <div id="preloader" class="qrt-preloader-load"></div>
      </div>
    </div>
    <div id="cursor" class="qrt-cursor">
      <div></div>
      <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
    </div>
    <div class="qrt-top-bar">
     
      <a href="home-video" class="qrt-logo qrt-cursor-color qrt-cursor-scale qrt-anima-link">
        <img src="{{ asset('img/logo1.png') }}" alt="Quarty">
      </a>
      <div class="qrt-menu">
        <div id="qrt-dynamic-menu" class="qrt-dynamic-menu">
          <nav>
            <ul>
              <li class="current-menu-item">
                <a class="qrt-mobile-fix" href="home-video">Home</a>
                <ul>
                  <li><a href="home-slider">Home slider</a></li>
                  <li><a href="home-video">Home video</a></li>
                  <li><a href="home-image">Home image</a></li>
                  <li class="qrt-this-page"><a href="home-combined">Home combined</a></li>
                  <li><a href="home-classic">Home classic</a></li>
                </ul>
              </li>
              <li>
                <a class="qrt-mobile-fix" href="about-us">About</a>
                <ul>
                  <li><a href="about-us">About us</a></li>
                  <li><a href="about-me">About me</a></li>
                  <li><a href="about-us-classic">About us classic</a></li>
                  <li><a href="about-me-classic">About me classic</a></li>
                </ul>
              </li>
              <li>
                <a class="qrt-mobile-fix" href="portfolio-fs-masonry-1">Portfolio</a>
                <ul>
                  <li><a href="portfolio-half-masonry-1">Half masonry</a></li>
                  <li><a href="portfolio-half-masonry-2">Half masonry 2</a></li>
                  <li><a href="portfolio-half-grid-1-col">Half grid 1 column</a></li>
                  <li><a href="portfolio-half-grid-2-col">Half grid 2 column</a></li>
                  <li><a href="portfolio-fs-masonry-1">fullscreen masonry</a></li>
                  <li><a href="portfolio-fs-masonry-2">fullscreen masonry 2</a></li>
                  <li><a href="portfolio-fs-grid-3-col">fullscreen grid 3 column</a></li>
                  <li><a href="portfolio-fs-grid-2-col">fullscreen grid 2 column</a></li>
                  <li><a href="single-work-1">Single work 1</a></li>
                  <li><a href="single-work-2">Single work 2</a></li>
                </ul>
              </li>
              <li>
                <a class="qrt-mobile-fix" href="contact">Contact</a>
                <ul>
                  <li><a href="contact">Contact type 1</a></li>
                  <li><a href="contact-2">Contact type 2</a></li>
                </ul>
              </li>
              <li>
                <a class="qrt-mobile-fix" href="blog-list">Blog</a>
                <ul>
                  <li><a href="blog-list">Blog list</a></li>
                  <li><a href="publication">Publication</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="qrt-buttons">
        <a href="contact-2" class="qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20"><span>Send request</span></a>
        <div class="qrt-menu-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
       
        <div class="qrt-info-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
      </div>
      <div class="qrt-search">
        <form>
          <input type="text" placeholder="Enter search query">
        </form>
      </div>
      <div class="qrt-info" id="qrt-scroll-info">
        <div class="qrt-info-frame">
          <ul class="qrt-table">
            <li>
              <h5>Country</h5><span>India</span>
            </li>
            <li>
              <h5>City</h5><span>Noida</span>
            </li>
            <li>
              <h5>Street</h5><span> G-23, Sector-63,<br>Electronic City-201301 </span>
            </li>
            <li>
              <h5>Email</h5><span><a class="qrt-cursor-scale qrt-cursor-color" href="mailto:quarty.inbox@mail.com" data-no-swup> hi@infiwindow.com</a></span>
            </li>
            <li>
              <h5>Phone</h5><span><a class="qrt-cursor-scale qrt-cursor-color" href="#." data-no-swup> 73 370 74 370</a></span>
            </li>
          </ul>
          <div class="qrt-divider"></div>
          <div class="qrt-social-links">
            <div class="qrt-social-links">
              <h5 class="qrt-mb-40">We are social</h5>
              <ul class="qrt-social-list">
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-behance"></i></a></li>
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-dribbble"></i></a></li>
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="qrt-divider"></div>
          <div class="qrt-instagram">
            <h5 class="qrt-mb-40">Instagram</h5>
            <div class="qrt-instagram-frame">
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="img/projects/thumbnails/7.jpg" alt="instagram post">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="img/projects/thumbnails/8.jpg" alt="instagram post">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="img/projects/thumbnails/9.jpg" alt="instagram post">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="img/projects/thumbnails/10.jpg" alt="instagram post">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="img/projects/thumbnails/11.jpg" alt="instagram post">
                </div>
              </a>
              <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                <div class="qrt-instagram-image-frame">
                  <img src="img/projects/thumbnails/12.jpg" alt="instagram post">
                </div>
              </a>
            </div>
          </div>
          <div class="qrt-divider"></div>
          <h5 class="qrt-mb-40">Latest Publications</h5>
          <div class="qrt-post-frame qrt-sm-post">
            <a href="publication" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
              <img src="img/blog/1.jpg" alt="thumbnail">
            </a>
            <div class="qrt-post-descr">
              <div>
                <h4 class="qrt-cursor-color qrt-post-title"><a href="publication" class="qrt-anima-link">Architecture of Observation Towers</a></h4>
                <div class="qrt-port-short-text">It seems to be human nature to enjoy a view, getting the higher ground and taking in our surroundings has become a significant aspect of architecture across the world. Observation towers which allow
                  visitors to climb and observe their surroundings, provide a chance to take in the beauty of the land while at the same time adding something unique and impressive to the landscape.</div>
              </div>
            </div>
          </div>
          <div class="qrt-post-frame qrt-sm-post">
            <a href="publication" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
              <img src="img/blog/2.jpg" alt="thumbnail">
            </a>
            <div class="qrt-post-descr">
              <div>
                <h4 class="qrt-cursor-color qrt-post-title"><a href="publication" class="qrt-anima-link">Model Making In Architecture</a></h4>
                <div class="qrt-port-short-text">The importance of model making in architecture could be thought to have reduced in recent years. With the introduction of new and innovative architecture design technology, is there still a place for
                  model making in architecture? Stanton Williams, director at Stirling Prize-winning practice, Gavin Henderson, believes that it’s more important than ever.</div>
              </div>
            </div>
          </div>
          <div class="qrt-post-frame qrt-sm-post">
            <a href="publication" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
              <img src="img/blog/5.jpg" alt="thumbnail">
            </a>
            <div class="qrt-post-descr">
              <div>
                <h4 class="qrt-cursor-color qrt-post-title"><a href="publication" class="qrt-anima-link">Can Skyscrapers Be Sustainable</a></h4>
                <div class="qrt-port-short-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, id, reprehenderit earum quidem error hic deserunt asperiores suscipit. Magni doloribus, ab cumque modi quidem doloremque nostrum quam
                  tempora, corporis explicabo nesciunt accusamus ad architecto sint voluptatibus tenetur ipsa hic eius.</div>
              </div>
            </div>
          </div>
          <div class="qrt-divider"></div>
          <div class="qrt-subscribe">
            <h5 class="qrt-mb-40">Subscribe our newsletter</h5>
            <form>
              <input type="text" placeholder="Email">
              <button type="submit" class="qrt-btn qrt-btn-sm"><i class="far fa-paper-plane"></i></button>
            </form>
          </div>
          <div class="qrt-divider"></div>
          <div class="qrt-copy">
            <!-- author ( Please! Do not delete it. You are awesome! :) -->
            <div>© Late 2020 Quarty.<br>Design by:&#160; <a class="qrt-cursor-scale qrt-cursor-color" href="https://themeforest.net/user/millerdigitaldesign" target="_blank">Nazar Miller</a></div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="swiper-container qrt-main-slider">
          <div class="qrt-slider-pagination">
            <div class="swiper-pagination swiper-main-pagination"></div>
          </div>
          <div class="qrt-slider-navigation qrt-absolute">
            <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i class="fas fa-arrow-left"></i><span>prev</span></div>
            <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i class="fas fa-arrow-right"></i></div>
          </div>
          <div class="swiper-wrapper" >
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <video class="qrt-video-background " muted defaultMuted playsinline autoplay loop data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    <source src="img/video/infiwin facebook.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30"></h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20"></div>
                     </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="img/projects/original-size/16.jpg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architecture is <br>about creating order</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="about-us" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="contact" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="img/projects/original-size/15.jpeg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Our knowledge <br>is your property</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="about-us" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="contact" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jquery js -->
    <script src="js/plugins/jquery.min.js"></script>
    <!-- anime js -->
    <script src="js/plugins/anime.min.js"></script>
    <!-- swiper js -->
    <script src="js/plugins/swiper.min.js"></script>
    <!-- progressbar js -->
    <script src="js/plugins/progressbar.min.js"></script>
    <!-- smooth scrollbar js -->
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
    <!-- overscroll js -->
    <script src="js/plugins/overscroll.min.js"></script>
    <!-- isotope js -->
    <script src="js/plugins/isotope.min.js"></script>
    <!-- fancybox js -->
    <script src="js/plugins/fancybox.min.js"></script>
    <!-- swup js -->
    <script src="js/plugins/swup.min.js"></script>
    <!-- mapbox js -->
    <script src="js/plugins/mapbox.min.js"></script>

    <!-- main js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from elanta.app/nazar/quarty-demo/light/home-combined by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2023 04:46:57 GMT -->
</html>
