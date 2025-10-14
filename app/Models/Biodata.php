<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Biodatas extends Model
{
    protected $fillable = [
        'nama',
        'tgl_lahir',
        'jk',
        'agama',
        'alamat',
        'tinggi_badan',
        'berat_badan',
        'foto',
    ];

    public function getFotoUrlAttribute()
    {
        if (! $this->foto) {
            return null;
        }

        return Storage::url($this->foto);
    }
}