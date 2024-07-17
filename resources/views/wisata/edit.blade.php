<HTML>
    <head>
    <h1>Edit Data</h1>
</head>

<body>
        <h3>Data Pelanggan</h3>
        <form action="{{route("wisata.update",$row->id)}}" method="POST">
            @csrf
            @method("PUT")
            <table width="25%" border="0">
                
                <tr>
                    <td>Nama Destinasi</td>
                    <td><input type="text" name="nama_wisata"></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td><input type="text" name="lokasi"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                    <td><input type="submit" name="Submit" value="add"></td>
                </tr>
            </table>
        </form>
</body>