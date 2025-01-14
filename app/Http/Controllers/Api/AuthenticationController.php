<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Http\Requests\RegistrationStoreRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends BaseController
{
    // private $service;
    // public function __construct()
    // {
    //     $this->service = new RegistrationStoreRequest();
    // }
    public function register(RegistrationStoreRequest $request,AuthenticationService $service){
    //    $response =  $this->service->store($request->all());
       $response =  $service->store($request->all());
       return $this->sendResponse($response,$response['msg']);
    }
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required',
        ],[
            'email.required'    => 'Please enter the email',
            'password.required' => 'Please enter the password'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            $user_data        = Auth::user();
            $success['token'] =  $user_data->createToken($user_data->email)->accessToken;
            $success['data']  =  $user_data;
            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Email or password incorrect !.', ['error' => 'Unauthorised']);
        } 
    }
}
