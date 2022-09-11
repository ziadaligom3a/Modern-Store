<?php foreach($attributes->onlyProps(['main_name','name','color' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['main_name','name','color' => null]); ?>
<?php foreach (array_filter((['main_name','name','color' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div  class="products" id="categories">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2><?php echo e(__("OUR")); ?> <?php echo e(last(request()->segments()) ? __(last(request()->segments())) : __('Categories')); ?></h2>
                <?php if($message = Session::get('message')): ?>
                <div class="alert alert-danger alert-block">
                   <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong><?php echo e($message); ?></strong>
                </div>
                <?php endif; ?>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="our_products" style="background-color:<?php echo e($color); ?>">
                <div class="row">
                  <?php if(!Route::is('category') && !Route::is('Search')): ?>
                   <?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="col-md-4 margin_bottom1">
                      <div class="product_box">
                         <a href="/categories/<?php echo e($n->slug); ?>">
                           <figure><img src="<?php echo e($n->img); ?>" alt="#"></figure>
                           <h3><?php echo e($n->name); ?></h3></a>
                        </div>
                     </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <?php else: ?>:
                   <?php $__currentLoopData = $name->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="card">

                     <div class="imgBox">
                       <img src="<?php echo e($n->img); ?>" alt="mouse corsair" class="mouse">
                     </div>
                   
                     <div class="contentBox">
                        <h3 class="animate-charcter"><?php echo e($n->name); ?></h3>
                        <h3 class="animate-charcter"><?php echo e($n->price); ?> EGP</h3>
                        <a href="/Product/<?php echo e($n->id); ?>" class="buy">Buy Now</a>
                     </div>
               
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <?php endif; ?>

               </div>
             </div>
            </div>
         </div>
    </div>
   </div>
<?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/components/Products.blade.php ENDPATH**/ ?>