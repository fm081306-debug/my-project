<!DOCTYPE html>
<html>
<head>
    <title>قائمة الطلبات</title>
</head>
<body>

<h1>قائمة الطلبات</h1>

<a href="/requests/create">➕ إضافة طلب جديد</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>اسم العميل</th>
        <th>الخدمة</th>
        <th>الحالة</th>
        <th>تاريخ الطلب</th>
        <th>الإجراءات</th>
    </tr>

    @foreach($requests as $request)
        <tr>
            <td>{{ $request->id }}</td>
            <td>{{ $request->client->name ?? '---' }}</td>
            <td>{{ $request->service->name ?? '---' }}</td>
            <td>{{ $request->status ?? 'قيد الانتظار' }}</td>
            <td>{{ $request->created_at }}</td>

            <td>
                <a href="/requests/{{ $request->id }}/edit">تعديل</a>

                <form action="/requests/{{ $request->id }}" method="POST" style="display:inline;">
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