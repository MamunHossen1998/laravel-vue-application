<?php
 namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticationService{
    public function store(array $data){
        $response         = ['msg'=>'','data'=>$data];
        $data['password'] = Hash::make($data['password']);
        $success          = User::create($data);
        if($success){
            $response['msg']  =  'Successfully inserted !';
            $success['token'] =  $success->createToken($success->email)->accessToken;
            $response['data'] =  $success;
        }
        return $response;
    }
}

?>