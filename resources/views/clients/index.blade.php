<h1>قائمة العملاء</h1>

<a href="/clients/create">إضافة عميل جديد</a>

<table border="1">
    <tr>
        <th>الاسم</th>
        <th>الهاتف</th>
    </tr>

    @foreach($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->phone }}</td>
        </tr>
    @endforeach

</table>