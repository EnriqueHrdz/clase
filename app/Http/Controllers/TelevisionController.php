<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class TelevisionController extends Controller
{
    //
    public function get_channel($id){
        $channel = Channel::where('id', '=', $id)->get();
        return view('tv', ['channel' => $channel ] );
    }
}
