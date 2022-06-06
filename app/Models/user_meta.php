<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_meta extends Model
{
    use HasFactory;
    protected $table = 'user_metas';
    protected $fillable = ['user_key', 'user_value', 'user_id'];
}
