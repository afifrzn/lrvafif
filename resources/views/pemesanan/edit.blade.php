<form method="post" action="{{ route('pemesanan.update', $Pemesanan->id) }}">
    @method('PUT')
  @csrf
  <select name="name">
    @foreach ($User as $index => $Item)
    <option value="{{ $Item->id }}">{{ $Item->name }}</option>
    @endforeach
</select>
<br>
<select name="nama">
    @foreach ($Wisata as $index => $Item)
    <option value="{{ $Item->id }}">{{ $Item->nama_wisata }}</option>
    @endforeach
</select>
  <br>
<button class="btn btn-outline">Submit</button>
</form>