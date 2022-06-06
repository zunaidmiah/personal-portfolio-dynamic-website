<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['title', 'description', 'created_by', 'is_hidden', 'is_deleted'];
}
