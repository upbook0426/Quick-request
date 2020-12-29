<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressesController extends Controller
{
    public function index()
    {
        $addresses = Address::all();

        return view("addresses.index", ["addresses" => $addresses]);
    }
    public function view($id)
    {
        $address = Address::findOrFail($id);

        return view("index", ["address" => $address]);
    }
}
