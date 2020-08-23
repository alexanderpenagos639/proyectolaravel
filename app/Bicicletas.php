<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicletas extends Model
{
     // Instancio la tabla 'bicicletas' 
     protected $table = 'bicicletas';
    
     // Declaro los campos que usaré de la tabla 'bicicletas' 
     protected $fillable = ['nombre', 'precio', 'stock', 'imagenes', 'url'];
  
     // Relación One to Many (Uno a muchos), un registro puede tener muchas imágenes 
     public function imagenesbicicletas()
     {
         return $this->hasMany('App\Imgbicicletas');
     }//
}
