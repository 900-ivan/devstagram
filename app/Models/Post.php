<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
  //proteger los datos de la bd
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
      ];

      //relacion modelo user 
    public function user()
    {
      return $this->belongsTo(User::class)->select(['name', 'username']);
    }
   
    
    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function likes()
    {
      return $this->hasMany(Like::class);
    }

    public function checkLike(User $user)
    {
      return $this->likes->contains('user_id', $user->id);
    }
  
}
