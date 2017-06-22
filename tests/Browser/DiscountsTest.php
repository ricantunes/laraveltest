<?php

namespace Tests\Browser;

/*use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;*/

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DiscountsTest extends DuskTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testJsonStructure()
    {
        $response = $this->json('GET', '/orders/3');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'orders' => [
                    'id',
                    'customer-id',
                    'items',
                    'total'
                ],
                'reasons'
            ]);
    }

    public function testInvalidOrders()
    {
        $response = $this->json('GET', '/orders/4');

        $response
            ->assertStatus(200)
            ->assertJson([
                'error' => 'Error 1',
            ]);
    }

    public function testFindAllOrders()
    {
        $response = $this->json('GET', '/orders');

        $response
            ->assertStatus(200)
            ->assertJson([
                'error' => 'Error 2',
            ]);
    }
}
