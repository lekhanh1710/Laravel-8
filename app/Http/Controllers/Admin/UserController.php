<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(UserRequest $request){
        // Will return only validated data
        $validated = $request->validated();
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
//        dd($data);
        Admin::create($data);
//        DB::table('users')->insert($data);

    }
}
