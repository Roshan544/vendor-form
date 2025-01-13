<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concept extends Model
{
    use HasFactory;
    //
    protected $table = 'concept';

    protected $fillable = [
        'name',
        'surname',
        'company_name',
        'phone',
        'message',
    ];

}
