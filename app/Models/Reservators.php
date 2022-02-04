<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservators extends Model
{
    protected $table = 'reservators';

    protected $fillable = [
        'nama',
        'notelp',
        'alamat',
        'jenis'];

    use HasFactory;

    public function antri()
    {
        return $this->hasOne(Antrians::class,'reservator_id');
    }
}
