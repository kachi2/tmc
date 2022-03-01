<?php

namespace App\Traits;

trait CreateUsers
{
    private function CreateUser($request){
        return $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password'=> $request->pass,
        ];

    }

}