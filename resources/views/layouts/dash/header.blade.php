<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Active Group < | > @yield('page_title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('adminAsset/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('adminAsset/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{asset('adminAsset/dist/css/skins/_all-skins.css')}}" rel="stylesheet" type="text/css" />

    <!-- iCheck -->
    <link href="{{asset('adminAsset/plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{asset('adminAsset/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{asset('adminAsset/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{asset('adminAsset/plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{asset('adminAsset/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{asset('adminAsset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminAsset/plugins/noty/noty.css')}}" rel="stylesheet" type="text/css" />
        <style>
            .alert.alert-msg{
              transition: display 1s ease;
            }
            .box-header{
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
            }
            .modal-footer{
                display: flex;
                justify-content: space-around;
            }

        </style>
    @yield('style')
  </head>
  <body class="skin-green sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{route('index')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>G</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Active</b>Group</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('adminAsset/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('adminAsset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                    <p>
                        {{ Auth::user()->name }}
                      <small>Active Group Dashboard</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout_form').submit();" class="btn btn-default btn-flat">Sign out</a>
                        <form action="{{ route('logout') }}" method="post" class="d-none" id="logout_form">
                            @csrf
                        </form>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->

            </ul>
          </div>
        </nav>

      </header>
{{-- ----------------------------------------------------------------------------- --}}
{{-- -------------------------------sidebar--------------------------------------- --}}
{{-- ----------------------------------------------------------------------------- --}}
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('adminAsset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="البحث..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">اختيارات التحكم</li>

            <li class="treeview  class="{{  request()->routeIs('users.*') ? 'active' : ''  }}"">
              <a href="{{ route('users.index') }}">
                <i class="ion ion-ios-people-outline"></i> <span>المستخدميين</span>
              </a>
            </li>

            <li class="header">خاص بالموقع</li>
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-home"></i> <span>الموقع</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu menu-open" style="display: block;">
                    <li class="{{  request()->routeIs('slider_images.*') ? 'active' : ''  }}">
                       <a href="{{ route('slider_images.index') }}">
                         <i class="fa fa-image"></i> <span>الصور الرئيسية</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('company.*') ? 'active' : ''  }}">
                       <a href="{{ route('company.index') }}">
                         <i class="fa fa-weixin"></i> <span>عن الشركة</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('company_contact.*') ? 'active' : ''  }}">
                       <a href="{{ route('company_contact.index') }}">
                         <i class="fa fa-tty"></i> <span>التواصل</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('why_us.*') ? 'active' : ''  }}">
                       <a href="{{ route('why_us.index') }}">
                         <i class="fa fa-graduation-cap"></i> <span>لماذا نحن</span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa  fa-leanpub"></i> <span>المقالات</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu menu-open" style="display: block;">
                    <li class="{{  request()->routeIs('blog.*') ? 'active' : ''  }}">
                       <a href="{{ route('blog.index') }}">
                         <i class="fa fa-pencil-square"></i> <span>المقالات الرئيسية</span>
                        </a>
                    </li>
                </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding: 35px 20px">
          <h1>
            لوحة التحكم
            <small>@yield('page_title')</small>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">


