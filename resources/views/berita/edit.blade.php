<form action="{{ route('berita.update', $item) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('berita._form')
    <button type="submit">Update</button>
</form>