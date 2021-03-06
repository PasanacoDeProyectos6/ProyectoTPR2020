<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function Consultas()
    {
        return $this->hasMany('App\Models\Consulta');
    }
    public function Diagnosticos()
    {
        return $this->hasMany('App\Models\Diagnostico');
    }
}
