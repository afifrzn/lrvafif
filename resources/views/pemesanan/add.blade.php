<HTML>
    <head>
    <h1>Add Data</h1>
</head>

<body>
        <h3>Data Pemesanan</h3>
        <form method="post" action="{{  route('pemesanan.store') }}">
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
</body>