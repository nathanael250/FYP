<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplooye extends Model
{
    protected $table = "employee";
    public $timeStamp = false;

    protected $fillable = [
        'name',
        'age'
    ];
}
