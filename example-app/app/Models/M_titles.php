<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_titles extends Model
{
    use HasFactory;

    protected $table = 'titles';
    protected $primarykey = 'title';
    public $incrementing = false;
    public $timestamps = false;
    
}
