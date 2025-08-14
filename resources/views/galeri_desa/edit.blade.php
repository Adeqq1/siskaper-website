<form action="{{ route('galeri-desa.update', $item) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('galeri_desa._form')
    <button type="submit">Update</button>
</form>