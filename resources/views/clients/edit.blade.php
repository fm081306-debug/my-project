<h1>تعديل التصنيف</h1>

<form action="/categories/{{ $category->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}">
    <input type="text" name="description" value="{{ $category->description }}">

    <button type="submit">تحديث</button>
</form>