<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width, initial-scale=1.0">
  <title>Best Tour Plan - Hotel Booking</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Nunito:wght@400;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header class="navbar navbar--mobile--fixed">
    <div class="container">
      <div class="navbar-top">

        <a href="/" class="logo">
          <img src="assets/img/logo.svg" alt="Logo: Best Tour Plan" class="logo__image">
        </a>

        <form action="#" class="search navbar__search navbar__search--mobile--hidden">
          <input type="text" class="search__input" placeholder="Search Location">
          <button class="search__button">
            <img src="assets/img/search.svg" alt="Icon: search">
          </button>
        </form>

        <a href="#" class="user navbar__user navbar__user--mobile--hidden">
          <img src="assets/img/user-avatar.jpg" alt="Avatar: Nathan" class="user__avatar">
          <span class="user__name">Nathan</span>
        </a>
        <!-- /.user -->
        <!--Gamburger-->
        <button class="menu-button navbar-top__menu-button">
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
        </button>
        <!-- /.menu-button -->
      </div>
      <!-- /.navbar-top -->
    </div>
    <!-- /.container -->

    <nav class="navbar-bottom">
      <div class="container">
        <ul class="navbar-menu">
          <!--user mobile box-->
          <li class="navbar-menu__item navbar-menu__item--mobile--visible">
            <a href="#" class="user navbar__user navbar__user--mobile--visible">
              <img src="assets/img/user-avatar.jpg" alt="Avatar: Nathan" class="user__avatar">
              <span class="user__name user__name--light">Nathan</span>
            </a>
          </li>
          <!--end user-->
          <!--search mobile box-->
          <li class="navbar-menu__item navbar-menu__item--mobile--visible">
            <form action="#" class="search navbar__search navbar__search--mobile--visible">
              <input type="text" class="search__input" placeholder="Search Location">
              <button class="search__button">
                <img src="assets/img/search.svg" alt="Icon: search">
              </button>
            </form>
          </li>
          <!--./end search-->
          <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">All Deals</a></li>
          <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Hotels</a></li>
          <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Activities</a></li>
          <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Hotel Day Packages</a></li>
          <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Restaurants</a></li>
          <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Events</a></li>
          <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Rodrigues</a></li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar-bottom -->
  </header>
  <!-- /.navbar -->
  <nav class="breadcrumb ">
    <div class="container">
      <ul class="breadcrumb-list">
        <li class="breadcrumb-list__item"><a href="#" class="breadcrumb-list__link">Home </a></li>
        <li class="breadcrumb-list__item"><a href="#" class="breadcrumb-list__link">Flash Offers </a></li>
        <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
      </ul>
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.breadcrumb -->
  <section class="hotel">
    <div class="container">
      <div class="hotel-info">
        <div class="hotel-info__text">
          <div class="hotel-wrapper">
            <div class="stars">
              <img src="assets/img/star.svg" alt="Star">
              <img src="assets/img/star.svg" alt="Star">
              <img src="assets/img/star.svg" alt="Star">
              <img src="assets/img/star.svg" alt="Star">
              <img src="assets/img/star.svg" alt="Star">
            </div>

            <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>

            <span class="offer hotel-info__offer">Flash Offer</span>
          </div>


          <p class="hotel-description hotel-info__description">
            Half-Board / All Inclusive + Complimentary Activities + Child Stays Free
          </p>
        </div>

        <div class="rating hotel-info__rating">
          <span class="rating__text">User Rattings</span>
          <span class="rating__counter">4.5/<span class="rating__number">5</span></span>
        </div>
      </div>
      <!-- /.hotel-info -->


      <div class="hotel-grid">

        <!-- Slider main container -->
        <div class="swiper hotel-slider hotel__slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->

            <div class="swiper-slide hotel-slider__item">
              <img src="assets/img/slide0.jpg" alt="Slider" class="hotel-slider__image">
            </div>
            <div class="swiper-slide hotel-slider__item">
              <img src="assets/img/slide1.jpg" alt="Slider" class="hotel-slider__image">
            </div>
            <div class="swiper-slide hotel-slider__item">
              <img src="assets/img/slide2.jpg" alt="Slider" class="hotel-slider__image">
            </div>
            <div class="swiper-slide hotel-slider__item">
              <img src="assets/img/slide3.jpg" alt="Slider" class="hotel-slider__image">
            </div>
            <div class="swiper-slide hotel-slider__item">
              <img src="assets/img/slide4.jpg" alt="Slider" class="hotel-slider__image">
            </div>


          </div>
          <!-- If we need navigation buttons -->
          <button class="hotel-slider__button hotel-slider__button--prev"></button>
          <button class="hotel-slider__button hotel-slider__button--next"></button>

        </div>
        <!--- /.swiper-->


        <div class="hotel-right">
          <div class="booking">
            <div class="booking__info">
              <div class="booking__price">
                <span class="booking__start">price starts as</span>
                <strong class="booking__pricetag">$ 8,500</strong>
                <span class="booking__per-room">per room / night</span>
              </div>
              <!---booking__price-->
              <div class="booking__room">

                <div class="booking__text">
                  <img src="assets/img/user.svg" alt="Icon: user" class="booking__icon">
                  <span class="booking__description">2 x Guests</span>
                </div>
                <div class="booking__text">
                  <img src="assets/img/home.svg" alt="Icon: home" class="booking__icon">
                  <span class="booking__description">1 x Room</span>
                </div>

              </div>
              <!-- /.booking__room -->
            </div>
            <!-- /.booking__info -->

            <div class="booking__call-center">
              <span class="booking__heading">Quick Booking</span>
              <a class="booking__number" href="tel:12100">
                <img src="assets/img/phone-call.svg" alt="Icon: phone" class="booking__icon">
                <span class="booking__num">12100</span>
              </a>
            </div>
            <!-- /.booking__call-center -->
            <button data-togle="modal" class="button booking__button">View Other Options</button>
          </div>
          <!-- /.booking -->

          <div class="map">

            <div id="map" style="width: 347px; height: 213px"></div>
          </div>
          <!-- /.map -->
        </div>
        <!-- /.hotel-right -->
      </div>
      <!-- /.hotel-grid -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.hotel -->

  <section class="packages">
    <div class="container">
      <div class="grid">
        <div class="grid__element">

        </div>
        <div class="grid__element"></div>
        <div class="grid__element"></div>
        <div class="grid__element"></div>
        <div class="grid__element"></div>
        <div class="grid__element"></div>

      </div>
    </div>
  </section>
  <!-- /.packages -->


  <section class="newsletter">
    <div class="newsletter-wrapper">
      <h2 class="newsletter-title newsletter__title">
        subscribe to our
        <span class="newsletter-title__strong">Newsletter</span>
      </h2>
      <form action="sendTo.php" class="subscribe newsletter__subscribe" >
        <input type="text" class="subscribe__input" placeholder="Your email address" name="email">
        <button class="subscribe__button">Send</button>
      </form>
    </div>
    <!-- /.newsletter-wrapper -->
  </section>
  <!-- /.newsletter -->

  <section class="reviews">
    <div class="container">
      <h2 class="reviews__title">What people think about us</h2>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img src="assets/img/laura.jpg" alt="Photo: Laura Fox" class="reviews-slider__avatar">
                <h3 class="reviews-slider__username">Laura Fox</h3>
                <span class="reviews-slider__date">Stayed 1 Yanuar, 2020</span>
                <div class="reviews-slider__rating">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                </div>
              </div>
              <p class="reviews-slider__text">
                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well.
                Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities articles
                were in corner of gallery which were giving bad feeling. Breakfast was good and support of the staff was
                also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but
                self location in a narrow street is not good. Overall it was a good experience and could recommend.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, adipisci soluta rerum debitis
                dignissimos facilis quisquam natus. Beatae eum debitis laboriosam sit cupiditate, ad, perferendis ex
                assumenda laborum praesentium facere itaque nulla expedita explicabo earum odio quaerat quasi nisi iusto
                ipsam culpa voluptatem distinctio sint.
              </p>
            </div>
          </div>
          <!--./swiper-slide-->
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img src="assets/img/reviews-avatar.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar">
                <h3 class="reviews-slider__username">Megan Fox</h3>
                <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                <div class="reviews-slider__rating">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                </div>
              </div>
              <p class="reviews-slider__text">
                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well.
                Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities articles
                were in corner of gallery which were giving bad feeling. Breakfast was good and support of the staff was
                also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but
                self location in a narrow street is not good. Overall it was a good experience and could recommend.
              </p>
            </div>
          </div>
          <!--./swiper-slide-->
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img src="assets/img/esmeralda.jpg" alt="Photo: Esmeralda Brumermblesk" class="reviews-slider__avatar">
                <h3 class="reviews-slider__username">Esmeralda Brumermblesk</h3>
                <span class="reviews-slider__date">Stayed 8 Nov, 2015</span>
                <div class="reviews-slider__rating">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                </div>
              </div>
              <p class="reviews-slider__text">
                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well.
                Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities articles
                were in corner of gallery which were giving bad feeling. Breakfast was good and support of the staff was
                also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but
                self location in a narrow street is not good. Overall it was a good experience and could recommend.
              </p>
            </div>
          </div>
          <!--./swiper-slide-->
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img src="assets/img/reviews-avatar-2.jpg" alt="Photo: Hayns Frogx" class="reviews-slider__avatar">
                <h3 class="reviews-slider__username">Hayns Frogx</h3>
                <span class="reviews-slider__date">Stayed 10 Nov, 2020</span>
                <div class="reviews-slider__rating">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                  <img src="assets/img/star.svg" alt="Star">
                </div>
              </div>
              <p class="reviews-slider__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat distinctio cum hic veritatis dolorem
                error voluptatum, sunt ducimus dolore deserunt harum obcaecati. Ex molestiae quaerat quia hic
                consequuntur, consectetur incidunt? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe
                distinctio est, incidunt corporis adipisci voluptatibus! Beatae dolores cumque amet accusamus ipsa quas
                iure earum! Provident illo commodi autem minima esse..
              </p>
            </div>
          </div>
          <!--./swiper-slide-->
        </div>
        <!--./swiper-wrapper-->
        <button class="reviews-slider__button reviews-slider__button--prev"></button>
        <button class="reviews-slider__button reviews-slider__button--next"></button>
      </div>
      <!--./reviews-slider-->
    </div>
  </section>
  <!-- /.reviews -->

  <section class="activities">
    <div class="container">
      <h2 class="activities__title">Other Activities</h2>
      <div class="activities-wrapper">
        <div class="card activities__card">
          <img src="assets/img/activities-1.jpg" alt="The curious corner" class="card__image">
          <h3 class="card__title">The curious corner
            of chamarel</h3>
          <button class="card__button">Book Now</button>
        </div>
        <div class="card activities__card">
          <img src="assets/img/activities-2.jpg" alt="Gymkhana club golf" class="card__image">
          <h3 class="card__title">Gymkhana club golf
            course</h3>
          <button class="card__button">Book Now</button>
        </div>
        <div class="card activities__card">
          <img src="assets/img/activities-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image">
          <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
          <button class="card__button">Book Now</button>
        </div>
        <div class="card activities__card">
          <img src="assets/img/activities-4.jpg" alt="The blue marine discovery quest" class="card__image">
          <h3 class="card__title">The blue marine discovery quest</h3>
          <button class="card__button">Book Now</button>
        </div>
        <!--./card-->
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.activities -->


  <footer class="footer">
    <div class="container">
      <!--grid container-->
      <div class="footer-wrapper">

        <img src="assets/img/vertical-logo.svg" alt="Logo: Best Tour Plan" class="logo footer__logo">
        <div class="footer__list footer__categories">
          <h3 class="footer__title">All categories</h3>
          <ul class="footer__ul">
            <li class="li footer__item"><a href="#" class="footer__link">All Deals</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Hotels</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Activities</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Spa Packages</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Hotel Day Packages</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Restaurants</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Fitness</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Rodrigues</a></li>
          </ul>
        </div>
        <!--./footer__list-->
        <div class="footer__list footer__additional">
          <h3 class="footer__title">Additional Information</h3>
          <ul class="footer__ul">
            <li class="li footer__item"><a href="#" class="footer__link">About Us</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Contact Us</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">How does it work?</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Frequently Asked Questions</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Deals.mu loyalty program</a></li>
            <li class="li footer__item"><a href="#" class="footer__link">Promote your Business on BTP</a></li>
          </ul>
        </div>
        <!--./footer__list-->
        <div class="footer__social-network">
          <h3 class="footer__title footer__title--inline">Social Network</h3>
          <div class="footer__social-links">
            <a href="#" class="footer__link"><img src="assets/img/facebook.svg" alt="icon: facebook"></a>
            <a href="#" class="footer__link"><img src="assets/img/youtube.svg" alt="icon: youtue"></a>
            <a href="#" class="footer__link"><img src="assets/img/instagram.svg" alt="icon: instagram"></a>
          </div>
          <!-- /.footer__social-links -->
        </div>
        <!--./social-network-->

        <div class="footer__list footer__legal">
          <h3 class="footer__title">Legal Information</h3>
          <ul class="footer__ul">
            <li class="footer__item"><a href="#" class="footer__link">Terms & Conditions</a></li>
            <li class="footer__item"><a href="#" class="footer__link">Disclaimer</a></li>
            <li class="footer__item"><a href="#" class="footer__link">Cancellation policy</a></li>
            <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>
          </ul>
        </div>
        <!--./footer__list-->
        <div class="footer__contact-details">
          <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
          <p class="footer__text">
            Feel free to contact us by phone, email or by our contact form
          </p>
          <ul class="footer__ul">
            <li class="footer__item footer__item--mb-2">
              <div class="footer__icon-wrapper">
                <img class="footer__icon" src="assets/img/footer/map-marker.svg" alt="icon: map marker">
              </div>

              9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States
            </li>
            <li class="footer__item footer__item--mb-2">
              <div class="footer__icon-wrapper">
                <img class="footer__icon" src="assets/img/footer/phone-call.svg" alt="icon: phone call">
              </div>

              Tel (business hours) : 269 1500<br>
              Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00 pm)<br>
              Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)
            </li>
            <li class="footer__item footer__item--mb-2">
              <div class="footer__icon-wrapper">
                <img class="footer__icon" src="assets/img/footer/email.svg" alt="icon: email">
              </div>

              cherly.lawson@example.com
            </li>
          </ul>
        </div>
        <!-- /.footer__contact-details -->
        <div class="footer__contact-form">
          <h3 class="footer__title footer__title--mb-3">Send us a message</h3>

          <form action="send.php" method="POST" class="footer__form">
            <input type="text" class="input footer__input" placeholder="Your Full Name*" name="name">
            <input type="text" class="input footer__input" placeholder="Phone Number*" name="phone">
            <textarea  class=" message footer__message" placeholder="Message" name="message"></textarea>
            <button class="button footer__button" type="submit">Send</button>
            <span class="footer__info">* Required Fields</span>
          </form>
        </div>
        <!-- /.footer__contact-forn -->

        <div class="footer-copyright">
          <ul class="footer-menu">
            <li class="footer-menu__item"><a href="#" class="footer-menu__link">Disclaimer</a></li>
            <li class="footer-menu__item"><a href="#" class="footer-menu__link">Conditions of use</a></li>
            <li class="footer-menu__item"><a href="#" class="footer-menu__link">Cancellation policy</a></li>
          </ul>
          <img class="footer-stars" src="assets/img/footer/footer-img.svg" alt="icon: all stars"></a></li>

        </div>
        <!-- /.footer__copyright -->
      </div>
      <!-- /.footer-wrapper -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer -->

<div class="modal">
  <div class="modal__overlay">

  </div>
  <!-- /.modal__overlay -->
  <div class="modal__dialog">
    <a href="#" class="modal__close">
      <img src="assets/img/close.svg" alt="icon: close">
    </a>
    <h3 class="modal__title">Send us a message</h3>

          <form action="sendModal.php" method="POST" class="modal__form">
            <input type="text" class="input modal__input" placeholder="Your Full Name*" name="name">
            <input type="text" class="input modal__input" placeholder="Phone Number*" name="phone">
            <input type="text" class="input modal__input" placeholder="Email*" name="email">
            <textarea  class="message modal__message" placeholder="Message" name="message"></textarea>
            <button class="button modal__button" type="submit">Send</button>
            <span class="modal__info">* Required Fields</span>
          </form>
    <!-- /.modal__close -->
  </div>
  <!-- /.modal_dialog -->
</div>
<!-- /.modal -->

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=36f1ee3f-546b-475c-a451-f4972c17e41e&lang=ru_RU"
    type="text/javascript">
  </script>
  
  
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>
</body>

</html>