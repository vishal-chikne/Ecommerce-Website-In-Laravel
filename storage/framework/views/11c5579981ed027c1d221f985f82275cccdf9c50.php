<?php $__env->startSection('title','Products Attributes'); ?>
<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Products Attributes</h1>
          <small>Add Products Images</small>
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
                      <a class="btn btn-add " href="<?php echo e(url('admin/view-products')); ?>"> 
                      <i class="fa fa-eye"></i>  View Products </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="<?php echo e(url('/admin/add-images/'.$productDetails->id)); ?>" method="post"> <?php echo e(csrf_field()); ?>

                <input type="hidden" name="product_id" value="<?php echo e($productDetails->id); ?>">
                      <div class="form-group">
                         <label>Product Name</label> <?php echo e($productDetails->name); ?>

                      </div>
                      <div class="form-group">
                         <label>Product Code</label> <?php echo e($productDetails->code); ?>

                      </div>
                      <div class="form-group">
                         <label>Product Color</label> <?php echo e($productDetails->color); ?>

                      </div>
                      <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="image[]" id="image" multiple="multiple">
                     </div>


                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Image">
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>

    <section class="content">
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                        <h4>View Attriutes</h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">
               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="btn-group">
                     <div class="buttonexport" id="buttonlist"> 
                     <a class="btn btn-add" href="<?php echo e(url('admin/add-product')); ?>"> <i class="fa fa-plus"></i> Add Product
                        </a>  
                     </div>
                     
                  </div>
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive">
                     <table id="table_id" class="table table-bordered table-striped table-hover">
                     <form enctype="multipart/form-data" action="<?php echo e(url('/admin/edit-images/'.$productDetails->id)); ?>" method="post"> <?php echo e(csrf_field()); ?>

                        <thead>
                           <tr class="info">
                              <th>ID</th>
                              <th>Product ID</th>
                              <th>Image</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>

                           <td><?php echo e($productImage->id); ?></td>

                           <td><?php echo e($productImage->product_id); ?></td>
                           <td>
                           <img src="<?php echo e(url('uploads/products/'.$productImage->image)); ?>" alt="" style="width:80px;">
                           </td>
                              <td class="center">
                                 <div class="btn-group">
                                       <a href="<?php echo e(url('/admin/delete-alt-image/'.$productImage->id)); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a>
                                 </div>
                              </td>
                           </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                     </table>
                  </form>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
 </div>
 <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/admin/products/add_images.blade.php ENDPATH**/ ?>