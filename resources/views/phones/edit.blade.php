<!--resources/views/phones/index.blade.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit hpt</title>
</head>
<body>
    <h1>Edit Hp</h1>

    <form action="{{route('phones.update',$phone->id)}}" method="get">
        @scrf
        @method('PUT')

        <label>Nama Hp</label><br>
        <input type="text" name="nama_hp" value="{{$phone->nama_hp}}"requaired><br>

        <label>brand</label><br>
        <input type="number"name="harga_per_hari" value="{{$phone->harga_per_hari}}"requaired><br><br>

        <label>status :</label><br>
        <select name="status">
            <option value="1"{{$phone->status ? 'selected' : ''}}>Tersedia</option>
            <option value="0"{{$phone->status ? 'selected' : ''}}>Tidak Tersedia</option>
        </select><br><br>

        <button type="submit">update</button>
    </form>

    <br>
    <a href="{{route('phones.index')}}">kembali ke daftar hp</a>
</body>
</html>