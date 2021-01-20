<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressesController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        //配送先一覧
        return view("addresses.index", ["addresses" => $addresses]);
    }
    public function view($id)
    {
        $address = Address::findOrFail($id);

        return view("index", ["address" => $address]);
    }
    public function add(Request $request)
    {
        $address = new Address();
        $address->address = $request->delivery_address;
        $address->companyname = $request->delivery_companyname;
        $address->tel = $request->delivery_tel;
        $address->save();
        $all = $request->all();

        return view("index", ["address" => $address])
            ->with("msg", "登録できました")
            ->compact("all");
    }
}
