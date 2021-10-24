<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;
    protected $fillable = [
        'cfname','cname','cemail','cphone','role','clocation','cjob','cwork','position',
    ];
}

