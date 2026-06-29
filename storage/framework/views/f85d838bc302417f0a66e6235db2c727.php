<h1>قائمة العملاء</h1>

<a href="/clients/create">إضافة عميل جديد</a>

<table border="1">
    <tr>
        <th>الاسم</th>
        <th>الهاتف</th>
    </tr>

    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($client->name); ?></td>
            <td><?php echo e($client->phone); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>    <?php /**PATH C:\Users\HP-ProBook-G2\Desktop\my project\my-project\resources\views/clients/index.blade.php ENDPATH**/ ?>