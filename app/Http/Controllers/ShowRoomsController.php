<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /* creamos la variable rooms para almacenar el objeto y despues hacemos una consulta que 
        si el id no es null se muestren los siguientes datos en un json
        */
       $rooms = DB::table('rooms')->get();
       if ($request->query('id') !== null) {
           $rooms = $rooms->where('room_type_id', $request->query('id'));
       }
       return view('rooms.index', ['rooms' => $rooms]);
       
       //return response()->json($rooms); -Esto devolvía los datos en formato json
    }
}
