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
    <link href="/dashboard_css/font-face.css" rel="stylesheet" media="all">
    <link href="/dashboard_css/button.css" rel="stylesheet" media="all">
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
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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
            <section class="p-t-20">
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-md-12">
                           
                            <h3 class="title-42 m-b-625 text-center animate-charcter">Products table</h3>
                            
                            <br><br>
                            
                            <a href="/admin/home/AddProduct" class="bn62 text-justify text-right">
                                Add Product
                              </a>  
                              <br>
                              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Product.." title="Type in a name">
                            <div class="table-responsive table-responsive-data2">
                                
                                <table class="table table-data2" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>date</th>
                                            <th>price</th>
                                            <th>Category</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @if(count($product) == 0)
                                        <h2 style="text-align: center">There are no Products here</h2>
                                        <br>
                                        <br>
                                        <br>
                                        @endif
                                        @foreach($product as $p)
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><img src="{{ $p->img }}" alt="" width="203" height="160"></td>
                                            <td>
                                                <a href="/Product/{{ $p->id }}" target="_blank"><span class="block-name animate-charcter">{{ $p->name }}</span></a>
                                            </td>
                                            <td><h5  style="font-family: Arial, Helvetica, sans-serif;">{{ $p->created_at->diffForHumans() }}</h5></td>

                                            <td><h5>{{ $p->price }} EGP</h5></td>
                                            <td>
                                                <a href="/categories/{{ $p->category->slug }}" target="_blank"><span class="block-name animate-charcter">{{ $p->category->name }}</span></a>
                                            </td>

                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="/admin/home/EditProduct/{{ $p->id }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                   <form action="/admin/home/DeleteProduct" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $p->id }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="spacer"></tr>
                                       @endforeach
                                       
              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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

</body>

</html>
<!-- end document-->
