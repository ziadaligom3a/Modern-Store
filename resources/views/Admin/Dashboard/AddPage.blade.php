
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Page</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="https://technext.github.io/product-admin/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://technext.github.io/product-admin/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="https://technext.github.io/product-admin/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://technext.github.io/product-admin/css/templatemo-style.css">

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
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <x-Admin.Dashboard.Header :pages="$pages" :user="auth()->user()" />
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="bn62 text-justify text-center" style="color:yellow">Add Page</h2>

                <br>
                <br>
              </div>
            </div>
                      <!-- Cable Configuration -->
          @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                  <strong>{{ $message }}</strong>
          </div>
          @endif
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="/admin/home/pages/AddPage" method="post" class="tm-edit-product-form">
                  @csrf
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Page Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      value="{{ old('name') }}"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Page Name Arabic
                    </label>
                    <input
                      id="name"
                      name="name_arabic"
                      value="{{ old('name') }}"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                 
                  
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Path
                          </label>
                          <input
                            id="expire_date"
                            name="path"
                            type="text"
                            value="{{ old('path') }}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                      
                  </div>
                  
              </div>




              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Page</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
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
