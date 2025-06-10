<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pais extends Model{
use Hasfactory;
     protected $table = 'paises';
     protected $fillable = [
        'nombre',    
      
        
    ];
}
?>