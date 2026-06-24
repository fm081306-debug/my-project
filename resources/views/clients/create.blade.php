<h1>إضافة عميل</h1>

<form action="/clients" method="POST">
    @csrf

    <input type="text" name="name" placeholder="الاسم">
    <input type="text" name="phone" placeholder="الهاتف">

    <button type="submit">حفظ</button>
</form>