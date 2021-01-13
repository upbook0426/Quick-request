<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class RequestformController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        //最初の配送先選択画面
        return view("index", ["addresses" => $addresses]);
    }
}
