<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoreo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'observaciones',
        'detalle',
        'responsable',
        'tipoMonitoreo',
    ];
}
