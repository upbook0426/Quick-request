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
        $response = $this->get("/index");
        $response->assertStatus(200);
    }
}
