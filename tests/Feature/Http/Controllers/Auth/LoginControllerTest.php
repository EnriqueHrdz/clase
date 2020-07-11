<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginControllerTest extends TestCase
{
<<<<<<< HEAD
    use RefreshDatabase, WithFaker;
=======
>>>>>>> ab52d80be4c9009092d196cb1fed2fda58dfee67
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

<<<<<<< HEAD
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
=======
    /** @test  */
    public function show_products(){
        $response = $this->get('show/stores');

        $response->assertStatus(200);

    } 

    /** @test  */
    public function save_products(){
        $response = $this->post('save/product', [] );

        $response->assertStatus(404);
>>>>>>> ab52d80be4c9009092d196cb1fed2fda58dfee67
        // $response->assertSessionHasErrors('nombre');

    }

<<<<<<< HEAD
    // /** @test  */
    // public function Test_deleteproducts(){
    //     $response = $this->post('delete/product', [] );

    //     $response->assertStatus(404);
    // }

}

?>
=======
    /** @test  */
    public function delete_products(){
        $response = $this->post('delete/product', [] );

        $response->assertStatus(404);
    }

}

?>
>>>>>>> ab52d80be4c9009092d196cb1fed2fda58dfee67
