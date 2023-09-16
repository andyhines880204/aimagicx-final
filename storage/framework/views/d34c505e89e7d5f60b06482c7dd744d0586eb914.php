<div>
    <div class="input-box">								
        <h6><?php echo e(__('Full Name')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></h6>
        <div class="form-group">							    
            <input type="text" class="form-control <?php $__errorArgs = ['razorpay_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="razorpay_name" name="razorpay_name" value="<?php echo e(auth()->user()->name); ?>" autocomplete="off" required>
        </div>
            <?php $__errorArgs = ['razorpay_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($errors->first('razorpay_name')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div> 
    <div class="input-box">								
        <h6><?php echo e(__('Email Address')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></h6>
        <div class="form-group">							    
            <input type="text" class="form-control <?php $__errorArgs = ['razorpay_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="razorpay_email" name="razorpay_email" value="<?php echo e(auth()->user()->email); ?>" autocomplete="off" required>
        </div>
            <?php $__errorArgs = ['razorpay_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($errors->first('razorpay_email')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>    
</div><?php /**PATH D:\Workspace\Abdulhadi Project\aimagicx-final\resources\views/components/razorpay-collapse.blade.php ENDPATH**/ ?>