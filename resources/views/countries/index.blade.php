<!DOCTYPE html>
<html>
<head>
    <title>قائمة الدول</title>
</head>
<body>

<h1>قائمة الدول</h1>

<a href="/countries/create">إضافة دولة جديدة</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>#</th>
        <th>اسم الدولة</th>
        <th>تاريخ الإنشاء</th>
        <th>العمليات</th>
    </tr>

    @foreach($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->created_at }}</td>
            <td>
                <a href="/countries/{{ $country->id }}/edit">تعديل</a>

                <form action="/countries/{{ $country->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('هل أنت متأكد؟')">
                        حذف
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>