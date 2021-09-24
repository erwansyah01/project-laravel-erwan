<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitras extends Model
{
    use HasFactory;
    protected $table = 'mitras';
    protected $primarykey = 'email';
    protected $fillable = ['code','name','nickname','profession','address'];
    protected $enum = ['L','P'];
    protected $text = 'photo';
    protected $date = 'birthdate';
}
