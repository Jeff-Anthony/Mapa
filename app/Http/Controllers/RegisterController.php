<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function create(){
    	return view('registercreate');
    }
    public function store(Request $request){
    	$user=new Register();    
    	$user->carcompany = $request->get('name');   
    	$user->lastname = $request->get('lastname');    
    	$user->email = $request->get('email');
    	$user->password = $request->get('password');            
    	$user->save();  
    	return redirect('user')->with('success', 'Registro insertado');
    }
    public function index(){


        $users=reserva::orderBy('id','DESC')->paginate(3);
    	$users = Register::all();    
    	return view('index',compact('registers'));
    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

        $user= reserva::find($id);
        $user->delete();
        return redirect::to('Mapainfo');

    }



}
