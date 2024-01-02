<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>

    <h3>Data:</h3>
    @foreach($show_data as $data)
        <p>Nama: {{ explode(' ', $data->name)[0] . " " . explode(' ', $data->name)[1]  }}</p>
        <p>Usia: {{ $data->age }}</p>
        <p>Kota: {{ $data->city }}</p>
        <hr>
    @endforeach


</body>
</html>
