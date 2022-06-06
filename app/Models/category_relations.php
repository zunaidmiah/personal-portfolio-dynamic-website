<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_relations extends Model
{
    use HasFactory;
    protected $table = 'category_relations';
    protected $fillable = ['cat_id', 'rel_id', 'type'];
}
