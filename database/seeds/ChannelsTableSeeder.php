<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('channels')->insert([
            ["image" => "imgs/cartoon.jpg"],
            ["image" => "imgs/discovery.jpg"],
            ["image" => "imgs/histoy.jpg"],
            ["image" => "imgs/mtv.jpg"],
        ]);
    }
}
