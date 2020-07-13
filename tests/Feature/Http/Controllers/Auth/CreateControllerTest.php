<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
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

    // /** @test  */
    // public function Test_showproducts(){
    //     $response = $this->get('show/stores');

    //     $response->assertStatus(200);

    // } 

    /** @test  */
    public function Test_saveproducts(){
        $this->withoutMiddleware();
        $response = $this->post('api/save/product', [
            "name" => "sabrita",
            "description" => "aire",
            "store_id" => 1,
            "amount" => 2.5

        ] );

        $response->assertJsonFragment(["success" => "Datos Guardados correctamente"]);
        //$response->assertStatus(404);
        // $response->assertSessionHasErrors('nombre');

    }

    /** @test  */
    public function Test_updateproducts(){
        $this->withoutMiddleware();
        $response = $this->patchJson('api/edit/product', [
            "name" => "sabrita",
            "id" => 1

        ] );

        $response->assertStatus(200);

    }

    /** @test  */
    public function test_delete_product(){
        $this->withoutMiddleware();
        $response = $this->deleteJson('api/delete/product', [
            "id" => 1

        ] );

        $response->assertStatus(200);

    }

}

?>