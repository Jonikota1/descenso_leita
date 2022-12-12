<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nombre','correo','dni', 'direccion', 'postal','poblacion','objeto', 'cantidad', 'user_id'
    ];

    protected static function boot(){
        parent::boot();
        self::creating(function ($table){
            if(! app()->runningInConsole()){
                $table->user_id =auth()->id(); 
            }
        });
    }

}
