<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembicara extends Model
{
    use HasFactory;
    protected $table = 'pembicaras';
    protected $fillable = ['id','image','name','description'];
}
