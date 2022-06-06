<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolios extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $fillable = ['title', 'description', 'technology', 'link', 'created_by', 'is_hidden', 'is_deleted'];
}
