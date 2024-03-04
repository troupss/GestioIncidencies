<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencies extends Model
{
    use HasFactory;
    protected $table = 'incidencies';
    protected $fillable = [
        'nom',
        'tipus',
        'lloc',
        'descripcio',
        'media',
        'estat',
        'enviat',
    ];
    public function proveidor()
    {
        return $this->belongsTo(Proveïdors::class, 'proveidor_id'); // Ajusta el nombre del campo de la clave foránea según tu base de datos
    }
}