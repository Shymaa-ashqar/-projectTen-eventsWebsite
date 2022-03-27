<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    {{-- <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all"> --}}
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link  href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER MOBILE-->


        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                   VisitJo
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{route('user.index')}}">
                                <i class="fas fa-table"></i>Users
                            </a>
                            <a  href="{{route('event.index')}}">
                                <i class="fas fa-table"></i>events
                            </a>
                            <a  href="{{route('categories.index')}}">
                                <i class="fas fa-table"></i>categories
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                {{-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." /> --}}
                                {{-- <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> --}}
                            </form>
                            <div class="header-button">
                             
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                     
                                        <div class="content">
                                            <a  href="/">Home</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">event form</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Create Event</h3>
                                        </div>
                                        <hr>
                                        <form method="post" action="{{route('event.store')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">name</label>
                                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">description</label>
                                                <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Enter description">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">image</label>
                                                <input type="text" name="img" class="form-control" id="exampleFormControlInput1" placeholder="add image">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">date</label>
                                                <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter date">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">price</label>
                                                <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Enter price">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">location</label>
                                                <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="Enter location">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">category id</label>
                                                <input type="number" name="category_id" class="form-control" id="exampleFormControlInput1" placeholder="Enter date">
                                            </div>
        
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-info ">
                                                   Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Jquery JS-->
    {{-- <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script> --}}
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
