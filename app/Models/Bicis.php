<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Bicis extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','nombre','descripcion','stock', 'precio', 'imagen'
    ];
}