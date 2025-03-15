<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Table name (optional, Laravel assumes the plural form of the model name)
    protected $table = 'products';

    // Mass assignable fields
    protected $fillable = ['name', 'description', 'price'];
}
