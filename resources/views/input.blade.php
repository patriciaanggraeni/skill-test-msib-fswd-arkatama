<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input form</title>
</head>
<body>

    <form action="{{ url('/store_data') }}" method="POST">
        @csrf
        <label for="data">Masukkan data: </label>
        <input type="text" id="data" name="data" required>

        <button type="submit">Submit</button>
    </form>

    @if(session('data'))
        <h3>Data Baru Disimpan:</h3>
        <p>Nama: {{ session('data')->name }}</p>
        <p>Usia: {{ session('data')->age }}</p>
        <p>Kota: {{ session('data')->city }}</p>
    @endif

</body>
</html>
