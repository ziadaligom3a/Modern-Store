
<!DOCTYPE html>
<!-- saved from url=(0042)https://designmodo.com/demo/product-page/# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
        <!-- basic -->
        <style>
            .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
}
        </style>
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
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="/css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="/images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($product->name); ?></title>
    <!-- Fonts -->
    <link href="/show/css" rel="stylesheet">
    <!-- CSS -->
    <link href="/show/style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow">

  </head>

  <body>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.Header','data' => ['data' => $data]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main class="container">
     
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        
        <img data-image="red" class="active" src="<?php echo e($product->img); ?>" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        
        <div class="product-description">
         <a href="/categories/<?php echo e($product->category->slug); ?>" target="_blank"><span><?php echo e($product->category->name); ?></span></a> 
          <h1 class="animate-charcter" ><?php echo e($product->name); ?></h1>
         
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
        

          <!-- Cable Configuration -->
          <?php if($message = Session::get('error')): ?>
          <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                  <strong><?php echo e($message); ?></strong>
          </div>
          <?php endif; ?>
        </div>

        <!-- Product Pricing -->
        <form action="/Product/Add" method="post">
          <?php echo csrf_field(); ?>
        <div class="product-price">
          <span style="color:red"><?php echo e($product->price); ?> <span class="animate-charcter">EGP</span></span>
           <input type="hidden" name="product" value="<?php echo e($product->id); ?>">
          <button type="submit" class="cart-btn">Add To Card</button>
        </div>
    </form>


      </div>
    </main>

    <!-- Scripts -->
    <script src="./Tutorial_files/jquery.min.js" charset="utf-8"></script>
    <script src="./Tutorial_files/script.js" charset="utf-8"></script>
  

</body><div class="XTranslate"></div></html><?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/Product/show.blade.php ENDPATH**/ ?>