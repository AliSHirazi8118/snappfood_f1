<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;

    public $fillable = [
        'food_categories',
        'food_count',
        'restaurant_id'
    ];
}