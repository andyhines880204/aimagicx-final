<div>
    <div class="input-box">								
        <h6><?php echo e(__('Full Name')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></h6>
        <div class="form-group">							    
            <input type="text" class="form-control <?php $__errorArgs = ['flutterwave_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="flutterwave_name" name="flutterwave_name" value="<?php echo e(auth()->user()->name); ?>" autocomplete="off" required>
        </div>
            <?php $__errorArgs = ['flutterwave_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($errors->first('flutterwave_name')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div> 
    <div class="input-box">								
        <h6><?php echo e(__('Email Address')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></h6>
        <div class="form-group">							    
            <input type="text" class="form-control <?php $__errorArgs = ['flutterwave_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="flutterwave_email" name="flutterwave_email" value="<?php echo e(auth()->user()->email); ?>" autocomplete="off" required>
        </div>
            <?php $__errorArgs = ['flutterwave_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($errors->first('flutterwave_email')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>    
    <div class="input-box">								
        <h6><?php echo e(__('Phone Number')); ?></h6>
        <div class="form-group">							    
            <input type="text" class="form-control <?php $__errorArgs = ['flutterwave_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="flutterwave_phone" name="flutterwave_phone" value="<?php echo e(auth()->user()->phone_number); ?>" autocomplete="off" required>
        </div>
            <?php $__errorArgs = ['flutterwave_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($errors->first('flutterwave_phone')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div> 
</div><?php /**PATH D:\Workspace\Abdulhadi Project\aimagicx-final\resources\views/components/flutterwave-collapse.blade.php ENDPATH**/ ?>