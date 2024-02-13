<?php 
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Proveïdors extends Model{
        use HasFactory;
        protected $table = 'proveïdors';
        protected $fillable = [
            'nom',
            'cif',
            'numero',
            'email',
            'tipus_incidencia',
        ];
    }