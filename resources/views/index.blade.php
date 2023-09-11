

<!DOCTYPE html>
<html lang="en">
   <head>
      <style>

      </style>
      <!-- basic -->
      <meta charset="utf-8">
      <x-seo::meta />

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>My Store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">

      <!-- loader  -->
      <x-Loader />
      <!-- end loader -->
      <!-- header -->

      <x-Header :data="$data" />
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->

      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">

                              <div class="text-bg">
                                 <span>{{ $desc->title }}</span>
                                 <h1>{{ $desc->type }}</h1>
                                 <h2 style="color:white" >{{ $desc->body }}</h2>
<br>                             @if(Session::has('lang') && Session::get('lang') == 'ar')
                                 <a class="mt-102" href="/#categories">اشتري الان </a> <a href="contact">اتصل بنا </a>
                                 @else
                                 <a class="mt-102" href="/#categories">Buy Now</a> <a href="contact">Contact Us</a>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="https://iili.io/4skcVp.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>




            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">

            <div class="row">
               @foreach($devices as $device)
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{{ $device->img }}" alt="#"/></i>
                     <h3>{{ $device->name }}</h3>
                     <p>{{ $device->body }} </p>
                  </div>
               </div>
              @endforeach
               </div>

            </div>
         </div>
      </div>
      <!-- three_box -->
      <!-- products -->
      <x-Products color="white" main_name="Categories" :name="$categories" />
      <!-- end products -->
      <!-- laptop  section -->
      <div class="laptop">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <p>{{ __('Every Computer and laptop') }}</p>
                     <h2>{{ __('Up to 40% off !') }}</h2>
                     <a class="read_more" href="#">{{ __('Shop Now') }}</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="laptop_box">
                     <figure><img src="https://iili.io/4skcVp.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end laptop  section -->
      <!-- customer -->
      <div class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>{{ __('Customer Review') }}</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                     </ol>
                     <div class="carousel-inner">
                        @foreach($customers as $customer)
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                       <div class="test_box">
                                          <i><img src="https://iili.io/4skv07.png" alt="#"/></i>
                                          <h4>{{ $customer->name }}</h4>
                                          <p>{{ $customer->review }}</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach


                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end customer -->

      <!--  contact -->
      <x-Contact />
      <!-- end contact -->
      <!--  footer -->
     <x-Footer />
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>

   </body>
   {{-- @dd($desc->getTranslations()) --}}
   {{-- @dd($name) --}}
</html>

