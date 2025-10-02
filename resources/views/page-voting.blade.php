<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>halloooo</p>

    <h2>Selamat datang, {{ session('peserta_nama') }}</h2>
    <form method="POST" action="{{route('logout.process')}}">
        @csrf
        <button type="submit">Logout</button>
    </form>
    

</body>

</html>
