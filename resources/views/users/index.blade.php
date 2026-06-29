<!DOCTYPE html>
<html>
<head>
    <title>قائمة المستخدمين</title>
</head>
<body>

<h1>قائمة المستخدمين</h1>

<a href="/users/create">➕ إضافة مستخدم جديد</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>الاسم</th>
        <th>الإيميل</th>
        <th>تاريخ الإنشاء</th>
        <th>الإجراءات</th>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>

            <td>
                <a href="/users/{{ $user->id }}/edit">تعديل</a>

                <form action="/users/{{ $user->id }}" method="POST" style="display:inline;">
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