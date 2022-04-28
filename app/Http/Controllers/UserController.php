<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('permission')->get();

        return \response($user);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'max:255',
            'last_name' => ' max:255',
            'username' => 'unique:users',
            'email' => 'email|unique:users',
            'mobile_number' => '',
            'role' => 'max:255',
            'password' => 'required|min:5',

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 401);
        }

        //creates user
        $userCreate = User::create(array_merge($validator->validated(), [
            'password' => Hash::make($request->password),
        ]));

        if ($userCreate) {

            $userId = $userCreate->id;
            $num = count($request->permission);
            for ($i = 0; $i < $num; $i++) {
                Permission::create([
                    'user_id' => $userId,
                    'permission' => $request->permission[$i],
                ]);
            }

        }

        return response(["message" => "created successfully"]);

    }

    public function get_one($id)
    {
        $user = User::with('permission')->find($id);

        return \response($user);
    }

    public function update($id)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'max:255',
            'last_name' => ' max:255',
            'username' => 'unique:users',
            'email' => 'email|unique:users',
            'mobile_number' => '',
            'role' => 'max:255',

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 401);
        }
        $user = User::find($id);

    }

    public function delete($id)
    {
        $user = User::find($id);
        $id = $user->id;
        $permission = Permission::where('user_id', $id)->delete();
        $user->delete();
        return \response(["Message" => "user deleted"]);
    }
}
