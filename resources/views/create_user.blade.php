@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h2 {
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: -5px;
        }
    </style>

    <div class="container">
        <h2>Create User</h2>

        {{-- Tampilkan pesan sukses jika ada --}}
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        {{-- Tampilkan pesan error jika ada --}}
        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            {{-- Input Nama --}}
            <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}" required>
            @error('nama') <p class="error">{{ $message }}</p> @enderror

            {{-- Input NPM --}}
            <input type="text" name="npm" placeholder="NPM" value="{{ old('npm') }}" required>
            @error('npm') <p class="error">{{ $message }}</p> @enderror

            {{-- Pilihan Kelas --}}
            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" required>
                <option value="">Pilih Kelas</option> {{-- Tambahkan pilihan default --}}
                @foreach($kelas as $kelasItem)
                    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                    @endforeach
            </select>
            @error('kelas_id') <p class="error">{{ $message }}</p> @enderror

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
