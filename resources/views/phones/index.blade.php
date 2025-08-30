<!--resources/views/phones/index.blade.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar rental hp</title>
</head>
<body>
    <h1>Daftar HP Rental</h1>

    <a href="{{route('phones.create')}}">Tambah Hp Baru</a>
    <ul>
        @foreach($phones as $phone)
        <li>
            {{$phone->nama_hp}}-{{$phone->brand}} - Rp{{number_format($phone-harga_per_hari)}} per hari
            <a href="{{route('phones.edit',$phone->id)}}">Edit</a>
            <form action="{{route('phones.destroy',$phone->id)}}"method="POST" style="display:inline">
                @crsf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>