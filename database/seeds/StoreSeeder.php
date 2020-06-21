<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('store')->insert([
            ["name" => "Doña Mary", "address" => "UTRM", "phone" => "9841234455", "email" => Str::random(10).'@gmail.com'],
            ["name" => "Tiendita de la esquina", "address" => "Cerrada kiwi #10", "phone" => "984122332", "email" => Str::random(10).'@gmail.com'],
        ]);
    }
}
