<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\NewMessageNotification;
use Illuminate\Support\Facades\DB;
use App\Models\Message;

class HomeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["user_id"] = Auth::user()->id;
        $data['user_name'] = Auth::user()->name;
        return view("home", $data);
    }

    public function send(Request $request){
        $message = new Message;
        $message->setAttribute('from', Auth::user()->id);
        $message->setAttribute('to', 'All');
        $message->setAttribute('messages', $request->mensaje);
        $message->setAttribute('suma', $request->suma);
        $message->save();

        event(new NewMessageNotification($message));

    }



    public function admin(){
        $data["user_id"] = Auth::user()->id;
        $data['user_name'] = Auth::user()->name;

        if(Auth::user()->admin == 1){
            return view("admin", $data);
        }else{
            return response('Unauthorized.', 401);
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
