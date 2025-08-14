<form action="{{ route('sotk.update', $sotk) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('sotk._form')
    <button type="submit">Update</button>
</form>