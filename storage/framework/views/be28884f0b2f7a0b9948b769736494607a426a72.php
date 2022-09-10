<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="#">
                    <a href="/"><h1 style="color:yellow">ZIX</h1></a>
                    <!-- <br> -->
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="has-sub">
                        <a href="<?php echo e($page->path); ?>">
                            <i class="<?php echo e($page->class); ?>"></i><?php echo e(ucwords($page->name)); ?>

                            <span class="bot-line"></span>
                        </a>
                        
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  
                </ul>
            </div>
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">

                </div>
                <div class="header-button-item js-item-menu">

                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="<?php echo e($user->img); ?>" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo e($user->name); ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                <a href="#">
                                <img src="<?php echo e($user->img); ?>" alt="John Doe">
                                </a>
                                </div>
                                <div class="content">
                                <h5 class="name">
                                <a href="#"><?php echo e($user->name); ?></a>
                                <span class="email"><?php echo e($user->email); ?></span>

                                </h5>
                                </div>
                                
                                </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="/admin/home/Account">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>

                            </div>
                            <div class="account-dropdown__footer">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 <?php echo e(__('Logout')); ?>

                             </a>

                             <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                 <?php echo csrf_field(); ?>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/components/Admin/Dashboard/Header.blade.php ENDPATH**/ ?>