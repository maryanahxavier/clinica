<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'realizada', 'cliente_id'];
    public function cliente(){
        return $this->belongsTo('App/Models/Cliente');
    }
}
