<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    protected $table = 'talents';
    protected $fillable = [
        'fname','email','phone','location','interest','education','linkedin','job','work'
    ];
}
