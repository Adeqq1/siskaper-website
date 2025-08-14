<form action="{{ route('stat-penduduk.update', $item) }}" method="POST">
    @csrf @method('PUT')
    @include('stat_penduduk._form')
    <button type="submit">Update</button>
</form>