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
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.Dashboard.Header','data' => ['user' => $user]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Dashboard.Header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

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
                                <?php
                                        
                                $words = explode(" ", $user->name);
                                $firstname = $words[0];


                            ?>
                                <h2 class="text_shadows">Welcome Back <?php echo e($firstname); ?>!
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
                            <h3 class="title-5 m-b-55 animate-charcter">Orders table</h3>
 
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
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
                                            <th>status</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($product) == 0): ?>
                                        <h2 style="text-align: center">There are no Products here</h2>
                                        <br>
                                        <br>
                                        <br>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><img src="<?php echo e($p->img); ?>" alt="" width="203" height="160"></td>
                                            <td>
                                                <a href="/Product/<?php echo e($p->id); ?>" target="_blank"><span class="block-name animate-charcter"><?php echo e($p->name); ?></span></a>
                                            </td>
                                            <td><h5  style="font-family: Arial, Helvetica, sans-serif;"><?php echo e($p->created_at->diffForHumans()); ?></h5></td>
                                            <td>
                                                <h5 class="status--process">Pending</h5>
                                            </td>
                                            <td><h5><?php echo e($p->price); ?> EGP</h5></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Pay">
                                                        <i class="zmdi zmdi-paypal"></i>
                                                    </button>
                                                   <form action="/Product/Delete" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($p->id); ?>">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="spacer"></tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
              
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
<?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/Dashboard/index.blade.php ENDPATH**/ ?>