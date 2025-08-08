<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings'; // Specify the table name if it's not the plural form of the model name
    protected $fillable = ['title', 'salary']; // Specify the table name if it's not the plural form of the model name
}
