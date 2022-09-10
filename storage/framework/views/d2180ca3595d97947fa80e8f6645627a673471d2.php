<?php foreach($attributes->onlyProps(['data']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['data']); ?>
<?php foreach (array_filter((['data']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<header>
    <!-- header inner -->
    <div class="header" style="background: black">
       <div class="container-fluid">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="/"><img src="https://iili.io/4skwx4.png" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">

                     

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item <?php echo e('/' . last(request()->segments()) == $d->path ? 'active' : ''); ?>">
                           <a class="nav-link" href="<?php echo e($d->path); ?>"><?php echo e($d->name); ?></a>
                        </li>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       <?php if(auth()->guard()->guest()): ?>
                       <?php if(Session::has('lang') && Session::get('lang') == 'ar' ): ?>
                       <li class="nav-item <?php echo e('/' . last(request()->segments()) == 'login' ? 'active' : ''); ?>">
                          <a class="nav-link" href="/login">تسجيل</a>
                       </li>
                       <?php else: ?>
                       <li class="nav-item <?php echo e('/' . last(request()->segments()) == 'login' ? 'active' : ''); ?>">
                        <a class="nav-link" href="/login">Login</a>
                     </li>
                       <?php endif; ?>
                       <?php endif; ?>

                       <?php if(auth()->guard()->check()): ?>
                       <li class="nav-item">
                        <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
                        <a class="nav-link" href="/admin/home"><?php echo e(__('Admin Dashboard')); ?></a>
                        <?php else: ?>
                           <a class="nav-link" href="/home">My Account</a>
                        <?php endif; ?>
                     </li>
                       <?php endif; ?>
                         <li class="nav-item d_none">
                            <a class="nav-link" href="/Search"><i class="fa fa-search" aria-hidden="true"></i></a>
                         </li>

                      
                      </ul>
                      <br>
                      <ul class="navbar-nav mr-auto">
                        <?php if(!Session::has('lang')): ?>
                        <li class="nav-item">
                           <a class="nav-link" href="/local/ar">AR</a>
                         </li>

                         <?php elseif(Session::get('lang') == 'ar'): ?>

                         <li class="nav-item">
                           <a class="nav-link" href="/local/en">EN</a>
                         </li>

                         <?php elseif(Session::get('lang') == 'en'): ?>

                         <li class="nav-item">
                           <a class="nav-link" href="/local/ar">AR</a>
                         </li>

                         <?php endif; ?>
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header><?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/components/Header.blade.php ENDPATH**/ ?>