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
            "address" => "テスト市テスト町１番",
            "tel" => "123-4567",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table("addresses")->insert([
            "companyname" => "ABCDEF株式会社",
            "address" => "テスト市テスト町2番",
            "tel" => "123-4567",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table("addresses")->insert([
            "companyname" => "hogehoge株式会社",
            "address" => "テスト市テスト町3番",
            "tel" => "123-4567",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
    }
}
