<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizationrep extends Model
{
    protected $table = 'organizationreps';
    public $timestamps = false;
    protected $fillable = [
        'jobTitle', 
        'orgID',
        'username'
    ];    
    use HasFactory;
}
