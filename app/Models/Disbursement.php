<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    protected $table = 'disbursements';
    public $timestamps = false;
    use HasFactory;
}
