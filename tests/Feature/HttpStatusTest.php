<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HttpStatusTest extends TestCase
{
    /**
     * indexページのステータスコードは200
     *
     * @return void
     */
    public function testIndexStatus()
    {
        $response = $this->get("/");
        $response->assertOk();

        $response = $this->post("/index", [
            "delivery_companyname" => "laravel株式会社",
            "delivery_address" => "laravellaravel",
            "delivery_tel" => "06-1234-1234",
        ]);
    }
}
