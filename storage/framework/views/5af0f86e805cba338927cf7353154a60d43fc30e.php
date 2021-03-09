<?php $__env->startSection('title','Add Coupon'); ?>
<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Coupon</h1>
          <small>Add Coupons</small>
       </div>
    </section>
    <?php if(Session::has('flash_message_error')): ?>
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong><?php echo session('flash_message_error'); ?></strong>
   </div>
   <?php endif; ?>
   
   <?php if(Session::has('flash_message_success')): ?>
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong><?php echo session('flash_message_success'); ?></strong>
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
                      <a class="btn btn-add " href="<?php echo e(url('admin/view-coupons')); ?>"> 
                      <i class="fa fa-eye"></i>  View Coupons </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="<?php echo e(url('/admin/add-coupon')); ?>" method="post" name="add_coupon" id="add_coupon"> <?php echo e(csrf_field()); ?>

                     
                      <div class="form-group">
                         <label>Coupon Code</label>
                         <input type="text" class="form-control" placeholder="Enter Coupon Code" name="coupon_code" id="coupon_code" required>
                      </div>
                      <div class="form-group">
                         <label>Amount</label>
                         <input type="text" class="form-control" placeholder="Enter Amount" name="coupon_amount" id="coupon_amount" required>
                      </div>
                      <div class="form-group">
                        <label>Amount Type</label>
                        <select name="amount_type" id="amount_type" class="form-control">
                         <option value="Percentage">Percentage</option>
                         <option value="Fixed">Fixed</option>
                        </select>
                     </div>
                      <div class="form-group">
                         <label>Expiry Date</label>
                         <input type="text" class="form-control" name="expiry_date" id="datepicker" required>
                      </div>
                      
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Coupon">
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/admin/coupons/add_coupon.blade.php ENDPATH**/ ?>