<?php $__env->startSection('content'); ?>

<div class="contact-box-main">

    <div class="container">
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
     <div class="row">
         <div class="col-lg-5 col-sm-12">
             <div class="contact-form-right">
                 <h2>New User SignUp !</h2>
                 <form action="<?php echo e(url('/user-register')); ?>" method="POST" id="contactForm registerForm"> <?php echo e(csrf_field()); ?>

                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Your Name" id="name" name="name" required data-error="Please Enter Your Name">
                                 <div class="help-block with-errors"></div>
                             </div>

                         </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email" id="email" name="email" required data-error="Please Enter Your Email">
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required data-error="Please Enter Your Password">
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn hvr-hover" id="submit" type="submit">Signup</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                     </div>
                 </form>
             </div>

         </div>
         <div class="col-lg-1 col-sm-12" id="or">
          OR
         </div>
         <div class="col-lg-6 col-sm-12">
            <div class="contact-form-right">
                <h2>Already a Member ? Just SignIn !</h2>
                <form action="<?php echo e(url('/user-login')); ?>" method="post" id="contactForm LoginForm"> <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email" id="email" name="email" required data-error="Please Enter Your Email">
                               <div class="help-block with-errors"></div>
                           </div>

                       </div>
                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="Password" id="password" name="password" required data-error="Please Enter Your Password">
                               <div class="help-block with-errors"></div>
                           </div>

                       </div>
                       <div class="col-md-12">
                           <div class="submit-button text-center">
                               <button class="btn hvr-hover" id="submit" type="submit">Login</button>
                               <div id="msgSubmit" class="h3 text-center hidden"></div>
                               <div class="clearfix"></div>
                           </div>

                       </div>
                    </div>
                </form>
            </div>
         </div>
     </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('wayshop.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Way-Shop\resources\views/auth/login.blade.php ENDPATH**/ ?>