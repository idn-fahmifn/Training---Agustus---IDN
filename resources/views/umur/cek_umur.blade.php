<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Umur Saya</title>
</head>
<body>
    <h1>Login sesuai umur</h1>
    <hr>
    <form action="{{route('proses')}}" method="POST">
        <label for="">Berapa Umur Kamu? </label>
        <input type="number" name="umur" id="umur">
        <button type="submit">Login</button>
    </form>
</body>
</html>