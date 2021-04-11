<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa'; //Eloquent akan membuat model mahasiswa menyimpan record di table mahasiswas
    
    protected $primaryKey='nim'; //Mengambil isi DB dengan primaryKey

    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
        
        
    ];
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}
