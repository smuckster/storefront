<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_new_product() {
        $this->withoutExceptionHandling();

        $product = Product::factory()->raw();

        $this->post('/products', $product)->assertRedirect('/products');

        $this->get('/products')->assertSee($product);
    }

    /** @test */
    public function a_user_can_view_a_product() {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $this->get($product->path())->assertSee($product->name)->assertSee($product->code);
    }

    /** @test */
    public function a_product_requires_a_name() {
        $product = Product::factory()->raw(['name' => '']);

        $this->post('/products', $product)->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_product_requires_a_code() {
        $product = Product::factory()->raw(['code' => '']);

        $this->post('/products', $product)->assertSessionHasErrors('code');
    }

    /** @test */
    public function a_product_requires_a_price() {
        $product = Product::factory()->raw(['price' => '']);

        $this->post('/products', $product)->assertSessionHasErrors('price');
    }
}
