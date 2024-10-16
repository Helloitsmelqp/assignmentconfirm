<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validtioController extends Controller
{

    public function create()
    {
        return view('create');
    }
public function store(Request $request)
{
$vaild=$request->validate(
    [
        'name'=> 'required|min:5',
        'email'=>'email',
        'password'=>'required|confirmed'
    ],
    [
       'name.required'=>'الحقل مطلوب',
       'password.required' => 'كلمة المرور مطلوبة',
       'password.confirmed' => 'كلمة المرور غير متطابقة',
      
    ]);
    $result=$vaild['name'];
    return $result;
}
}