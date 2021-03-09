<?php $__env->startSection('title','View Categories'); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>View Categories</h1>
          <small>Categories List</small>
       </div>
    </section>
    <?php if(Session::has('flash_message_error')): ?>
    <div class="alert alert-danger alert-block">
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

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>View Categories</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist"> 
                      <a class="btn btn-add" href="<?php echo e(url('admin/add-category')); ?>"> <i class="fa fa-plus"></i> Add Product
                         </a>  
                      </div>
                      
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>ID</th>
                               <th>Category Name</th>
                               <th>Parent ID</th>
                               <th>Url</th>
                               <th>Status</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                             <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($category->id); ?></td>
                            <td><?php echo e($category->name); ?></td>
                            <td><?php echo e($category->parent_id); ?></td>
                            <td><?php echo e($category->url); ?></td>
                            <td>
                              <input type="checkbox" id="toggle-demo" class="CategoryStatus btn btn-success" rel="<?php echo e($category->id); ?>"
                              data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                              <?php if($category['status']=="1"): ?> checked <?php endif; ?>>
                              <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td>
                               <td>
                               <a href="<?php echo e(url('/admin/edit-category/'.$category->id)); ?>" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
                               <a href="<?php echo e(url('/admin/delete-category/'.$category->id)); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
                               </td>
                            </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                      </table>
                      
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/admin/category/view_category.blade.php ENDPATH**/ ?>