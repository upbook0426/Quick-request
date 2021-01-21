<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressesController extends Controller
{
    public function list()
    {
        $addresses = Address::all();
        //配送先一覧
        return view("addresses.list", ["addresses" => $addresses]);
    }
    public function edit_list()
    {
        $addresses = Address::all();
        //配送先一覧
        return view("addresses.edit_list", ["addresses" => $addresses]);
    }
    public function edit($id)
    {
        $address = Address::findOrFail($id);

        return view("addresses.edit", ["address" => $address]);
    }
    public function update(Request $request)
    {
        $param = [
            "address" => $request->delivery_address,
            "companyname" => $request->delivery_companyname,
            "tel" => $request->delivery_tel,
        ];
        DB::table("addresses")
            ->where("id", $request->id)
            ->update($param);
        return redirect("/edit_list");
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
        $post_data = $request->all();

        return view("index", compact("post_data"), [
            "address" => $address,
        ])->with("msg", "登録できました");
    }
}
