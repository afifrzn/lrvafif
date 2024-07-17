<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
        border: 1px solid #000000;
}
</style>

<table>
            <tr>
            <th>Nama Destinasi</th>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>Edit</th>
            </tr>
    <tbody>
            @foreach ($Wisata as $item)
            <tr>
            <td>{{ $item->nama_wisata }}</td>
            <td>{{ $item->lokasi }}</td>
            <td>{{ $item->harga }}</td>
            <td> <a href="{{ route("wisata.edit", $item->id)}}">Edit</a></td>
            </tr>
            @endforeach
    </tbody>
</table>

<a href="{{ route("wisata.create") }}">Tambah Data</a>