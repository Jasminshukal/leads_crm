<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'phon',
        'purpose',
        'address',
        'income',
        'gender',
        'country',
        'alternative_email',
        'company',

    ];

}
