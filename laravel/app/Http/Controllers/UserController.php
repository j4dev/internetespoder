<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $user = user::all();
        return $user;
    }

    public function store(Request $request)
    {
        $user = user::create($request->all());
        return response()->json([
            'message' => 'Creado satisfactoriamente',
        ], 201);
    }

    public function show($id)
    {
        $user = user::find($id);
        return $user;
    }

    public function update(Request $request, $id)
    {
        $user_update = user::find($id);
        $user_update->update($request->all());
        return $request;
    }

    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();
        return response()->json([
            'message' => 'Se elimino correctamente',
        ], 200);
    }

    public function joinTables(){
        $user_family = user::join('family','user.id','=','family.id')
                        ->get();
        return $user_family;
    }
}
