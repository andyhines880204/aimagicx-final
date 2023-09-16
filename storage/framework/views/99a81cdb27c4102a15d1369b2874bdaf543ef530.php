<div>
    <div class="input-box">								
        <h6><?php echo e(__('Email Address')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></h6>
        <div class="form-group">							    
            <input type="text" class="form-control <?php $__errorArgs = ['paystack_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="paystack_email" name="paystack_email" value="<?php echo e(auth()->user()->email); ?>" autocomplete="off">
        </div>
            <?php $__errorArgs = ['paystack_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($errors->first('paystack_email')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>    
</div><?php /**PATH D:\Workspace\Abdulhadi Project\aimagicx-final\resources\views/components/paystack-collapse.blade.php ENDPATH**/ ?>