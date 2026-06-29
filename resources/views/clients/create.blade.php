
<form action="{{ route('clients.store') }}" method="POST">
    @csrf

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
