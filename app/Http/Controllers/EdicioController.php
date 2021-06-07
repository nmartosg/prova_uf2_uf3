<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EdicioController extends Controller {
    public function dashboard()
    {
        $user=Auth::user();
        return view('dashboard',compact('user')); 
    }

    // EDICCIO DE DADES
    public function edit(){
        $user=Auth::user();
        return view("editUser" , compact('user'));
    }

    // ACTUALITZACIO DE DADES
    public function update(Request $request){
        $user=Auth::user();
        
        
        $data = request()->validate([
            'name' => 'required',
            'cognoms' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'nullable|min:8',
            'rpassword' => 'nullable|regex:/(^[A-Za-z0-9 ]+$)+/|same:password|min:8',
            'image' => 'required|dimensions:max_width=500,max_height=500'
        ]);
        
        // PUJADA DE LA IMATGE AL SERVIDOR
        $image = $request -> file('image');
        $imageName = 'image'.'.'.$image->getClientOriginalExtension();
        $data['imagen']=$request->file('image')->storeAs('public', $imageName);
        
        // PUJADA A LA DB DEL CANVIS EFECTUTATS
        DB::table('users')->where('id', '=', $user->id)->update(['name' => $request->name,'cognoms' => $request->cognoms, 'email' => $request->email, 'password' => Hash::make("$request->password"), 'imagen' => $data['imagen']]);

        //REDIRECCIONA A LA PAGINA PRINCIPAL 
        return Redirect::route('dashboard')->with('message', 'CANVIS EFECTUATS CORRECTAMENT!');
            
    }
}















        // $user=User::find($id);
        // if($data['img'] != null){
        //     $img = $data['img']->store('public');
        //     $url_img = Storage::url($img);
        //     $user->update([
        //         'img'=>$url_img,
        //     ]);
        // // }