<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'gender',
        'tel',
        'postcode',
        'address',
        'building',
        'detail',
    ];
}
