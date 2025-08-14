<form action="{{ route('berita_admin.update', $item) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('berita_admin._form')
    <button type="submit">Update</button>
</form>