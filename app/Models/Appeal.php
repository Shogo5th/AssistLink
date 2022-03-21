<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{

    protected $table = 'appeals';
    public $timestamps = false;
    use HasFactory;
}
