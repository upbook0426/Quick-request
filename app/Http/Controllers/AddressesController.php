<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Http\Requests\ValidateRequest;
use Validator;

class AddressesController extends Controller
{
    public function list()
    {
        $addresses = Address::paginate(5);
        //配送先一覧
        //dd($addresses);
        return view("addresses.list", ["addresses" => $addresses]);
    }
    public function edit_list()
    {
        $addresses = Address::paginate(5);
        //配送先一覧
        //dd($addresses);
        return view("addresses.edit_list", ["addresses" => $addresses]);
    }
    public function edit($id)
    {
        $address = Address::findOrFail($id);

        return view("addresses.edit", ["address" => $address]);
    }
    public function update($id, Request $request)
    {
        /* $this->validate($request, Address::$rules);*/
        $address = Address::find($request->id);
        $address->companyname = $request->delivery_companyname;
        $address->address = $request->delivery_address;
        $address->tel = $request->delivery_tel;
        $address->save();
        $addresses = Address::paginate(5);
        //配送先一覧
        return redirect()->route("edit_list", [
            "addresses" => $addresses,
        ]);
    }
    public function delete($id, Request $request)
    {
        /* $this->validate($request, Address::$rules);*/
        $address = Address::find($request->id)->delete();

        $addresses = Address::paginate(5);
        //配送先一覧
        return redirect()->route("edit_list", [
            "addresses" => $addresses,
        ]);
    }
    public function view($id)
    {
        $address = Address::findOrFail($id);

        return view("index", ["address" => $address]);
    }
    public function add(ValidateRequest $request)
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
