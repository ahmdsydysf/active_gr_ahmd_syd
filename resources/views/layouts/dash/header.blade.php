<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Active Group</title>
  <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('adminassets/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <!-- DATA TABLES -->
<!-- DATA TABLES -->
<link href="{{ asset('adminassets/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('adminassets/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('adminassets/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('adminassets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('adminassets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('adminassets/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('adminassets/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('adminassets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    <!--============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/plugins/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{ asset('adminassets/plugins/css/data-table/bootstrap-editable.css')}}">
    @if(isset($canonical))
    <link rel="canonical" href="{{ $canonical }}" />
    @endif

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <style>
            .alert.alert-msg{
              transition: display 1s ease;
            }
            /* .box-header{
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
            } */
            .modal-footer{
                display: flex;
                justify-content: space-around;
            }
            .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
                z-index: 2;
                color: #fff;
                background-color: #00A65A;
                border-color: #00A65A;
                cursor: default;
            }
            span.thumbnail {
                width: 150px !important ;
            }

            #example_length{
                float: inline-end;
            }

            .bg-olive {
                background-color: #00A65A !important ;
            }
        </style>
         <style>
            .bootstrap-table .table:not(.table-condensed)>tbody>tr>td {
                /* text-indent: 10px; */
                padding-right: 10px !important;

            }

            .modal-danger .modal-body {
                background-color: #fff !important;
                color: #000 !important;
                text-align: center
            }

            .modal-secondary .modal-header {
                background: #444;
                color: #fff;
                border-bottom-color: #f4f4f4;
            }

            .modal-danger .modal-footer {
                background-color: #fff !important;
                color: #000 !important;
            }

            .modal-secondary .modal-body {
                background-color: #fff !important;
                color: #000 !important;
                text-align: center
            }

            .modal-secondary .modal-footer {
                background-color: #fff !important;
                color: #000 !important;
            }

            .btn-outline {
                border: 1px solid #000;
                background: transparent;
                color: #000;
            }

            .btn-outline:hover,
            .btn-outline:focus,
            .btn-outline:active {
                border: 1px solid rgb(88, 2, 2);
                background: rgb(88, 2, 2);
                color: #fff;
            }

            .modal-danger .modal-footer {
                border-color: #000;
            }

            table .fa {
                font-size: 25px;
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
          <span class="logo-lg"><b>لوحة التحكم</b></span>
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
                  <img src="{{asset('adminassets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('adminassets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                    <p>
                        {{ Auth::user()->name }}
                      <small>Active Group Dashboard</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    {{-- <div class="pull-left">
                      <a href="" class="btn btn-default btn-flat">Profile</a>
                    </div> --}}
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
          <div class="user-panel" style="background: #fff">
            <img src="{{ asset('webassests/images/logo-1.png')}}" style="width:80%" alt="User Image" />

        </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="#">
                  <i class="fa fa-dashboard"></i> <span>الرئيسية</span>
                </a>

              </li>
            {{-- <li class="treeview {{  request()->routeIs('users.*') ? 'active' : ''  }}">
              <a href="{{ route('users.index') }}">
                <i class="ion ion-ios-people-outline"></i> <span>المستخدميين</span>
              </a>
            </li> --}}
            <li class="treeview {{  request()->routeIs('team_member.*') ? 'active' : ''  }}">
              <a href="{{ route('team_member.index') }}">
                <i class="fa  fa-male"></i> <span>اعضاء الفريق</span>
              </a>
            </li>

            {{-- <li class="header">ادارة المنتجات</li> --}}

            <li class="treeview {{  request()->routeIs('product.*') ? 'active' : ''  }}">
              <a href="{{ route('product.index') }}">
                <i class="fa  fa-shopping-cart"></i> <span>المنتجات</span>
              </a>
            </li>


            <li class="treeview">
                <a href="#">
                  <i class="fa  fa-sitemap"></i> <span>انواع المنتجات</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{  request()->routeIs('mobedat_category.*') ? 'active' : ''  }}">
                       <a href="{{ route('mobedat_category.index') }}">
                         <i class="fa fa-tags"></i> <span>مبيدات</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('asmeda_category.*') ? 'active' : ''  }}">
                       <a href="{{ route('asmeda_category.index') }}">
                         <i class="fa fa-tags"></i> <span>اسمدة</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('monzmat_category.*') ? 'active' : ''  }}">
                       <a href="{{ route('monzmat_category.index') }}">
                         <i class="fa fa-tags"></i> <span>منظمات نمو</span>
                        </a>
                    </li>
                </ul>

            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa  fa-image"></i> <span>المعرض</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{  request()->routeIs('gallary_category.*') ? 'active' : ''  }}">
                       <a href="{{ route('gallary_category.index') }}">
                         <i class="fa fa-tags"></i> <span>تصنيف المعرض</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('gallary.*') ? 'active' : ''  }}">
                       <a href="{{ route('gallary.index') }}">
                         <i class="fa fa-tags"></i> <span>المعرض</span>
                        </a>
                    </li>

                </ul>

            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa  fa-image"></i> <span>الخدمات</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li class="{{  request()->routeIs(' company-service.*') ? 'active' : ''  }}">
                       <a href="{{ route('company-service.index') }}">
                         <i class="fa fa-tags"></i> <span>خدمات الشركة</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('general-advices.*') ? 'active' : ''  }}">
                       <a href="{{ route('general-advices.index') }}">
                         <i class="fa fa-tags"></i> <span>نصائح عامة</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('farmer-advices.*') ? 'active' : ''  }}">
                        <a href="{{ route('farmer-advices.index') }}">
                          <i class="fa fa-tags"></i> <span>نصائح زراعية</span>
                         </a>
                     </li>
                     <li class="{{  request()->routeIs('technical-advices.*') ? 'active' : ''  }}">
                        <a href="{{ route('technical-advices.index') }}">
                          <i class="fa fa-tags"></i> <span>نصائح فنية</span>
                         </a>
                     </li>
                </ul>

            </li>
            {{-- <li class="header">ادارة الخدمات</li> --}}
            {{-- <li class="treeview {{  request()->routeIs('service.*') ? 'active' : ''  }}">
              <a href="{{ route('service.index') }}">
                <i class="fa  fa-bullhorn"></i> <span>الخدمات</span>
              </a>
            </li> --}}

            {{-- <li class="header">ادارة المصانع</li> --}}
            <li class="treeview {{  request()->routeIs('factory.*') ? 'active' : ''  }}">
                <a href="{{ route('factory.index') }}">
                  <i class="fa  fa-shopping-cart"></i> <span>المصانع</span>
                </a>
            </li>
            <li class="treeview {{  request()->routeIs('partner.*') ? 'active' : ''  }}">
                <a href="{{ route('partner.index') }}">
                  <i class="fa fa-user-secret"></i> <span>الشركاء</span>
                </a>
            </li>
            <li class="treeview {{  request()->routeIs('contract.*') ? 'active' : ''  }}">
                <a href="{{ route('contract.index') }}">
                  <i class="fa fa-pencil"></i> <span>التعاقدات</span>
                </a>
            </li>

            {{-- <li class="header">خاص بالموقع</li> --}}
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-home"></i> <span>الموقع</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" >
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
                <ul class="treeview-menu " >
                    <li class="{{  request()->routeIs('blog.*') ? 'active' : ''  }}">
                       <a href="{{ route('blog.index') }}">
                         <i class="fa fa-pencil-square"></i> <span>المقالات الرئيسية</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa   fa-envelope"></i> <span>الرسائل</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu " >
                    <li class="{{  request()->routeIs('message.*') ? 'active' : ''  }}">
                       <a href="{{ route('message.index') }}">
                         <i class="fa fa-envelope-o"></i> <span>كل الرسائل</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('message_type.*') ? 'active' : ''  }}">
                       <a href="{{ route('message_type.index') }}">
                         <i class="fa fa-envelope-square"></i> <span>انواع الرسائل</span>
                        </a>
                    </li>
                    <li class="{{  request()->routeIs('newsletter.*') ? 'active' : ''  }}">
                       <a href="{{ route('newsletter.index') }}">
                         <i class="fa  fa-newspaper-o"></i> <span>الاخبار</span>
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
        <section class="content-header">
          <h1>
            @yield('title')

            {{-- <small>Control panel</small> --}}
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          {{-- <div class="row"> --}}


