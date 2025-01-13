<h1>Vendor Form</h1>
<form action="vendor-form" method="post">
    <?php echo csrf_field(); ?> 

    <?php if(session('success')): ?>
        <div class="alert">
            <?php echo e(session('success')); ?>

        </div>
    
    <?php endif; ?>

    <div>
        <input type="text" placeholder="Enter your name" id="name" name="name" value="<?php echo e(old('name')); ?>"
        class="<?php echo e($errors->first('name')?'input-error':''); ?>"><br>
        <span style="color:red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <br>
    <div>
        <input type="text" placeholder="Enter your surname" id="surname" name="surname" value="<?php echo e(old('surname')); ?>"
        class="<?php echo e($errors->first('surname')?'input-error':''); ?>"><br>
        <span style="color:red"><?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <br>
    <div>
        <input type="text" placeholder="Enter your Company" id="company_name" name="company_name" value="<?php echo e(old('company_name')); ?>"
        class="<?php echo e($errors->first('company_name')?'input-error':''); ?>"><br>
        <span style="color:red"><?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <br>
    <div>
        <input type="text" placeholder="Enter your phone" id="phone" name="phone" value="<?php echo e(old('phone')); ?>"
        class="<?php echo e($errors->first('phone')?'input-error':''); ?>"><br>
        <span style="color:red"><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <br>
    <div>
        <input type="textarea" placeholder="" id="message" name="message" value="<?php echo e(old('message')); ?>"><br>
        <span style="color:red"><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <br>
    <!-- <div>
        <h5>Servicess</h5>
        <input type="checkbox" id="webdev" name="services[]" value="Webdev">
        <label for="webdev">Webdev</label><br>
        <input type="checkbox" id="seo" name="services[]" value="seo">
        <label for="seo">SEO</label><br>
        <input type="checkbox" id="sem" name="services[]" value="semdev">
        <label for="sem">SEM</label><br>
        <input type="checkbox" id="social" name="services[]" value="socialdev">
        <label for="social">Social</label><br>
        <input type="checkbox" id="desgin" name="services[]" value="desgin">
        <label for="desgin">Desgin</label><br>
        <input type="checkbox" id="tp" name="services[]" value="tp">
        <label for="tp">Tp</label><br>
    </div>

    <div>
        <h5>Gender</h5>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
    </div>

    <div>
        <h5>City</h5>
        <select name="city">
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
            <option value="Thane">Thane</option>
            <option value="Navi-Mumbai">Navi-Mumbai</option>
        </select>
    </div>
    <br> -->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>

<style>
    .input-error{
        border: 1px solid red;
    }

    .alert{
        background-color: green;
        color: white;
        padding: 10px;
        margin-bottom: 10px;
    }

    
</style>
<?php /**PATH /var/www/html/vendor/vendor/resources/views/vendor-form.blade.php ENDPATH**/ ?>