<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nombreProveedor',
        'direccionProveedor',
        'telefonoProveedor'
    ];

    public function entradaMedicamento()
    {
        return $this->hasMany(EntradaMedicamento::class);
    }
}
