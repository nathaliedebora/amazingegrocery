<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'gender_id';
    protected $table = 'genders';
    
    protected $fillable = [
        'gender_desc'
    ];
}
