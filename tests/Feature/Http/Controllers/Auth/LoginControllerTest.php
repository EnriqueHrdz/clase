<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginControllerTest extends TestCase
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

    /** @test  */
    public function show_products(){
        $response = $this->get('show/stores');

        $response->assertStatus(200);

    } 

    /** @test  */
    public function save_products(){
        $response = $this->post('save/product', [] );

        $response->assertStatus(404);
        // $response->assertSessionHasErrors('nombre');

    }

    /** @test  */
    public function delete_products(){
        $response = $this->post('delete/product', [] );

        $response->assertStatus(404);
    }

}

?>
