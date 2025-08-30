<!--resources/views/phones/create.blade.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamabah hp baru</title>
</head>
<body>
    <h1>Tambah Hp Baru</h1>
    
    <form action="{{route('phone.store')}}"method="POST">
        @csrf
        <label>Nama Hp :</label><br>
        <input type="text" name="nama_hp" requaired><br><br>

        <label>brand :</label><br>
        <input type="text" name="brand" requaired><br><br>

        <label>Harga per Hari :</label><br>
        <input type="number" name="harga_per_hari"requaired><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="1">tersedia</option>
            <option value="o">tidak tersedia</option>
        </select><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>