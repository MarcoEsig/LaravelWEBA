<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //je veux que tu remplisses les champs quand je demande
    protected $fillable = ['title','content'];

    //on pourra facilement appelez nos commentaire dans une vue depuis un post
    public function comments(){


        //notre posts detient plusieurs comentaire donc on appele notre class Comment dans les models
        return $this->hasMany(Comment::class);
    }



}
