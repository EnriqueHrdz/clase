<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;
use App\Products;

class ShowProducts extends Controller
{
    //
    public function get_products($id){
        $products = Stores::with(['products'])->where('id', $id)->get()->toArray();
        return view('pages.home', ['products' => $products[0]["products"] ] );
    }
    public function get_all_products(){
        $products = Stores::with(['products'])->get()->toArray();
        return view('pages.home', ['products' => $products[0]["products"] ] );
    }

    public function save( Request $request ){

        if( $request ){
            $product = new Products;

            $product->name = $request->name;
            $product->description = $request->description;
            $product->store_id = $request->store_id;
            $product->amount = $request->amount;

            if( $product->save() ) {
                return response()->json(["success" => "Datos Guardados correctamente"], 200);
            }
        }
    }

    public function editProduct( Request $request ){

        if( $request ){
            $product = Products::where('id', $request->id)->update( $request->toArray() );
            if( $product ) {
                return response()->json(["success" => "Datos Actualizados correctamente"], 200);
            }
        }
    }

    public function deleteProduct( Request $request){
        if( $request ){
            $deletedRows = Products::where('active', 0)->delete();
            if( $deletedRows ) {
                return response()->json(["success" => "Datos Eliminados"], 200);
            }
        }
    }
}
