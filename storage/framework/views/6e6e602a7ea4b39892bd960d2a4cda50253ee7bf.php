

<!DOCTYPE html>
<html lang="en">
   <head>
      <style>
        
         @import url("https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap");

* {
  margin: 0;
  padding: 0;
  font-family: "Istok Web", sans-serif;
}

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

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

.card {
  position: relative;
  width: 320px;
  height: 480px;
  background: #191919;
  border-radius: 20px;
  overflow: hidden;
}

.card::before {
  content: "";
  position: absolute;
  top: -50%;
  width: 100%;
  height: 100%;
  background: #ffce00;
  transform: skewY(345deg);
  transition: 0.5s;
}

.card:hover::before {
  top: -70%;
  transform: skewY(390deg);
}

.card::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  font-weight: 600;
  font-size: 6em;
  color: rgba(0, 0, 0, 0.1);
}

.card .imgBox {
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 20px;
  z-index: 1;
}
/*
.card .imgBox img {
    max-width: 100%;
    
    transition: .5s;
}

.card:hover .imgBox img {
    max-width: 50%;
      
}
*/
.card .contentBox {
  position: relative;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  z-index: 2;
}

.card .contentBox h3 {
  font-size: 18px;
  color: white;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.card .contentBox .price {
  font-size: 24px;
  color: white;
  font-weight: 700;
  letter-spacing: 1px;
}

.card .contentBox .buy {
  position: relative;
  top: 100px;
  opacity: 0;
  padding: 10px 30px;
  margin-top: 15px;
  color: #000000;
  text-decoration: none;
  background: #ffce00;
  border-radius: 30px;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: 0.5s;
}

.card:hover .contentBox .buy {
  top: 0;
  opacity: 1;
}

.mouse {
  height: 200px;
  width: auto;
}



      </style>
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
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <!-- style css -->
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
   </head>
   <!-- body -->
   <body class="main-layout" >
     
      <!-- loader  -->
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.Loader','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      <!-- end loader -->
      <!-- header -->
 

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

     
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <div class="three_box">
         <div class="container">
            
            <div class="row">

               <div class="col-md-4">

               </div>
               </div>

            </div>
         </div>
      <!-- end banner -->
      <!-- three_box -->
     
      <!-- three_box -->
      <!-- products -->
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.Products','data' => ['name' => $product->product]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Products'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> 
        
      <!-- end products -->
      <!-- laptop  section -->

      <!-- end laptop  section -->
      <!-- customer -->

      <!-- end customer -->

      <!--  contact -->
      
      <!-- end contact -->
      <!--  footer -->
     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.Footer','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/js/custom.js"></script>
      

 
   </body>
   
</html>

<?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/Products.blade.php ENDPATH**/ ?>