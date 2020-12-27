<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("addresses")->insert([
            "companyname" => "テストテスト株式会社",
            "address" => "テスト市テスト町1-2-3",
            "tel" => "123-4567",
        ]);
    }
}
