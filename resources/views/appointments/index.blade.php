<!DOCTYPE html>
<html>
<head>
    <title>قائمة المواعيد</title>
</head>
<body>

<h1>قائمة المواعيد</h1>

<a href="/appointments/create">➕ إضافة موعد جديد</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>اسم العميل</th>
        <th>الخدمة</th>
        <th>التصنيف</th>
        <th>التاريخ</th>
        <th>الوقت</th>
        <th>الحالة</th>
        <th>الإجراءات</th>
    </tr>

    @foreach($appointments as $appointment)
        <tr>
            <td>{{ $appointment->id }}</td>
            <td>{{ $appointment->client->name ?? '---' }}</td>
            <td>{{ $appointment->service->name ?? '---' }}</td>
            <td>{{ $appointment->levelApp->name ?? '---' }}</td>
            <td>{{ $appointment->date }}</td>
            <td>{{ $appointment->time }}</td>
            <td>{{ $appointment->status }}</td>

            <td>
                <a href="/appointments/{{ $appointment->id }}/edit">تعديل</a>

                <a href="/appointments/{{ $appointment->id }}">عرض</a>

                <form action="/appointments/{{ $appointment->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                        حذف
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>