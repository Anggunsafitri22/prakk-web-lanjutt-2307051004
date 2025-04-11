<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->nama }} - {{ $user->npm }}</li>
        @endforeach
    </ul>
</body>
</html>
