<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function Test_saveproducts(){
        $this->withoutMiddleware();
        $response = $this->post('api/save/product', [
            "name" => "sabrita",
            "description" => "aire",
            "store_id" => 1,
            "amount" => 2.5

        ] );

        $response->assertJsonFragment(["success" => "Datos Guardados correctamente"]);
    }

    public function Test_Deleteproducts(){
        $response = $this->delete('api/delete/product/1');

}
}