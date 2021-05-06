<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return $user->toJson();
    }

    public function store(Request $request)
    {
        $validateData = $request([
            'name' => 'required',
            'email' => 'required',
            ]);
        $user = User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
        ]);
        $msg = [
            'success' => true,
            'message' => 'User Sukses ditambah'
    ];
        return response()->json($msg);

    }

    public function show($id)
    {
        $user = User::find($id);
        return $user->toJson();
    }

    public function edit($id)
    {
        $user = User::find($id);
        return $user->toJson();
    }

    public function update(Request $request, $id)
    {
        $validateData = $request([
            'name' => 'required',
            'email' => 'required',
            ]);

       $user = User::find($id);
       $user->name = $validateData['name'];
       $user->email = $validateData['email'];
       $user->update();
        $msg = [
            'success' => true,
            'message' => 'User Sukses Update'
    ];
        return response()->json($msg);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!empty($user)){
            $user->delete();
            $msg = [
                'success' => true,
                'message' => 'User deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'User deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
