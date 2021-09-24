<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone_number extends Model
{
    use HasFactory;
    protected $table = 'Phone_number';
    protected $primarykey = 'id';
    protected $fillable = 'phone';
}
