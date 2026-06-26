
<form action="{{ route('appointments.store') }}" method="POST">
    @csrf

    <label>نوع الحجز:</label>
    <select name="level_app_id" required>
        <option value="">اختر نوع الحجز</option>

        @foreach($types as $type)
            <option value="{{ $type->id }}">
                {{ $type->name }}
            </option>
        @endforeach

    </select>

    <button type="submit">حفظ</button>

</form>