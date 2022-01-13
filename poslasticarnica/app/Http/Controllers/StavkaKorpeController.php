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
            $order->delete();
            return response()->json("uspesno obrisano!");

       }else{
            return response()->json("ne postoji trazeni objekat u bazi!");
       }
    }



}
