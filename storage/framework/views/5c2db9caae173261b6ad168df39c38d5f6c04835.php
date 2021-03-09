<?php $__env->startSection('content'); ?>
        <div class="cart-box-main">
        <div class="container">
            <h1 align="center">User Orders</h1> <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>Order ID</th>
                              <th>Ordered Product </th>
                              <th>Payment Method</th>
                              <th>Grand Total</th>
                              <th>Order Date</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              
                              <td><?php echo e($order->id); ?></td>
                              <td>
                                  <?php $__currentLoopData = $order->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <a href="#">
                                       <?php echo e($pro->product_code); ?>

                                       (<?php echo e($pro->product_qty); ?>)
                                   </a><br>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </td>
                              <td><?php echo e($order->payment_method); ?></td>
                              <td><?php echo e($order->grand_total); ?></td>
                              <td><?php echo e($order->created_at); ?></td>
                              <td>View Detail</td>
                              
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php

Session::forget('order_id');
Session::forget('grand_total');

?>
<?php echo $__env->make('wayshop.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/wayshop/products/user_orders.blade.php ENDPATH**/ ?>