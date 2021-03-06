<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{
    use HasFactory;
    protected $table = 'surveys';
    protected $primarykey = 'id';
    protected $fillable = 'name';
    protected $date = ['start_date','end_date'];  
}
