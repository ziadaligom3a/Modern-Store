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
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="/dashboard_css/button.css" rel="stylesheet" media="all">

    <link href="/dashboard_css/font-face.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/dashboard_vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/dashboard_vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/dashboard_vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/dashboard_css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->

        <x-Admin.Dashboard.Header :user="$user" :pages="$pages" />
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/home">
                            <h1 style="color:yellow">ZIX</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        @foreach($pages as $page)
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ $page->path }}">
                                <i class="fas fa-tachometer-alt"></i>{{ $page->name }}</a>

                        </li>
                        @endforeach
                       
                    </ul>
                </div>
            </nav>
        </header>

        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
           <br>
           <br>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                        
                                <h2 class="text_shadows">Welcome Back Admin!
                                </h2>
                              </div>

                            <hr class="line-seprate">
                            <br>
                            <br>

                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->

            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
       
            <!-- END STATISTIC CHART-->

            <!--1TA TABLE-->

            {{ $slot }}


            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-55 animate-charcter"></h3>
                            <h1 class="title-5 m-b-55 animate-charcter"></h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="title-5 m-b-55 animate-charcter"></h3>
                                        <h1 class="title-5 m-b-55 animate-charcter"></h1>
             
                                        <div class="table-responsive table-responsive-data2">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->

            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/dashboard_vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/dashboard_vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/dashboard_vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/dashboard_vendor/slick/slick.min.js">
    </script>
    <script src="/dashboard_vendor/wow/wow.min.js"></script>
    <script src="/dashboard_vendor/animsition/animsition.min.js"></script>
    <script src="/dashboard_vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/dashboard_vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/dashboard_vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/dashboard_vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/dashboard_vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/dashboard_vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/dashboard_vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/dashboard_js/main.js"></script>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
   </script>
</body>

</html>
<!-- end document-->
