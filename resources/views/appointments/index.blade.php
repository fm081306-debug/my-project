
<table>
    <tr>
        <th>العميل</th>
        <th>الخدمة</th>
        <th>نوع الحجز</th>
        <th>التاريخ</th>
        <th>الحالة</th>
    </tr>

    @foreach($appointments as $appointment)
    <tr>
        <td>{{ $appointment->client->name }}</td>
        <td>{{ $appointment->service->name }}</td>
        <td>{{ $appointment->type->name }}</td>
        <td>{{ $appointment->date }}</td>
        <td>{{ $appointment->status }}</td>
    </tr>
    @endforeach
