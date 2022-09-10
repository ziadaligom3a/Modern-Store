
<html>
  <head>
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CLA</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/main.css">
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
  </head>
  <body>
    <div class="s01">
      <form action="/Search" method="post">
        <?php echo csrf_field(); ?>
        <fieldset>
          <center><legend><?php echo e(__('Discover Our Amazing Products')); ?></legend></center>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" name="keyword" placeholder="<?php echo e(__('What are you looking for?')); ?>" />
          </div>
          <div class="input-field second-wrap">
            <select class="input-field second-wrap" name="category" id="location">
              <option value="0"><?php echo e(__('All')); ?></option>
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit"><?php echo e(__('Search')); ?></button>
          </div>
        </div>
        <?php if($message = Session::get('Products')): ?>
        <div class="alert alert-danger alert-block">
           <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong><?php echo e($message); ?></strong>
        </div>
        <?php endif; ?>
      </form>
    </div>
   
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/Search.blade.php ENDPATH**/ ?>