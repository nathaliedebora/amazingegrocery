<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'role_id';
    protected $table = 'roles';
    
    protected $fillable = [
        'role_name'
    ];
}
