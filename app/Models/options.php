<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    use HasFactory;
    protected $table = 'options';
    protected $fillable = ['option_key', 'option_value', 'option_group', 'created_by'];
}
