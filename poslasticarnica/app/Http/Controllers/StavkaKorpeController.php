<?php

namespace App\Http\Controllers;

use App\Http\Resources\StavkaKorpeCollection;
use App\Models\StavkaKorpe;
use Illuminate\Http\Request;

class StavkaKorpeController extends Controller
{
    public function index() //korisnik moze da vidi samo stavke koje je on kreirao
    {
       $userOrders = StavkaKorpe::where('user_id', auth()->id())->get();
       return new StavkaKorpeCollection($userOrders);
    }

    public function destroy($id)  
    {

       $order = StavkaKorpe::find($id);
        
       if($order){
           if($order->user_id==auth()->id()){
            $order->delete();
            return response()->json("uspesno obrisano! " );
           }else{
            return response()->json("Nemate pravo da obrisete porudzbinu koja nije vasa!" );
           }
            

       }else{
            return response()->json("ne postoji trazeni objekat u bazi!");
       }
    }

    public function show($id)  
    {

       $order = StavkaKorpe::find($id);
        
       if($order){
           if($order->user_id==auth()->id()){
            
            return response()->json( $order );
           }else{
            return response()->json("Nemate pravo da vidite porudzbinu koja nije vasa!" );
           }
            

       }else{
            return response()->json("ne postoji trazeni objekat u bazi!");
       }
    }



}
