<?php

namespace App\Models;
use App\models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $primaryKey = 'id_rol';

    protected $fillable = [
        'nombre_rol'
    ];

    public function users(){
        return $this->hasMany(User::class, 'id_rol', 'id_rol');
    }
}
