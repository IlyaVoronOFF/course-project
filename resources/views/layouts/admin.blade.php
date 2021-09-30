<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />
  <title>Админ-панель</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Tromic" name="GB-team" />
  <!-- App favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

  <!-- Bootstrap Css -->
  <link href="{{ asset('assets/css/admin/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
  <!-- Icons Css -->
  <link href="{{ asset('assets/css/admin/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ asset('assets/css/admin/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">
  <!-- Begin page -->
  <div id="layout-wrapper">

    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="{{ route('admin') }}" class="logo logo-light">
              <span class="logo-sm">
                <img src="{{ asset('assets/images/admin/logo-sm.png') }}" alt="" height="40">
              </span>
              <span class="logo-lg">
                <img src="{{ asset('assets/images/admin/logo-light.png') }}" alt="" height="40">
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <i class="mdi mdi-menu"></i>
          </button>

        </div>

        <div class="d-flex">
          <!-- App Search-->
          <form class="app-search d-none d-lg-block">
            <div class="position-relative">
              <input type="text" class="form-control" placeholder="Поиск...">
              <span class="fa fa-search"></span>
            </div>
          </form>

          <div class="dropdown d-inline-block d-lg-none ml-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
              aria-labelledby="page-header-search-dropdown">

              <form class="p-3">
                <div class="form-group m-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ..."
                      aria-label="Recipient's username">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="dropdown d-none d-lg-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
              <i class="mdi mdi-fullscreen"></i>
            </button>
          </div>


          <div class="dropdown d-inline-block">
            <button type="button" class="btn noti-icon header-item waves-effect" id="page-header-user-dropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-settings-outline"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- item-->
              <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i>
                Профиль</a>
              <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle mr-1"></i>
                Кошелек</a>
              <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i
                  class="mdi mdi-settings font-size-17 align-middle mr-1"></i>
                Настройки</a>
              <a class="dropdown-item" href="#"><i
                  class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i>
                Заблокировать экран</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#"><i
                  class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i>
                Выйти</a>
            </div>
          </div>

        </div>
      </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

      <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Категории</li>

            <li>
              <a href="{{ route('products.index') }}" class="waves-effect">
                <i class="ti-package"></i>
                <span>Товары</span>
              </a>
            </li>

            <li>
              <a href="{{ route('orders.index') }}" class=" waves-effect">
                <i class="ti-shopping-cart"></i>
                <span>Заказы</span>
              </a>
            </li>

            <li>
              <a href="{{ route('users.index') }}" class="waves-effect">
                <i class="ti-id-badge"></i>
                <span>Пользователи</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->


    <div class="main-content">

      @yield('main')

      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <script>
                document.write(new Date().getFullYear())
              </script>. Создано студентами Geekbrains, руководствуясь AGILE методологией</span>
            </div>
          </div>
        </div>
      </footer>

    </div>

  </div>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

  <script src="{{ asset('js/admin/app.js') }}"></script>

  @stack('js-product-delete')

</body>

</html>
