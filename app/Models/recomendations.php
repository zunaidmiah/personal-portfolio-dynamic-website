<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recomendations extends Model
{
    use HasFactory;
    protected $table = 'recomendations';
    protected $fillable = ['name' , 'email', 'message', 'star', 'is_hidden', 'is_deleted'];
}
