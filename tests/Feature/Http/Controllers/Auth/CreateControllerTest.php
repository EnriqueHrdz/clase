<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateControllerTest extends TestCase
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
    /** @test  */
<<<<<<< HEAD
    public function test_createproducts(){
        $this->withoutMiddleware();
        $response = $this->post('api/delete/product/1', [
            "name" => "sabrita",
            "description" => "aire",
            "store_id" => 1,
            "amount" => 2.5
        ] );
        }
        public function test_deleteproduct(){
            $delete = factory ( api/delete/product :: class) -> test_createproducts ();
            
            $this -> delete ( 'api/delete/product' .$delete -> id ) -> afirmarResponseStatus(200);
            
        }

=======
    public function create_products(){

        $response = $this->post('new/product');

        $response->assertStatus(405);

    }
>>>>>>> ab52d80be4c9009092d196cb1fed2fda58dfee67
}
