<?php

namespace App\Http\Controllers;

use http\Env\Request;

class DataHandleController extends Controller
{
public function handlePathVariable(\Illuminate\Http\Request $request, $id){
echo "Tham số vừa truyền lên là $id";
}
public function handleQueryString(\Illuminate\Http\Request $request){
$firstName = $request ->get('firstName');
$lastName = $request ->get('lastName');
$email = $request ->get('email');
return view('datahandle', [
    'firstName'=>$firstName,
    'lastName'=>$lastName,
    'email'=>$email
]);
}
public function handleForm(\Illuminate\Http\Request $request){
return view('form-data');
}
public function processForm(\Illuminate\Http\Request $request){
    $data = $request->all();
    return view('form-success',$data);
return view('form-process');
}
}
