
<table>
    <tr>
        <th>العميل</th>
        <th>الخدمة</th>
        <th>نوع الحجز</th>
        <th>التاريخ</th>
        <th>الحالة</th>
    </tr>

    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($appointment->client->name); ?></td>
        <td><?php echo e($appointment->service->name); ?></td>
        <td><?php echo e($appointment->type->name); ?></td>
        <td><?php echo e($appointment->date); ?></td>
        <td><?php echo e($appointment->status); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\HP-ProBook-G2\Desktop\my project\my-project\resources\views/appointments/index.blade.php ENDPATH**/ ?>