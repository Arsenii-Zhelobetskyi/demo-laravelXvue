<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    // Define the table associated with the model if it doesn't follow Laravel's naming convention
    protected $table = 'items';

    // Define the fillable properties
    protected $fillable = ['name', 'desc', 'price'];
    
    public $timestamps = false; // Add this line to disable timestamps
}
