<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employess extends Model
{
    use HasFactory;
    protected $table = 'employess';
    protected $fillable = [
        'nro_documento',
        'direccion_casa',
        'trabajo',
        'salario_basico',
        'fecha_admision',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
