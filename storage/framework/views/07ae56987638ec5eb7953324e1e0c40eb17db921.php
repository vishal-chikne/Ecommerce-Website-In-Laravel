<?php $__env->startSection('title','Customers'); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>Customers</h1>
          <small>Customers</small>
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
                         <h4>View Customers</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>ID</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Status</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php $__currentLoopData = $userDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($customer->id); ?></td>
                            <td><?php echo e($customer->name); ?></td>
                            <td><?php echo e($customer->email); ?></td>
                            <td>
                              <input type="checkbox" class="CustomerStatus btn btn-success" rel="<?php echo e($customer->id); ?>"
                              data-toggle="toggle" data-on="Active" data-of="Inactive" data-onstyle="success" data-offstyle="danger"
                              <?php if($customer['status']=="1"): ?> checked <?php endif; ?>>
                              <div id="myElem" style="display:none;" class="alert alert-success">Active</div>
                              </td>
                               <td>
                               <a href="#" class="btn btn-add btn-sm" title="View More" data-toggle="modal" data-target="#myModal<?php echo e($customer->id); ?>"><i class="fa fa-eye"></i></a>
                               <a href="<?php echo e(url('/admin/delete-customer/'.$customer->id)); ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure');"><i class="fa fa-trash-o"></i> </a>
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
 <?php $__currentLoopData = $userDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="modal fade in" id="myModal<?php echo e($customer->id); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
             <h1 class="modal-title"><?php echo e($customer->name); ?></h1>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable">
                  
                   <tbody>
                     <tr>
                         <td class="taskDesc"> Customer Name</td>
                         <td class="taskStatus"> <?php echo e($customer->name); ?></td>
                     </tr>
                     <tr>
                        <td class="taskDesc"> Customer Email</td>
                        <td class="taskStatus"> <?php echo e($customer->email); ?></td>
                    </tr>
                    <tr>
                        <td class="taskDesc"> Customer Address</td>
                        <td class="taskStatus"> <?php echo e($customer->address); ?></td>
                    </tr>
                    <tr>
                        <td class="taskDesc"> State</td>
                        <td class="taskStatus"> <?php echo e($customer->state); ?></td>
                    </tr>
                    <tr>
                        <td class="taskDesc"> City</td>
                        <td class="taskStatus"> <?php echo e($customer->city); ?></td>
                    </tr>
                    <tr>
                        <td class="taskDesc"> Country</td>
                        <td class="taskStatus"> <?php echo e($customer->country); ?></td>
                    </tr>
                    <tr>
                        <td class="taskDesc"> Pincode</td>
                        <td class="taskStatus"> <?php echo e($customer->pincode); ?></td>
                    </tr>
                    <tr>
                        <td class="taskDesc"> Mobile</td>
                        <td class="taskStatus"> <?php echo e($customer->mobile); ?></td>
                    </tr>
                    <tr>
                        <td class="taskDesc"> Status</td>
                        <td class="taskStatus"> 
                            <?php if($customer->status==0): ?>
                            Inactive
                            <?php else: ?>
                            Active
                            <?php endif; ?>
                        </td>
                    </tr>
                  
                   </tbody>
                </table>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
       </div>
 
    </div>

 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/admin/users/customer.blade.php ENDPATH**/ ?>