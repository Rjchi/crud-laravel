<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'Documento';
    protected $fillable = ['Nombres', 'Correo', 'Telefono', 'Direccion'];
    protected $guarded = [];
    public $timestamps = false;

}
