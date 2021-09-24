<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vilages extends Model
{
    use HasFactory;
    protected $table = 'vilages';
    protected $primarykey = 'id';
    protected $fillable = ['code','name'];
}
