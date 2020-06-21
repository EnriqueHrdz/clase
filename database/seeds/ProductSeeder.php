<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ["name" => "Manzana", "description" => "Manzana Golden", "store_id" => 1, "amount" => 3.5],
            ["name" => "Pera", "description" => "Pera verde", "store_id" => 1, "amount" => 5],
            ["name" => "Limón", "description" => "Limón sin semilla", "store_id" => 1, "amount" => 4],
            ["name" => "Mango", "description" => "Mango Ataulfo", "store_id" => 1, "amount" => 6.85],
        ]);
    }
}
