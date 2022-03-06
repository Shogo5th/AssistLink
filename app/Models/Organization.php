<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';
    public $timestamps = false;
    protected $fillable = [
        'orgID',
        'orgName',
        'address',
    ];
    use HasFactory;
}
