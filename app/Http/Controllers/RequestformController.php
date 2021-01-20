<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class RequestformController extends Controller
{
    public function index(Request $request)
    {
        $addresses = Address::all();
        return view("index", [
            "addresses" => $addresses
        ]);
    }
}
