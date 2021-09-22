<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'firstname', 'departure_time', 'arrival_time', 'adult_nb', 'child_nb', 'breakfast', 'hotel', 'preticted_arrival_time', 'comment'];
}
