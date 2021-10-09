<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Интернет-магазин</title>
  <meta name="robots" content="index, follow" />
  <meta name="description"
    content="Tromic car accessories bootstrap 5 template is an awesome website template for any modern car accessories shop.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

  <!-- CSS
    ============================================ -->

  <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css'}}" /> --}}
  <link rel="stylesheet" href="assets/css/vendor/Pe-icon-7-stroke.css" />

  <!-- Plugin CSS (Global Plugins Files) -->
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.min.css" />
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css" />

  <!-- Minify Version -->
  <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>
  <div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
      <div class="spinner d-flex justify-content-center align-items-center h-100">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">

    <!-- Begin Main Header Area -->
    <header class="main-header-area">

      <div class="header-middle header-sticky py-6 py-lg-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="header-middle-wrap position-relative">

                <a href="{{ route('home') }}" class="header-logo">
                  <img src="assets/images/logo/dark_new.png" alt="Header Logo">
                </a>

                <div class="main-menu d-none d-lg-block">
                  <nav class="main-nav">
                    <ul>
                      {{-- <li> --}}
                      {{-- <a href="{{ route('home') }}">Home</a> --}}
                      {{-- </li> --}}
{{--                      <li class="megamenu-holder">--}}
{{--                        <a href="{{ route('shop') }}">Категории--}}
{{--                          <i class="pe-7s-angle-down"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="drop-menu megamenu">--}}
{{--                          <li>--}}
{{--                            <span class="title">Категория 1</span>--}}
{{--                            <ul>--}}
{{--                              <li>--}}
{{--                                <a href="{{ route('shop') }}">Shop Default</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="shop-grid-fullwidth.html">Shop Grid Fullwidth</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="shop-right-sidebar.html">Shop Right Sidebar</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="shop-list-fullwidth.html">Shop List Fullwidth</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>--}}
{{--                              </li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}
{{--                          <li>--}}
{{--                            <span class="title">Категория 2</span>--}}
{{--                            <ul>--}}
{{--                              <li>--}}
{{--                                <a href="single-product-variable.html">Single Product Variable</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="single-product-group.html">Single Product Group</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="single-product.html">Single Product Default</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="single-product-affiliate.html">Single Product Affiliate</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="single-product-sale.html">Single Product Sale</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="single-product-sticky.html">Single Product Sticky</a>--}}
{{--                              </li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}
{{--                          <li>--}}
{{--                            <span class="title">Категория 3</span>--}}
{{--                            <ul>--}}
{{--                              <li>--}}
{{--                                <a href="my-account.html">My Account</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="login-register.html">Login | Register</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="cart.html">Shopping Cart</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="wishlist.html">Wishlist</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="compare.html">Compare</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="checkout.html">Checkout</a>--}}
{{--                              </li>--}}
{{--                            </ul>--}}
{{--                          </li>--}}
{{--                          <li>--}}
{{--                            <div class="banner">--}}
{{--                              <img src="assets/images/megamenu/banner/1.jpg" alt="Menu Banner">--}}
{{--                            </div>--}}
{{--                          </li>--}}
{{--                        </ul>--}}
{{--                      </li>--}}
{{--                      <li class="drop-holder">--}}
{{--                        <a href="{{ route('shop') }}">Категории--}}
{{--                          <i class="pe-7s-angle-down"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="drop-menu">--}}
{{--                          <li>--}}
{{--                            <a href="#">Категория 1</a>--}}
{{--                          </li>--}}
{{--                          <li>--}}
{{--                            <a href="#">Категория 2</a>--}}
{{--                          </li>--}}
{{--                          <li>--}}
{{--                            <a href="#">Категория 3</a>--}}
{{--                          </li>--}}
{{--                        </ul>--}}
{{--                      </li>--}}
{{--                      <li class="drop-holder">--}}
{{--                        <a href="blog.html">Доставка</a>--}}
{{--                      </li>--}}
{{--                      <li class="drop-holder">--}}
{{--                        <a href="blog.html">Оплата</a>--}}
{{--                      </li>--}}
{{--                      <li>--}}
{{--                        <a href="contact.html">Контакты</a>--}}
{{--                      </li>--}}
{{--                      <li>--}}
{{--                        <a href="contact.html">О&nbsp;нас</a>--}}
{{--                      </li>--}}
                    @foreach($menu as $menuItem)
                            @if($menuItem -> id === 2)
                                <li class="drop-holder">
                                    <a href="{{ $menuItem -> link }}">{{ $menuItem -> title }}
                                        <i class="pe-7s-angle-down"></i>
                                    </a>
                                    <ul class="drop-menu">
                                        @foreach($menuItem->category as $category)
                                            <li>
                                                <a href="#">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $menuItem -> link }}">{{ $menuItem -> title }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                  </nav>
                </div>
                <div class="header-right">
                  <ul>
                    <li class="dropdown d-none d-lg-block">
                      <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton"
                        data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                        <i class="pe-7s-user"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                        <li><a class="dropdown-item" href="my-account.html">Аккаунт</a></li>
                          <li><a class="dropdown-item" href="{{ route('admin') }}">Админка</a></li>
                        <li><a class="dropdown-item" href="login-register.html">Войти | Регистрация</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="pe-7s-search"></i>
                      </a>
                    </li>
                    <li class="d-none d-lg-block">
                      <a href="wishlist.html">
                        <i class="pe-7s-like"></i>
                      </a>
                    </li>
                    <li class="minicart-wrap me-3 me-lg-0">
                      <a href="#miniCart" class="minicart-btn toolbar-btn">
                        <i class="pe-7s-shopbag"></i>
                        <span class="quantity">5</span>
                      </a>
                    </li>
                    <li class="mobile-menu_wrap d-block d-lg-none">
                      <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                        <i class="pe-7s-menu"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-body">
          <div class="inner-body">
            <div class="offcanvas-top">
              <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
            </div>
            <div class="offcanvas-user-info text-center px-6 pb-5">
              <div class=" text-silver">
                <p class="shipping mb-0">Бесплатная доставка при заказе от <span class="text-primary">$200</span></p>
              </div>
              <ul class="dropdown-wrap justify-content-center text-silver">
                <li class="dropdown dropup">
                  <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Русский
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                    <li><a class="dropdown-item" href="#">Русский</a></li>
                  </ul>
                </li>
                <li class="dropdown dropup">
                  <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button" id="currencyButtonTwo"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    USD
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                    <li><a class="dropdown-item" href="#">RUB</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                  </ul>
                </li>
                <li class="dropdown dropup">
                  <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="pe-7s-users"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                    <li><a class="dropdown-item" href="my-account.html">Аккаунт</a></li>
                    <li><a class="dropdown-item" href="login-register.html">Войти | Регистрация</a></li>
                  </ul>
                </li>
                <li>
                  <a href="wishlist.html">
                    <i class="pe-7s-like"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="offcanvas-menu_area">
              <nav class="offcanvas-navigation">
                <ul class="mobile-menu">
                  <li class="menu-item-has-children">
                    <a href="#">
                      <span class="mm-text">На главную
                      </span>
                    </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">
                      <span class="mm-text">Каталог
                        <i class="pe-7s-angle-down"></i>
                      </span>
                    </a>
                    <ul class="sub-menu">
                      <li class="menu-item-has-children">
                        <a href="#">
                          <span class="mm-text">Категория 1
                            <i class="pe-7s-angle-down"></i>
                          </span>
                        </a>
                        <ul class="sub-menu">
                          <li>
                            <a href="{{ route('shop') }}">
                              <span class="mm-text">Shop Default</span>

                            </a>
                          </li>
                          <li>
                            <a href="shop-grid-fullwidth.html">
                              <span class="mm-text">Подкатегория 2</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">
                          <span class="mm-text">Категория 2
                            <i class="pe-7s-angle-down"></i>
                          </span>
                        </a>
                        <ul class="sub-menu">
                          <li>
                            <a href="single-product.html">
                              <span class="mm-text">Подкатегория 3</span>
                            </a>
                          </li>
                          <li>
                            <a href="single-product-group.html">
                              <span class="mm-text">Подкатегория 4</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">
                      <span class="mm-text">Доставка</span>
                    </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">
                      <span class="mm-text">Контакты</span>
                    </a>
                  </li>
                  <li>
                    <a href="contact.html">
                      <span class="mm-text">О нас</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                data-tippy-arrow="true" data-tippy-theme="sharpborder">
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-search">
                <span class="searchbox-info">Начните писать и нажмите Enter для поиска или Esc для закрытия</span>
                <form action="#" class="hm-searchbox">
                  <input type="text" name="Search entire store here..." value="Поиск по всему магазину..."
                    onblur="if(this.value==''){this.value='Поиск по всему магазину...'}"
                    onfocus="if(this.value=='Поиск по всему магазину...'){this.value=''}">
                  <button class="search-btn" type="submit" aria-label="searchbtn"><i
                      class="pe-7s-search"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-body">
          <div class="minicart-content">
            <div class="minicart-heading">
              <h4 class="mb-0">Корзина</h4>
              <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Закрыть"
                  data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                  data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
            </div>
            <ul class="minicart-list">
              <li class="minicart-product">
                <a class="product-item_remove" href="#"><i class="pe-7s-trash" data-tippy="Wanna Remove?"
                    data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                <a href="{{ route('shop') }}" class="product-item_img">
                  <img class="img-full" src="assets/images/product/small-size/1-1-70x70.png" alt="Product Image">
                </a>
                <div class="product-item_content">
                  <a class="product-item_title" href="{{ route('shop') }}">Tail Light</a>
                  <span class="product-item_quantity">1 x $80.00</span>
                </div>
              </li>
              <li class="minicart-product">
                <a class="product-item_remove" href="#"><i class="pe-7s-trash" data-tippy="Wanna Remove?"
                    data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                <a href="{{ route('shop') }}" class="product-item_img">
                  <img class="img-full" src="assets/images/product/small-size/1-2-70x70.png" alt="Product Image">
                </a>
                <div class="product-item_content">
                  <a class="product-item_title" href="{{ route('shop') }}">Wiper Blades</a>
                  <span class="product-item_quantity">1 x $80.00</span>
                </div>
              </li>
              <li class="minicart-product">
                <a class="product-item_remove" href="#">
                  <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                    data-tippy-theme="sharpborder"></i>
                </a>
                <a href="{{ route('shop') }}" class="product-item_img">
                  <img class="img-full" src="assets/images/product/small-size/1-3-70x70.png" alt="Product Image">
                </a>
                <div class="product-item_content">
                  <a class="product-item_title" href="{{ route('shop') }}">Suspension</a>
                  <span class="product-item_quantity">1 x $80.00</span>
                </div>
              </li>
              <li class="minicart-product">
                <a class="product-item_remove" href="#">
                  <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                    data-tippy-theme="sharpborder"></i>
                </a>
                <a href="{{ route('shop') }}" class="product-item_img">
                  <img class="img-full" src="assets/images/product/small-size/1-4-70x70.png" alt="Product Image">
                </a>
                <div class="product-item_content">
                  <a class="product-item_title" href="{{ route('shop') }}">Air Filter</a>
                  <span class="product-item_quantity">1 x $80.00</span>
                </div>
              </li>
              <li class="minicart-product">
                <a class="product-item_remove" href="#">
                  <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                    data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                    data-tippy-theme="sharpborder"></i>
                </a>
                <a href="{{ route('shop') }}" class="product-item_img">
                  <img class="img-full" src="assets/images/product/small-size/1-5-70x70.png" alt="Product Image">
                </a>
                <div class="product-item_content">
                  <a class="product-item_title" href="{{ route('shop') }}">Car Brakes</a>
                  <span class="product-item_quantity">1 x $80.00</span>
                </div>
              </li>
            </ul>
          </div>
          <div class="minicart-item_total">
            <span>Subtotal</span>
            <span class="ammount">$240.00</span>
          </div>
          <div class="group-btn_wrap d-grid gap-2">
            <a href="cart.html" class="btn btn-dark btn-primary-hover">Перейти в корзину</a>
            <a href="checkout.html" class="btn btn-dark btn-primary-hover">Оформить заказ</a>
          </div>
        </div>
      </div>
      <div class="global-overlay"></div>
    </header>
    <!-- Main Header Area End Here -->

    @yield('content')


    <!-- Begin Footer Area -->
    <div class="footer-area">
      <div class="footer-top section-space-y-axis-100 text-lavender"
        data-bg-image="assets/images/background-img/1-4-1920x419.png">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="widget-item">
                <div class="footer-logo pb-4">
                  <a href="{{ route('home') }}">
                    <img src="assets/images/logo/light_new.png" alt="Logo">
                  </a>
                </div>
                <p class="short-desc mb-2">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod
                  tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                {{-- Begin Ссылки на социальные сети --}}
                <div class="social-link pt-2">
                  <ul>
                    <li>
                      <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away"
                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away"
                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="fa fa-tumblr"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away"
                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away"
                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                {{-- End Ссылки на социальные сети --}}
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pt-8 pt-lg-0">
              <div class="widget-item">
                <h3 class="widget-title mb-5">Карта сайта</h3>
                  @foreach($menu as $menuItem)
                <ul class="widget-list-item">
                  <li>
                    <i class="fa fa-chevron-right"></i>
                    <a href="{{ $menuItem -> link }}">{{ $menuItem -> title }}</a>
                  </li>
                </ul>
                  @endforeach
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pt-8 pt-lg-0">
              <div class="widget-item">
                <h3 class="widget-title mb-5">Ссылки</h3>
                <ul class="widget-list-item">
                  <li>
                    <i class="fa fa-chevron-right"></i>
                    <a href="#">Личный кабинет</a>
                  </li>
                  <li>
                    <i class="fa fa-chevron-right"></i>
                    <a href="#">Заказы</a>
                  </li>
                  <li>
                    <i class="fa fa-chevron-right"></i>
                    <a href="#">Корзина</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 pt-8 pt-lg-0">
              <div class="widget-item">
                <h3 class="widget-title mb-5">Информация о магазине</h3>
              </div>
              <div class="widget-contact-info pb-2">
                <ul>
                  <li>
                    2005 Stokes Isle Apartment. 896, Washington 10010, USA,
                  </li>
                  <li>
                    <a href="mailto://info@example.com">info@example.com</a>
                  </li>
                  <li>
                    <a href="tel://+68-120034509">(+68) 120034509</a>
                  </li>
                </ul>
              </div>
              <div class="payment-method">
                <a href="#">
                  <img src="assets/images/payment/1.png" alt="Payment Method">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom bg-midnight-express py-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="copyright">
                <span class="copyright-text">© 2021 Интернет-магазин электронники </a> </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Area End Here -->



    <!-- Begin Scroll To Top -->
    <a class="scroll-to-top" href="">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!-- Scroll To Top End Here -->

  </div>

  <!-- Global Vendor, plugins JS -->

  <!-- JS Files
============================================ -->
  <!-- Global Vendor, plugins JS -->

  <!-- Vendor JS -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
  <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

  <!--Plugins JS-->
  <script src="assets/js/plugins/wow.min.js"></script>
  <script src="assets/js/plugins/jquery-ui.min.js"></script>
  <script src="assets/js/plugins/swiper-bundle.min.js"></script>
  <script src="assets/js/plugins/jquery.nice-select.js"></script>
  <script src="assets/js/plugins/parallax.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/tippy.min.js"></script>
  <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
  <script src="assets/js/plugins/mailchimp-ajax.js"></script>

  <!-- Minify Version -->
  <!-- <script src="assets/js/vendor.min.js"></script> -->
  <!-- <script src="assets/js/plugins.min.js"></script> -->

  <!--Main JS (Common Activation Codes)-->
  <script src="assets/js/main.js"></script>
  <!-- <script src="assets/js/main.min.js"></script> -->

</body>

</html>
