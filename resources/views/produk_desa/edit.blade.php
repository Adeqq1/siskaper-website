<form action="{{ route('produk-desa.update', $item) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('produk_desa._form')
    <button type="submit">Update</button>
</form>