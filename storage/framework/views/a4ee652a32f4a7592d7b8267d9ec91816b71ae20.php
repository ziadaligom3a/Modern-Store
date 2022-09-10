<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.Admin.Dashboard.main','data' => ['user' => $user,'pages' => $pages]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Admin.Dashboard.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'pages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pages)]); ?>
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <h3 class="title-42 m-b-625 text-center animate-charcter">Pages table</h3>
                    <br><br>
                    <a href="/admin/home/pages/AddPage" class="bn62 text-justify text-right">
                        Add Page
                      </a>  
                      <br>
                      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Product.." title="Type in a name">
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


                                   

                                    <th>Name</th>

                                    <th>Path</th>

                                    <th>Date</th>

                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php if(count($pagesE) == 0): ?>
                                <h2 style="text-align: center">There are no Products here</h2>
                                <br>
                                <br>
                                <br>
                                <?php endif; ?>
                                <?php $__currentLoopData = $pagesE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>

                                   
                                   
                                   
                                    <td>
                                        <a href="<?php echo e($p->path); ?>" target="_blank"><span class="block-name animate-charcter"><?php echo e($p->name); ?></span></a>
                                    </td>


                                    <td><h5  style="font-family: Arial, Helvetica, sans-serif;"><?php echo e($p->path); ?></h5></td>

                                    <td><h5><?php echo e(!$p->created_at ? 'null' : $p->created_at->diffForHumans()); ?></h5></td>

                                 
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="/admin/home/pages/EditPage/<?php echo e($p->id); ?>">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                                           <form action="/admin/home/pages/DeletePage" method="post">
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /var/www/html/Laravel-Projects/MAIN/resources/views/Admin/Dashboard/Pages.blade.php ENDPATH**/ ?>