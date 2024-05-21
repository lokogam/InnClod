<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;


    protected $fillable = ['nombre', 'codigo', 'contenido', 'tipo_id', 'proceso_id'];

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class, 'tipo_id');
    }

    public function proceso()
    {
        return $this->belongsTo(Proceso::class, 'proceso_id');
    }
}
