<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        "name" ,

        "address" ,

        "state" ,

        "zipcode" ,

        "occupation" ,

        "income" ,

        "age" ,

        "gender" ,

        "phone"
    ];
    use HasFactory;
}
