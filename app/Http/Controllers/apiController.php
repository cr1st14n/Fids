<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class apiController extends Controller
{
    public function users(Request $request)
    {
        if ($request->has('active')) {
            # code...
            $users=User::where('ative',true)->get();
        }else {
            # code...
            $users=User::all();
        }
        return response()->json($users);
    }
    public function login(Request $request)
    {
        $response=['status'=>0,'msg'=>'error'];
        $data= json_decode($request->getContent());
        
        
        $user=User::where('email',$data->email)->first();
        // return $user;

        if ($user) {
            if (Hash::check($data->password,$user->password)) {
                $token=$user->createtoken('example');
                $response['status']=1;
                $response['msg']=$token->plainTextToken;
            } else {
                $response['msg']='Error de contraseña';
            }
            
        }else{
            $response['msg']='usuario no encontrado';
        }

        return response()->json($response);
    }
}
