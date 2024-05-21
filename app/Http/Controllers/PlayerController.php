<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        $players=Player::all();
        return response()->json($players,Response::HTTP_OK);
    }

    public function store(Request $request){
        $player=Player::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'player'=>$player
        ],Response::HTTP_CREATED);
    }

    public function update(Request $request,$category){
        $player=Player::find($category);
        $player->update($request->only('name','slug'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'player'=>$player
        ],Response::HTTP_CREATED);
    }

    public function destroy($player){
        $player=Player::find($player);
        $player->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
