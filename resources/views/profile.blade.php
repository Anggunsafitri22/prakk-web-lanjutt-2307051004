<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg,rgb(247, 185, 238) 25%, transparent 25%) -50px 0,
                        linear-gradient(225deg,rgb(244, 61, 231) 25%, transparent 25%) -50px 0,
                        linear-gradient(315deg,rgb(238, 167, 227) 25%, transparent 25%),
                        linear-gradient(45deg,rgb(236, 147, 252) 25%, transparent 25%);
            background-size: 100px 100px;
            background-color:rgb(251, 161, 226);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background: rgba(243, 39, 120, 0.9); /* Semi transparan */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 400px;
        }
        .profile-img img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 6px solid rgb(191, 90, 151);
        }
        .profile-info {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background:rgb(232, 224, 230);
            border-radius: 8px;
            font-weight: bold;
            color:rgb(178, 26, 127);
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="profile-img">
        <img src="{{ asset('Images/profile.jpg') }}" alt="Foto Profil">
        </div>
        <div class="profile-info">Anggun Safitri {{ $nama }}</div>
        <div class="profile-info">2307051004 {{ $npm }}</div>
        <div class="profile-info">D3 Manajemen Informatika {{ $kelas }}</div>
    </div>

</body>
</html>