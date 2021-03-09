<?php $__env->startSection('title','Edit Banner'); ?>
<?php $__env->startSection('content'); ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                       <div class="header-icon">
                          <i class="fa fa-image"></i>
                       </div>
                       <div class="header-title">
                          <h1>Edit Banner</h1>
                          <small>Edit Banner</small>
                       </div>
                    </section>
                    
                    <!-- Main content -->
                    <section class="content">
                       <div class="row">
                          <!-- Form controls -->
                          <div class="col-sm-12">
                             <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                   <div class="btn-group" id="buttonlist"> 
                                      <a class="btn btn-add " href="<?php echo e(url('/admin/banners')); ?>"> 
                                      <i class="fa fa-eye"></i>  View Banners </a>  
                                   </div>
                                </div>
                                <div class="panel-body">
                                <form enctype="multipart/form-data" class="col-sm-6" action="<?php echo e(url('/admin/edit-banner/'.$bannerDetails->id)); ?>" method="post"> <?php echo e(csrf_field()); ?>

                                      <div class="form-group">
                                         <label>Name</label>
                                      <input type="text" class="form-control" value="<?php echo e($bannerDetails->name); ?>" name="banner_name" id="banner_name" required>
                                      </div>
                                      <div class="form-group">
                                         <label>Text Style</label>
                                         <input type="text" class="form-control" value="<?php echo e($bannerDetails->text_style); ?>" name="text_style" id="text_style" required>
                                      </div>
                                      <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" name="banner_content" id="banner_content">
                                                <?php echo e($bannerDetails->content); ?>

                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control" value="<?php echo e($bannerDetails->link); ?>" name="link" id="link" required>
                                        </div>
                                        <div class="form-group">
                                                <label>Sort Order</label>
                                                <input type="text" class="form-control" value="<?php echo e($bannerDetails->sort_order); ?>" name="sort_order" id="sort_order" required>
                                            </div>
                                      <div class="form-group">
                                         <label>Banner Image</label>
                                         <input type="file" name="image">
                                         <?php if(!empty($bannerDetails->image)): ?>
                                        <input type="hidden" name="current_image" value="<?php echo e($bannerDetails->image); ?>"> 
                                        <img src="<?php echo e(asset('uploads/banners/'.$bannerDetails->image)); ?>" style="width:250px;">
                                        <?php endif; ?>
                                      </div>
                                      <div class="reset-button">
                                         <input type="submit" class="btn btn-success" value="Edit Product">
                                      </div>
                                   </form>
                                </div>
                             </div>
                          </div>
                       </div>
                    </section>
                    <!-- /.content -->
                 </div>
                 <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/admin/banner/edit_banner.blade.php ENDPATH**/ ?>