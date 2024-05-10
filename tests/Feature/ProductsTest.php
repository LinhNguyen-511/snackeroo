<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_products_returns_an_array_of_products(): void
    {
        $response = $this->get("/api/products");

        $response->assertStatus(200)->assertJson([]);
    }
}
