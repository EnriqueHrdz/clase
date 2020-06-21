<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    //
    public function get_channel($id){
        $channel = Channel::where('id', '=', $id)->get();
        return view('tv', ['channel' => $channel, 'ejemplo' => 'hola' ] );
    }
}
