<form method="POST" action="/appointments/{{ $appointment->id }}">
    @csrf
    @method('PUT')

    <select name="status">
        <option value="pending">قيد الانتظار</option>
        <option value="approved">مقبول</option>
        <option value="cancelled">ملغي</option>
    </select>

    <button type="submit">تحديث</button>
</form>