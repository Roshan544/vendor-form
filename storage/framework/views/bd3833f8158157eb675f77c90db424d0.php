<h1>Submitted Forms</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Company</th>
        <th>Phone</th>
    </tr>
    <?php $__currentLoopData = $conceptco; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conceptco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($conceptco->id); ?></td>
        <td><?php echo e($conceptco->name); ?></td>
        <td><?php echo e($conceptco->surname); ?></td>
        <td><?php echo e($conceptco->company_name); ?></td>
        <td><?php echo e($conceptco->phone); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH /var/www/html/vendor/vendor/resources/views/dashboard.blade.php ENDPATH**/ ?>