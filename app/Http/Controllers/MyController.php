<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use App\Models\Owner;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function hello() {
        return 'hello!!!';
    }

    public function test() {
//        $house = Owner::find(1)->house;
//
//        dd($house);
        $data = CustomUser::find(6)->roles;
        foreach ($data as $role) {
            dump($role->named->role_id);
        }
    }
}
