<HTML>
    <head>
    <h1>Add Data</h1>
</head>

<body>
        <h3>Data Pelanggan</h3>
        <form action="{{route("wisata.store")}}" method="POST">
            @csrf
            <table width="50%" border="0">
                
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