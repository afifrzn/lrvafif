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
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Edit</th>
            </tr>
    <tbody>
            @foreach ($Pemesanan as $item)
            <tr>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->wisata->nama_wisata }}</td>
            {{-- <td>{{ $item->User_id }}</td>
            <td>{{ $item->Wisata_id }}</td> --}}
            <td> <a href="{{ route("pemesanan.edit", $item->id)}}">Edit</a>
                <form action="{{ route('pemesanan.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-error" value="Delete">Delete</button>
        </td>
            </tr>
            @endforeach
    </tbody>
</table>

<a href="{{ route("pemesanan.create") }}">Tambah Data</a>