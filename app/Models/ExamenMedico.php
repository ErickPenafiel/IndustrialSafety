<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenMedico extends Model
{
    use HasFactory;

    protected $fillable = [
        'trabajador_id',
        'documento',
    ];

    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }
}
