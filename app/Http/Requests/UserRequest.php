<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        $userId = $this->route('user'); // Ini ngambil ID dari route (user/{id})

        return [
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255|unique:users,npm,' . $userId,
            'kelas_id' => 'required|exists:kelas,id',
        ];
    }
}
