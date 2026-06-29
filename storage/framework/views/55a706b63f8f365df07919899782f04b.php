
<form action="<?php echo e(route('clients.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <input type="text" name="name" placeholder="الاسم">
    <input type="text" name="phone" placeholder="الهاتف">
    <input type="text" name="email" placeholder="الإيميل">
    <input type="text" name="address" placeholder="العنوان">

    <!-- 👇 هنا بالضبط -->
    <select name="city_id">
        <option value="">اختر المدينة</option>
        <option value="1">Tripoli</option>
        <option value="2">Misrata</option>
    </select>

    <button type="submit">حفظ</button>
</form>
<?php /**PATH C:\Users\HP-ProBook-G2\Desktop\my project\my-project\resources\views/clients/create.blade.php ENDPATH**/ ?>