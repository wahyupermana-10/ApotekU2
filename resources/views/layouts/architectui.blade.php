<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components." />
    <meta name="msapplication-tap-highlight" content="no" />
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="{{ asset('architectui') }}/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
      <div class="app-header header-shadow">
        <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
            <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        <div class="app-header__content">
          <div class="app-header-right">
            <div class="header-btn-lg pr-0">
              <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                  <div class="widget-content-left">
                    <div class="btn-group">
                      <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                        <img width="42" class="rounded-circle" src="{{ asset('architectui') }}/assets/images/avatars/1.jpg" alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="widget-content-left ml-3 header-user-info">
                    <div class="widget-heading">Alina Mclourd</div>
                  </div>
                  <div class="widget-content-right header-user-info ml-3">
                    <button type="button" class="btn-shadow p-1 btn btn-danger btn-sm show-toastr-example">
                      <i class="fa text-white pr-1 pl-1">LOGOUT</i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
          <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
              <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
          <div class="app-header__mobile-menu">
            <div>
              <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
          <div class="app-header__menu">
            <span>
              <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
              </button>
            </span>
          </div>
          <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
              <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Administrasi</li>
                <li>
                  <a href="#">
                    <i class="metismenu-icon pe-7s-science"></i>
                    Obat
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  <ul>
                    <li>
                      <a href="/obat">
                        <i class="metismenu-icon"></i>
                        Daftar Obat
                      </a>
                    </li>
                    <li>
                      <a href="elements-dropdowns.html"> <i class="metismenu-icon"> </i>Tambah Obat </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#">
                    <i class="metismenu-icon pe-7s-notebook"></i>
                    Kategori Obat
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  <ul>
                    <li>
                      <a href="/kategori">
                        <i class="metismenu-icon"></i>
                        Kategori Obat
                      </a>
                    </li>
                    <li>
                      <a href="kategori/create"> <i class="metismenu-icon"> </i>Tambah Kategori Obat</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#">
                    <i class="metismenu-icon pe-7s-users"></i>
                    Pembeli
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  <ul>
                    <li>
                      <a href="elements-buttons-standard.html">
                        <i class="metismenu-icon"></i>
                        Daftar Pembeli
                      </a>
                    </li>
                    <li>
                      <a href="elements-dropdowns.html"> <i class="metismenu-icon"> </i>Tambah Pembeli</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="app-main__outer">
          <div class="app-main__inner">
            @yield('content')
          </div>
          <div class="app-wrapper-footer"></div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
      </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
  </body>
</html>