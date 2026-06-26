
<h2>تفاصيل الحجز</h2>

<div style="border:1px solid #ccc; padding:15px; width:300px;">

    <p><strong>العميل:</strong> {{ $appointment->client->name ?? '---' }}</p>

    <p><strong>الخدمة:</strong> {{ $appointment->service->name ?? '---' }}</p>

    <p><strong>نوع الحجز:</strong> {{ $appointment->levelApp->name ?? '---' }}</p>

    <p><strong>التاريخ:</strong> {{ $appointment->date }}</p>

    <p><strong>الوقت:</strong> {{ $appointment->time }}</p>

    <p><strong>الحالة:</strong> 
        <span style="color:blue;">
            {{ $appointment->status }}
        </span>
    </p>

</div>

<br>

