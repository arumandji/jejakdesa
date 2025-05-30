<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi';
    protected $primaryKey = 'province_id';

    protected $fillable = ['name'];

    // Relasi ke kabupaten (one to many)
    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class, 'province_id', 'province_id');
    }
}
