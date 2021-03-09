<?php $__env->startSection('title','User Profile'); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>User Profile</h1>
       </div>
    </section>
    <?php if(Session::has('flash_message_error')): ?>
            <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><?php echo e(session('flash_message_error')); ?></strong>
            </div>
            <?php endif; ?>
            <?php if(Session::has('flash_message_success')): ?>
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><?php echo e(session('flash_message_success')); ?></strong>
            </div>
            <?php endif; ?>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="<?php echo e(url('admin/view-products')); ?>"> 
                              <i class="fa fa-eye"></i>  View Products </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                        <form class="col-sm-6" enctype="multipart/form-data" action="<?php echo e(url('/admin/user-profile')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                            <input type="hidden" class="form-control"  name="old_pwd" id="old_pwd" required>
                              <div class="form-group">
                                 <label>Username</label>
                                 <input type="text" class="form-control" value="<?php echo e($userDetail->username); ?>" name="username" id="username" required>
                              </div>
                              <div class="form-group">
                                 <label>Old Password</label>
                                 <input type="password" class="form-control"  name="current_pwd" id="current_pwd" required>
                              </div>
                              <div class="form-group">
                                 <label>New Password</label>
                                 <input type="password" class="form-control" name="new_pwd" id="new_pwd" required>
                              </div>
                              
                              <div class="reset-button">
                                 <input type="submit" class="btn btn-success" value="Save">
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/admin/user_profile.blade.php ENDPATH**/ ?>