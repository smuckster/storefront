<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use App\Models\ProductGroup;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_product_group_is_created_when_a_user_creates_a_product() {
        $product = Product::factory()->create();

        $this->post('/products', $product->raw());

        $this->assertInstanceOf(ProductGroup::class, $product->group());
    }
}
