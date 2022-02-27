<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'title',
        'content',
        'address',
        'coordinates',
        'phone',
        'email',
        'facebook',
        'facebook_url',
        'instagram',
        'instagram_url'
    ];
}
