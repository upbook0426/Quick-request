<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public static $rules = [
        "companyname" => "required|unique:posts",
        "address" => "required",
        "tel" => "required",
    ];
}
