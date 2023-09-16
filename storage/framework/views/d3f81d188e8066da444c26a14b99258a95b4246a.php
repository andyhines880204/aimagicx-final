
<div class="input-box">
    <div class="form-group">
        <label class="form-label fs-12" for="cardholder-name"><?php echo e(__('Cardholder Full Name')); ?></label>
        <input type="text" class="form-control" id="cardholder-name" name="cardholder-name">
        <?php $__errorArgs = ['cardholder-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="cardholder-name"><?php echo e($errors->first('cardholder-name')); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>

<div class="input-box mb-6">
    <label class="form-label fs-12 text-left" for="card-element"><?php echo e(__('Credit or Debit Card')); ?></label>
    <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
    </div>
    <!-- Used to display form errors. -->
    <small id="card-errors" class="text-danger fs-12" role="alert"></small>	

    <input type="hidden" name="payment_method" id="paymentMethod">

</div>	

<?php $__env->startSection('js'); ?>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
		// Create a Stripe client.
		var stripe = Stripe('<?php echo e(config('services.stripe.api_key')); ?>');
		// Create an instance of Elements.
		var elements = stripe.elements({ locale: 'en'});
		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '14px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {hidePostalCode: true, style: style});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
		});

		// Handle form submission.
		var form = document.getElementById('payment-form');
        var payButton = document.getElementById('payment-button');  
		var cardHolderName = document.getElementById('cardholder-name');     

		payButton.addEventListener('click', async function(event) {
            if(form.elements.payment_platform.value === "<?php echo e($payment_platform->id); ?>") {
                event.preventDefault();
                const { paymentMethod, error } = await stripe.createPaymentMethod(
                    'card', card, {
                        billing_details: { name: cardHolderName.value }
                    }
                );
                if (error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;

                } else {
                    // Send the token to your server.
                    var tokenInput = document.getElementById('paymentMethod');
                    tokenInput.value = paymentMethod.id;
                    
                    form.submit();

                }

            }
		});
	</script>
<?php $__env->stopSection(); ?><?php /**PATH D:\Workspace\Abdulhadi Project\aimagicx-final\resources\views/components/stripe-collapse.blade.php ENDPATH**/ ?>