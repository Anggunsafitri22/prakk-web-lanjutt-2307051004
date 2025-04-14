<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan (karena nama model tidak sesuai konvensi default)
    protected $table = 'users';

    // Melindungi kolom tertentu agar tidak bisa diisi mass-assignment
    protected $guarded = ['id'];

    // Relasi ke tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    /**
     * Ambil data user (semua atau berdasarkan ID)
     * 
     * @param int|null $id
     * @return mixed
     */
    public static function getUser($id = null)
    {
        $query = self::join('kelas', 'kelas.id', '=', 'users.kelas_id')
                    ->select('users.*', 'kelas.nama_kelas as nama_kelas');

        if ($id !== null) {
            return $query->where('users.id', $id)->first();
        }

        return $query->get();
    }
}
