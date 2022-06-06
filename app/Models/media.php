<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $fillable = ['type', 'link', 'rel_id', 'is_hidden', 'is_deleted', 'created_by'];
}
